<?php

namespace App\Exhibitions\Actions;

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

class UpdateExhibitionRequest extends FormRequest
{
    public function rules(): array
    {
        $id = (int) $this->route('id');

        return [
            'name' => 'required|string',
            'date' => 'required|date',
            'city' => 'required|string',
            'artist' => 'required|string',
            'description' => 'nullable|string',
            'id' => [Rule::exists('exhibitions')->where(function ($query) use ($id) {
                $query->where('id', $id);
            })],
        ];
    }
}

