<?php

namespace App\Exhibitions\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\ValidationRule;

class CreateExhibitionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'theme' => 'required|string',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
}
