<?php

namespace App\Policies;

use App\Models\Provincia;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvinciaPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Provincia $provincia): bool
    {
        if (!$user->is_admin) {
            return false;
        }

        return $provincia->comuni()->exists();
    }

}
