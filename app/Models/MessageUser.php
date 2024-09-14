<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'user_id',
        'is_seen',
    ];

    // Relationship with the message
    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    // Relationship with the user who read the message
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
