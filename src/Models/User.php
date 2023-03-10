<?php

namespace Dminustin\LSNE\CorePackage\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Dminustin\LSNE\CorePackage\BaseClasses\LsneModuleClass;
use Dminustin\LSNE\CorePackage\Traits\HasUUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasUUIDTrait;

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        /** @var LsneModuleClass $module */
        foreach (config('lsne-core.user.modules') as $module) {
            $module->initModule($this);
        }
    }
}
