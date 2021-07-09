<?php
namespace App\services;

use App\Models\Country;
use App\Models\Member;
use App\Models\MembershipType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberService{
    public function getApplicationNumber($country_code_id,$membership_type_id){

    $latest_no = Member::latest()->first();
    $latest_id = $latest_no->id ?? '00';
    $latest_id++;
    $country= Country::where('id',$country_code_id)->get()->first();
    $membership_type = MembershipType::where('id',$membership_type_id)->get()->first();

    $application_no = $country->code.''.substr($country->name, 0, 3).''.$latest_id.''.$membership_type->code;
    return $application_no;
    }
    public function addExperiences($deleted,$datas,$member_id){
        if ($deleted) DB::table('members_work_experience')->whereIn('id', $deleted)->delete(); 
        foreach($datas as $data){
            $data['member_id']= $member_id;
           $_id = $data['id'];
           DB::table('members_work_experience')->updateOrInsert(['id'=> $_id],[
           'organization_name'=>$data['organization_name'],
           'designation'=>$data['designation'],
           'years'=>$data['years'],
           'remarks'=>$data['remarks'],
           'member_id'=>$member_id
           ]);
        }
    }
    public function addQualifications($deleted,$datas,$member_id){
       
        if ($deleted) DB::table('members_qualifications')->whereIn('id', $deleted)->delete(); 
        foreach($datas as $data){
            $data['member_id']= $member_id;
            DB::table('members_qualifications')->updateOrInsert(['id'=>$data['id']],$data);
        }
    }
public function uploadProfile($img){
        $explode = explode(',',$img);
        if(count($explode)==1){
        return $img;
        }
        $decode = base64_decode($explode[1]);

        if(str_contains($explode[0],'jpeg')){
        $extension = 'jpeg';
        } elseif(str_contains($explode[0],'png')){
        $extension = 'png';
        }else{
        return ['status'=>false,'message'=>'Please select only jpeg or png image'];
        }
        $file_name = time().rand(0, 99999).'.'.$extension;

        $path = public_path().'/images/'.$file_name;
        file_put_contents($path,$decode);
        return $file_name;
}
public function UploadPaymentSlip($img){
        $explode = explode(',',$img);
        if(count($explode)==1){
        return $img;
        }
        $decode = base64_decode($explode[1]);
        if(str_contains($explode[0],'jpeg')){
        $extension = 'jpeg';
        } elseif(str_contains($explode[0],'png')){
        $extension = 'png';
        }else{
        return ['status'=>false,'message'=>'Please select only jpeg or png image'];
        }
        $file_name = time().rand(0, 99999).'.'.$extension;

        $path = public_path().'/images/'.$file_name;
        file_put_contents($path,$decode);

        return $file_name;
}

}