<?php

namespace App\Exhibitions\Actions;
use App\Models\Exhibition;

class GetExhibitionAction
{
    public function execute(int $id): Exhibition
    {
        return Exhibition::findOrFail($id);
    }
}

class CreateExhibitionAction
{
    public function execute(array $data): Exhibition
    {
        return Exhibition::create($data);
    }
}

class UpdateExhibitionAction
{
    public function execute(int $id, array $data): Exhibition
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->update($data);

        return $exhibition;
    }
}

class DeleteExhibitionAction
{
    public function execute(int $id): void
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->delete();
    }
}

class GetExhibitionsAction
{
    public function execute(): IlluminateSupportCollection
    {
        return Exhibition::all();
    }
}

class GetExhibitionsByDateAction
{
    public function execute(string $date): IlluminateSupportCollection
    {
        return Exhibition::where('date', '=', $date)->get();
    }
}

class GetExhibitionsByCityAction
{
    public function execute(string $city): IlluminateSupportCollection
    {
        return Exhibition::where('city', '=', $city)->get();
    }
}

class GetExhibitionsByArtistAction
{
    public function execute(string $artist): IlluminateSupportCollection
    {
        return Exhibition::where('artist', '=', $artist)->get();
    }
}

