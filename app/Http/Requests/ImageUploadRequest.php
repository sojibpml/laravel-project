<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageUploadRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ];
    }
    public function message(): array
    {
        return [
            'image.required' => 'একটি ছবি সিলেক্ট করুন।',
            'image.image' => 'ফাইলের টাইপ অবশ্যই ছবি হতে হবে।',
            'image.max' => 'ছবিটির সাইজ সর্বোচ্চ 2MB হতে পারবে।',
        ];
    }
}
