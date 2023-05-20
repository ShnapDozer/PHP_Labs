<?php

namespace App\Exhibitions\Requests;

use Illuminate\FoundationHttpFormRequest;
use Illuminate\ValidationRule;

class CreateExhibitionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'date' => 'required|date',
            'city' => 'required|string',
            'artist' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
