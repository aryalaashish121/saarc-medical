<?php
namespace App\services;

use Illuminate\Support\Facades\DB;

class MemberService{
    public function addExperiences($deleted,$datas,$member_id){
        if ($deleted) DB::table('members_work_experience')->whereIn('id', $deleted)->delete(); 
        foreach($datas as $data){
            $data['member_id']= $member_id;
            DB::table('members_work_experience')->updateOrInsert($data);
        }
    }
    public function addQualifications($deleted,$datas,$member_id){
       
        if ($deleted) DB::table('members_qualifications')->whereIn('id', $deleted)->delete(); 
        foreach($datas as $data){
            $data['member_id']= $member_id;
            DB::table('members_qualifications')->updateOrInsert($data);
        }
    }
}