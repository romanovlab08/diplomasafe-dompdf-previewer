<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreviewRequest extends FormRequest
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
//            TODO: Add the request validation
//            'paper' => 'required|string|in:letter,A4,legal', //'letter', 'legal', 'A4', etc. See Dompdf\Adapter\CPDF::$PAPER_SIZES
//            'orientation' => 'required|string|in:portrait,landscape',
            'template_name' => 'required|string'
        ];
    }

    public function validationData()
    {
        return array_merge($this->all(), $this->route()->parameters());
    }
}
