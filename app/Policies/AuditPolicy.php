<?php

namespace App\Policies;

use App\Models\Audit;
use App\Models\User;

class AuditPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('admin.audit.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Audit $role): bool
    {
        return $user->hasPermission('admin.audit.viewAny');
    }
}
