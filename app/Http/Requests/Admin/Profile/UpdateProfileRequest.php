<?php

namespace App\Http\Requests\Admin\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Store slug based input title.
     *
     * 
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->input('title')),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:30|regex:/^[\pL\s\-]+$/u',
            'slug' => 'min:5',
            'body' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi',
            'title.min' => 'Judul minimal 5 kata',
            'title.max' => 'Judul terlalu panjang',
            'title.regex' => 'Judul hanya boleh huruf',
            'body.required' => 'Isi profil wajib diisi',
            'body.min' => 'Isi profil minimal 5 kata',
        ];
    }
}
