<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Photo;

class PhotoPolicy extends Policy
{
    public function update(User $user, Photo $photo)
    {
        // return $photo->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Photo $photo)
    {
        return true;
    }
}
