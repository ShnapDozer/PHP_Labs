<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;

use App\Exhibitions\Actions\GetExhibitionActionById;
use App\Exhibitions\Actions\CreateExhibitionAction;
use App\Exhibitions\Actions\UpdateExhibitionAction;
use App\Exhibitions\Actions\DeleteExhibitionAction;

use App\Exhibitions\Requests\UpdateExhibitionRequest;
use App\Exhibitions\Requests\CreateExhibitionRequest;

use App\Exhibitions\Resources\ExhibitionResource;

class ExhibitionsController extends Controller
{
    public function getById(int $id, GetExhibitionActionById $action)
    {
        return new ExhibitionResource($action->execute($id));
    }

    public function create(CreateExhibitionRequest $request, CreateExhibitionAction $action) 
    {
        return new ExhibitionResource($action->execute($request->validated()));
    }

    public function update(int $id, UpdateExhibitionRequest $request, UpdateExhibitionAction $action) 
    {
        return new ExhibitionResource($action->execute($id, $request->validated()));
    }

    public function delete(int $id, DeleteExhibitionAction $action) 
    {
        return new ExhibitionResource($action->execute($id));
    }

    public function index() 
    {
        $exhibitions = Exhibition::all();
        return view('exhibitions.index', compact('exhibitions'));
    }
}
