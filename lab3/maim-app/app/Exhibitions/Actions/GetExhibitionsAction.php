<?php

namespace App\Exhibitions\Actions;

use IlluminateSupportCollection;
use IlluminateDatabaseEloquentCollection;
use IlluminateRoutingPipeline;
use IlluminateHttpRequest;


use App\Models\Exhibition;

class GetExhibitionsAction
{
    public function execute()
    {
        return Exhibition::all();
    }
}