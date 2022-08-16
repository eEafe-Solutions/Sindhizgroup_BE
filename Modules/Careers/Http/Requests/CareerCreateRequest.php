<?php

namespace Modules\Careers\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerCreateRequest extends FormRequest
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
            "email" => "required|string|email:rfc,dns",
            "name" => "required",
            "massage" => "required",
            "position" => "required"
        ];
    }
}
