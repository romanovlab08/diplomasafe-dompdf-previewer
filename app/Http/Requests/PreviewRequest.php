<?php

namespace App\Http\Requests;

use Dompdf\Adapter\CPDF;
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
            'size' => 'nullable|string|in:'. implode(',', array_keys(CPDF::$PAPER_SIZES)), // See Dompdf\Adapter\CPDF::$PAPER_SIZES
            'orientation' => 'nullable|string|in:portrait,landscape',
            'template_name' => 'required|string'
        ];
    }

    public function validationData()
    {
        return array_merge($this->all(), $this->route()->parameters());
    }
}
