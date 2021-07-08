<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

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
        'member_details.membership_type'=>'',
        'member_details.application_no'=>'',
        'member_details.is_aproved'=>'',
        'member_details.first_name_en'=>'required',
        'member_details.middle_name_en'=>'',
        'member_details.last_name_en'=>'required',
        'member_details.dob_ad'=>'',
        'member_details.dob_ad'=>'',
        'member_details.gender'=>'required',
        'member_details.religion'=>'required',
        'member_details.nationality'=>'required',
        'member_details.country_code'=>'required',
        'member_details.mobile'=>'required',
        'member_details.aux_mobile'=>'',
        'member_details.email'=>'required',
        'member_details.website'=>'',
        'member_details.image'=>'',
        'member_details.p_state_id'=>'required',
        'member_details.p_district_id'=>'required',
        'member_details.p_municipality'=>'required',
        'member_details.p_ward_no'=>'required',
        'member_details.p_village_name'=>'required',

        'member_details.t_state_id'=>'',
        'member_details.t_district_id'=>'',
        'member_details.t_municipality'=>'',
        'member_details.t_ward_no'=>'',
        'member_details.t_village_name'=>'',
        'member_details.is_same_address'=>'',

        'member_details.fathers_name'=>'',
        'member_details.fathers_phone_no'=>'',
        'member_details.fathers_occupation'=>'',
        'member_details.fathers_designation'=>'',
        'member_details.mothers_name'=>'',
        'member_details.mothers_phone_no'=>'',
        'member_details.mothers_occupation'=>'',
        'member_details.mothers_designation'=>'',
        'member_details.acheivements'=>'',
        ];
    }
    public function messages()
    {
        return [
           
        ];
    }
}
