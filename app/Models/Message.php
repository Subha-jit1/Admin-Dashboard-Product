<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'conversation_id',
        'sender_id',
        'content',
    ];

    // Relationship with the conversation the message belongs to
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    // Relationship with the user who sent the message
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relationship to track message seen status
    public function messageUsers()
    {
        return $this->hasMany(MessageUser::class);
    }
}
