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
        'bank_name','bank_branch','bank_account_no','payment_slip',
        'application_no','is_aproved','membership_type','user_id',
        'first_name_en','middle_name_en','last_name_en','dob_bs','dob_ad',
        'gender','religion','nationality','country_code','mobile','aux_mobile',
        'email','website','image',
        'p_state','p_district','p_municipality','p_ward_no','p_village_name','p_country',
        't_state','t_district','t_municipality','t_ward_no','t_village_name','t_country',
        'is_same_address',
        'fathers_name','fathers_phone_no','fathers_occupation','fathers_designation',
        'mothers_name','mothers_phone_no','mothers_occupation','mothers_designation',
        'acheivements','status',
    ];
    
}
