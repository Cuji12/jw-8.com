<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
             'firstname' => 'required|max: 100',
             'lastname' => 'required|max: 100',
             'email' => 'required|email|max: 75',
             'company' =>'max: 100',
             'subject' =>'required|max: 100',
             'message' => 'required',
//             'g-recaptcha-response' => 'required|recaptcha'
         ];
//           $validator=Validator::make($request->all(),[
//            'g-recaptcha-response'=>'required|google_captcha'
//        ]);
     }
     public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'email' => 'The :attribute must be a valid :attribute address',
            'g-recaptcha-response.recaptcha' => 'Captcha verification failed',
            'g-recaptcha-response.required' => 'Please complete the captcha'
        ];
      }
}

