<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'subtitle' => 'required|max:255',
            'link' => 'nullable',
            'information' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Gambar harus diisi',
            'title.required' => 'Judul harus diisi',
            'subtitle.required' => 'Subjudul harus diisi',
            'subtitle.max' => 'Subjudul maksimal 255 karakter',
            'information.required' => 'Keterangan harus diisi',
            'information.max' => 'Keterangan maksimal 255 karakter',
        ];
    }
}
