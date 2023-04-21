<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Modify the input values
     *
     */
    protected function sanitizeInput() {

        // get the input
        $input = array_map('trim', $this->all());

        // remove trailing ',' on the string
        $input['operands'] = trim($input['operands'], ',');
        $input['operands'] = str_replace(' ', '', $input['operands']);
        $input['operands'] = explode(',', $input['operands']);
        $this->replace($input);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $this->sanitizeInput();

        return [
            'operands' => 'required|array',
            'operands.*' => 'numeric'
        ];
    }
}
