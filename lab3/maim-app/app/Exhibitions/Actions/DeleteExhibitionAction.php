<?php

namespace App\Exhibitions\Actions;

use App\Models\Exhibition;

class DeleteExhibitionAction
{
    public function execute(int $id): void
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->delete();
    }
}
