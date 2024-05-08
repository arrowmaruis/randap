<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ndp_classes;
use Illuminate\Auth\Access\Response;

class NdpClassesPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ndp_classes $ndpClasses): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ndp_classes $ndpClasses): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ndp_classes $ndpClasses): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ndp_classes $ndpClasses): bool
    {
        return true ;
        
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ndp_classes $ndpClasses): bool
    {
        return true ;
        
    }
}
