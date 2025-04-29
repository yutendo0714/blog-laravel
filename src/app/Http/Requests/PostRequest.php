<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'body' => ['required', 'string', 'max:4000'],
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'title.required' => '必須です',
    //         'title.string' => '文字を入力してください',
    //         'title.max' => '100文字以内で入力してください',
    //         'body.required' => '必須です',
    //         'body.string' => '文字を入力してください',
    //         'body.max' => '100文字以内で入力してください',
    //     ];
    // }
}
