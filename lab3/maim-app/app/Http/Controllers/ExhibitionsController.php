<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;

use App\Exhibitions\Actions\GetExhibitionsAction;
use App\Exhibitions\Actions\GetExhibitionActionById;
use App\Exhibitions\Actions\CreateExhibitionAction;
use App\Exhibitions\Actions\UpdateExhibitionAction;
use App\Exhibitions\Actions\DeleteExhibitionAction;

use App\Exhibitions\Request\UpdateExhibitionRequest;
use App\Exhibitions\Request\CreateExhibitionRequest;

use App\Exhibitions\Resources\ExhibitionResource;

class ExhibitionsController extends Controller
{
    public function getAll(GetExhibitionsAction $action) 
    {
        return new ExhibitionResource($action->execute());
    }

    public function getById(int $id, GetExhibitionActionById $action)
    {
        return new ExhibitionResource($action->execute($id));
    }

    public function create() 
    {
        return [CreateExhibitionAction::class, 'execute'];
    }

    public function update() 
    {
        return [UpdateExhibitionAction::class, 'execute'];
    }

    public function delete() 
    {
        return [DeleteExhibitionAction::class, 'execute'];
    }


}
