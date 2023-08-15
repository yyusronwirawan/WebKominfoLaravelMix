<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255',
            'thumbnail' => 'nullable|max:1024|image|mimetypes:image/jpg,image/jpeg,image/png|mimes:jpg,jpeg,png|dimensions:min_width=50,min_height=50',
            'description' => 'nullable|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'name.min' => 'Nama minimal 3 kata',
            'name.max' => 'Nama maksimal 255 kata',
            'url.required' => 'URL wajib diisi',
            'url.min' => 'URL minimal 3 kata',
            'url.max' => 'URL maksimal 255 kata',
            'thumbnail.max' => 'Ukuran maksimal file 1 MB',
            'thumbnail.image' => 'File yang anda pilih bukan gambar',
            'thumbnail.mimes' => 'Gambar yang diupload harus dengan extensi .jpg, .jpeg, atau .png',
            'thumbnail.dimensions' => 'Gambar minimal ukuran 50 x 50 px',
            'description.min' => 'Deskripsi minimal 3 kata',
        ];
    }
}
