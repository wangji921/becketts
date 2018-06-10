<?php

namespace App\Observers;

use App\Models\Photo;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PhotoObserver
{
    public function creating(Photo $photo)
    {
        //
    }

    public function updating(Photo $photo)
    {
        //
    }
}