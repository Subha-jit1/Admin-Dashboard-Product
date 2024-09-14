<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_group',
        'group_name',
    ];

    protected $appends = [
        'profile_photo_url', 
    ];

    // Relationship with users in the conversation
    public function users()
    {
        return $this->belongsToMany(User::class, 'conversation_users');
    }

    // Relationship with messages in the conversation
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // Relationship to check the unread messages count for a user
    public function messageUsers()
    {
        return $this->hasManyThrough(MessageUser::class, Message::class);
    }

    public function getProfilePhotoUrlAttribute(){
        return 'https://ui-avatars.com/api/?name=gr&length=2&color=398bf7&background=cff7fa&format=png'; 
    } 

}
