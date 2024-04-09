<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        //return true;
        //return $this->email == 'shane1obdurate@gmail.com || ttcourier24@gmail.com';
       /// return $this->id = 2;
       // return str_ends_with($this->email, '@brightsmile.com') && $this->hasVerifiedEmail();
     
        // Array of emails to search within
        $emails = [
            'shane1obdurate@gmail.com',
            'ttcourier24@gmail.com',
            'brightsmile249@gmail.com'
        ];
        
        // Get the email to check from the request
        $emailToCheck = $this->email;

        // Check if the email exists in the array
        $emailFound = in_array($emailToCheck, $emails);

        // Return true if email found, false otherwise
        return $emailFound;
    
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            // Generate a random verification token for whatsapp webhook
            do {
                $customerNumber = rand(100, 5000);
            } while (static::where('customer_number', $customerNumber)->exists());

            $user->customer_number = $customerNumber;
        });
    }
}
