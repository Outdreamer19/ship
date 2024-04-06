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
        return true;
       // return $this->email == 'shane@example.com';
       /// return $this->id = 2;
       // return str_ends_with($this->email, '@brightsmile.com') && $this->hasVerifiedEmail();
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
