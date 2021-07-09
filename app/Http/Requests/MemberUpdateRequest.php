<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberUpdateRequest extends FormRequest
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
            'membership_type'=>'required',
            'application_no'=>'',
            'is_aproved'=>'',
            'first_name_en'=>'required',
            'middle_name_en'=>'',
            'last_name_en'=>'required',
            'dob_ad'=>'',
            'dob_ad'=>'',
            'gender'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'country_code'=>'required',
            'mobile'=>'required',
            'aux_mobile'=>'',
            'email'=>'required',
            'website'=>'',
            'p_country'=>'required',
            'p_state'=>'required',
            'p_district'=>'required',
            'p_municipality'=>'required',
            'p_ward_no'=>'required',
            'p_village_name'=>'required',
            't_country'=>'',
            't_state'=>'',
            't_district'=>'',
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
            ];
    }
}
