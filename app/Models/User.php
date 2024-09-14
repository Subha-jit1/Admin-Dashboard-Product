<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles; 

    // appends
    protected $appends = [
        'profile_photo_url',
        'full_name'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }
    
    public function getProfilePhotoUrlAttribute(){
        return 'https://ui-avatars.com/api/?name='.urlencode($this->full_name).'&length=2&color=398bf7&background=cff7fa&format=png'; 
    } 

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class, 'conversation_users');
    }

    // Relationship with messages the user has sent
    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
    
}
