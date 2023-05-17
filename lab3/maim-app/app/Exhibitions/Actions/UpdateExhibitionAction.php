<?php

namespace App\Exhibitions\Actions;

use App\Models\Exhibition;

class UpdateExhibitionAction
{
    public function execute(int $id, array $data): Exhibition
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->update($data);

        return $exhibition;
    }
}