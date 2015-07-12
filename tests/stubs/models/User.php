<?php

namespace Artesaos\Defender\Testing;

use Artesaos\Defender\Contracts\User as DefenderUserContract;
use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TestUser.
 */
class User extends Model implements DefenderUserContract
{
    use Authenticatable, CanResetPassword, HasDefender;

    /**
     * @inheritdoc
     * @return string
     */
    public function getTable()
    {
        return config('auth.table', 'users');
    }
}
