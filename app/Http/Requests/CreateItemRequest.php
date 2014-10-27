<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest {

    protected $dontFlash = ['image1','image2','image3'];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'title'       => 'required|min:8',
            //'description' => 'required|min:12',
            //'price'       => 'required',
            //'image1'      => 'required|image',
            //'image2'      => 'image'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}
