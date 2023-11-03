<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'placename'=>'required',
            'address'=>'required',
            'latitude'=>'required|int',
            'longitude'=>'required|int',
            'price'=>'required',
            'description'=>'required',
            'ticket_quantity'=>'required'
        ];
    }
}
