<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
        'application_no'=>'',
        'is_aproved'=>'',
        'first_name_en'=>'required',
        'middle_name_en'=>'required',
        'last_name_en'=>'required',
        'dob_bs'=>'',
        'dob_ad'=>'',
        'gender'=>'required',
        'religion'=>'required',
        'nationality'=>'required',
        'country_code'=>'required',
        'mobile'=>'required',
        'aux_mobile'=>'',
        'email'=>'required',
        'website'=>'',
        'image'=>'required',
        'p_state_id'=>'required',
        'p_district_id'=>'required',
        'p_municipality'=>'required',
        'p_ward_no'=>'required',
        'p_village_name'=>'required',

        't_state_id'=>'',
        't_district_id'=>'',
        't_municipality'=>'',
        't_ward_no'=>'',
        't_village_name'=>'',
        'is_same_address'=>'',
        
        'fathers_name'=>'',
        'fathers_phone_no'=>'',
        'fathers_occupation'=>'',
        'fathers_designation'=>'',
        'mothers_name'=>'',
        'mothers_phone_no'=>'',
        'mothers_occupation'=>'',
        'mothers_designation'=>'',
        'acheivements'=>'',
        'status'=>'',
        ];
    }
    public function messages()
    {
        return [
           
        ];
    }
}