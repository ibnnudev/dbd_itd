<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sex',
        'birthday',
        'address',
        'phone',
        'email',
        'password',
        'role',
        'is_active',
        'profile_picture'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELATIONSHIPS
    public function samples()
    {
        return $this->hasMany(Sample::class, 'created_by');
    }

    public function detailSamples()
    {
        return $this->hasMany(DetailSample::class, 'created_by');
    }

    // SCOPES
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%');
        });
    }

    public function scopeFilterByRole($query, array $filters)
    {
        $query->when($filters['role'] ?? false, function ($query, $role) {
            $query->where('role', $role);
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
