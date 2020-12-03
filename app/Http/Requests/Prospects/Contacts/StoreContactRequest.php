<?php

namespace App\Http\Requests\Prospects\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'nullable',
            'phone_mobile' => 'nullable',
            'fax' => 'nullable',
            'address' => 'nullable',
            'address_2' => 'nullable',
            'unit' => 'nullable',
            'city' => 'nullable',
            'province' => 'nullable',
            'postal_code' => 'nullable',
            'country' => 'nullable',
            'notes' => 'nullable',
        ];
    }
}
