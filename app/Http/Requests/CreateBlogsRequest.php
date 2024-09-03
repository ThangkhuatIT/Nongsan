<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogsRequest extends FormRequest
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
            'file_upload' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'title' => 'required',
        ];
    }
    /**
     * Xác định các thông báo lỗi tùy chỉnh.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'file_upload.required' => 'Chưa tải ảnh lên',
            'category.required' => 'Chưa chọn thể loại bài viết',
            'title.required' => 'Bài viết chưa có tiêu đề',
            'tag.required' => 'Bài viết chưa có tiêu đề',
        ];
    }
}
