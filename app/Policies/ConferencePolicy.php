<?php

namespace App\Policies;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConferencePolicy
{
    use HandlesAuthorization;


    public function update(User $user, Conference $conference): bool
    {
        return true;
    }

    public function delete(User $user, Conference $conference): bool
    {
        return $user->is_admin;
    }

}
