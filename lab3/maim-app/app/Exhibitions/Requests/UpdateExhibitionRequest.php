<?php

namespace App\Exhibitions\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateExhibitionRequest extends FormRequest
{
    public function rules(): array
    {
        $id = (int) $this->route('id');

        return [
            'id' => [Rule::exists('exhibitions')->where(function ($query) use ($id) {
                $query->where('id', $id);
            })],
            'name' => 'required|string',
            'theme' => 'required|string',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
}

