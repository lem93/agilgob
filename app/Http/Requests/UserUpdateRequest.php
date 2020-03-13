<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
          'nombre' => 'required|string|max:50',
          'apellidos' => 'required|string|max:255',
          'email' => 'required|email:rfc,dns|max:255',
          'password' => 'required|string|min:7|max:255',
          'rol' => 'required|in:admin,operador,administrativo',        ];
    }
}
