<?php

namespace App\Policies;

use App\Models\Search;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SearchPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Search $search): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Search $search): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Search $search): bool
    {
        return true;
    }
}
