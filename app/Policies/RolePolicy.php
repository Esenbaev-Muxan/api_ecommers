<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{

    public function viewAny(User $user): bool
    {
        return $user->can('role:viewAny');
    }


    public function view(User $user, Role $role): bool
    {
        //
    }


    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Role $role): bool
    {
        
    }
}
