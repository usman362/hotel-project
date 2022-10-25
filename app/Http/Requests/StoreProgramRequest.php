<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramRequest extends FormRequest
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
            'tour_name' => 'required',
            'url_slug' => 'required',
            'reference' => 'required',
            'destination_id' => 'required',
            'activity_id' => 'required',
            'duration' => 'required',
            'min_participant' => 'required',
            'max_participant' => 'required',
            'accommodation' => 'required',
            'tour_overview' => 'required',
            'tour_thumbnail' => 'required',
            'tour_banner' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required'

        ];
    }
}
