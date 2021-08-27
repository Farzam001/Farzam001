<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|min:3|max:10",
            "email" => "required|email",
            "phone" => "required|min:11|max:11",
            "password" => "required",
            "address" => "required|min:15"

        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Please write a name",
            "name.min" => "The name has to have at least :min characters.",
            "name.max" => "The name has to have no more than :max characters.",
            "phone.required" => "Please enter phone number",
            "phone.min" => "Number must be of at least 11 digits :min characters",
            "phone.max" => "Number must be of at least 11 digits :max characters",
            "password.required" => "Enter a password",
            "address.required" => "Enter an address",
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        // throw (new ValidationException($validator))
        // ->errorBag($this->errorBag)
        //->redirectTo($this->getRedirectUrl());

        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
