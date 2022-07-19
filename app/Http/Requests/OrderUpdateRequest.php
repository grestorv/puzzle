<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiFormRequest;

class OrderUpdateRequest extends ApiFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['max:255'],
            'surname' => ['max:255'],
            'patronymic' => ['max:255'],
            'total' => ['digits_between:1,10'],
            'address' => ['max:255'],
        ];
    }
}
