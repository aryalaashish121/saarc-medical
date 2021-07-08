<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    public $primaryKey = 'id';
    protected $fillable = [
        'application_no','is_aproved','membership_type',
        'first_name_en','middle_name_en','last_name_en','dob_bs','dob_ad',
        'gender','religion','nationality','country_code','mobile','aux_mobile',
        'email','website','image',
        'p_state_id','p_district_id','p_municipality','p_ward_no','p_village_name',
        't_state_id','t_district_id','t_municipality','t_ward_no','t_village_name',
        'is_same_address',
        'fathers_name','fathers_phone_no','fathers_occupation','fathers_designation',
        'mothers_name','mothers_phone_no','mothers_occupation','mothers_designation',
        'acheivements','status',
    ];
    
}
