<?php

declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class User extends ShieldUserModel
{
    protected function initialize(): void
    {
        parent::initialize();

        $this->allowedFields = [
            ...$this->allowedFields,

            'name',
        ];
    }

    public function getUsersWithAuthData()
    {
        return $this->select('users.*, auth_identities.*')
                    ->join('auth_identities', 'auth_identities.user_id = users.id')
                    ->findAll();
    }
}
