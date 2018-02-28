<?php

namespace Crewlogix\SlotsManager\Requests\Consultant;

use Illuminate\Foundation\Http\FormRequest;

class SlotUpdateRequest extends FormRequest
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
        // dd('Filter Event Update  Request ');
        return [
            'name' => 'required|max:255', 
            'slug' => 'required|max:255', 
            'content' => 'someTimes|required', 
            'date' => 'required|date', 
        ];
    }

    public function messages()
    {
        // dd('Filter Event Request ');
        return [
            // 'name.required' => 'Name field is required.', 
            // 'slug.required' => 'Name field is required.', 
        ];
    }
}
