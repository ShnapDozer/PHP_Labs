<?php

namespace App\Exhibitions\Actions;
use App\Models\Exhibition;

class CreateExhibitionAction
{
    public function execute(array $data): Exhibition
    {
        return Exhibition::create($data);
    }
}
