<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConversationSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedConversations(number_of_conversations: 10);
        $this->seedConversationUsers();
    } 


    private function seedConversations($number_of_conversations){
        for ($i = 1; $i <= $number_of_conversations; $i++) {
            $data = [
                'is_group' => $i < 6 ? 1 : 0,
                'name' => $i < 6 ? fake()->company() : null, 
            ];
            DB::beginTransaction();
            try {
                Conversation::create($data);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                Log::error("Failed to create conversation record: " . $e->getMessage());
            }
        }
    }
    
    private function seedConversationUsers(){
        $groupConversations = Conversation::select('id', 'is_group')->where('is_group', 1)->get();
        $privateConversations = Conversation::select('id')->where('is_group', 0)->get();
        $this->storeConversations($groupConversations);
        $this->storeConversations($privateConversations);  
    }

    private function storeConversations($conversations){
        foreach($conversations as $conversation){ 
            $users = User::whereDoesntHave('conversations')->inRandomOrder()->take(3)->get();
            foreach ($users as $user) {
                $conversation->users()->attach($user->id);
            } 
        }
    } 
}
