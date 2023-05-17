<?php

namespace App\Exhibitions\Actions;
use App\Models\Exhibition;

class GetExhibitionActionById
{
    public function execute(int $id): Exhibition
    {
        return Exhibition::findOrFail($id);
    }
}
