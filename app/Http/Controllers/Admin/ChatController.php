<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function getAllConversations(Request $request)
    {
        try {
            
            // Fetch all conversations for the authenticated user
            
            $conversations = Conversation::with([
                'users' => function ($query) {
                    $query->select('users.id', 'first_name', 'middle_name', 'last_name'); // Select user fields
                },
                'messages' => function ($query) {
                    $query->orderBy('created_at', 'desc'); 
                },
                'messages.sender:id,first_name,middle_name,last_name', // Fetch sender details for messages
            ])
            ->whereHas('users', callback: function ($query) {
                $query->where('user_id', Auth::id()); // Filter conversations where the user is a participant
            })
            ->withCount([
                'messages',
                'messages as unread_count' => function ($query) {
                    $query->whereDoesntHave('messageUsers', function ($query) {
                        $query->where('user_id', Auth::id());
                    })
                    ->where('sender_id', '!=', Auth::id()); // Exclude messages sent by the authenticated user
                }
            ]) 
            ->get();
            
            dd($conversations);
  
            // Format the conversations for the frontend
            $formattedConversations = $conversations->map(function ($conversation) {
                $latestMessage = $conversation->messages->first();
                $isGroup = $conversation->is_group;
                
                return [
                    'id' => $conversation->id,
                    'is_group' => $isGroup,
                    'name' => $isGroup ? $conversation->name : $conversation->users->where('id', '!=', Auth::id())->first()->full_name,
                    'profile_photo_url' => $isGroup ? $conversation->profile_photo_url : $conversation->users->where('id', '!=', Auth::id())->first()->profile_photo_url,
                    'latest_message' => $latestMessage ? $latestMessage->message : null,
                    'latest_message_sender_name' => $latestMessage ? $latestMessage->sender->full_name : null,
                    'latest_message_sender_profile_photo_url' => $latestMessage ? $latestMessage->sender->profile_photo_url : null,
                    'latest_message_time' => $latestMessage ? $latestMessage->created_at : null,
                    'unread_message_count' => $conversation->unread_count, // Unread message count for the conversation
                ];
            });
            
            // Sort the conversations by latest message time
            $sortedConversations = $formattedConversations->sortByDesc(function ($conversation) {
                return $conversation['latest_message_time'];
            })->values()->all();
 

            // Return the response
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $sortedConversations,
            ]);

    
        } catch (\Throwable $th) {
            Log::debug($th->getMessage());
            return response()->json(['status' => false, 'message' => 'Error getting data']);
        }
    }
    
    
    
}