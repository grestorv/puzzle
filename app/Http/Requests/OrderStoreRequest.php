<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiFormRequest;

class OrderStoreRequest extends ApiFormRequest
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
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'patronymic' => ['max:255'],
            'total' => ['required', 'digits_between:1,10'],
            'address' => ['required', 'max:255'],
        ];
    }
}
