<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $per_page = request()->per_page;
       $status = request()->status;
       $meberstatus = request()->memberstatus;
       $application_no = request()->application_no;
       $name = request()->name;
       $orderBy = request()->sort_by;

       $order_direction = '';

       if (request()->has('sort_desc')) {
       $order_direction = request()->sort_desc == 'true' ? 'desc' : 'asc';
       } else {
       $order_direction = 'desc';
       }

       if (!request()->has('sort_by')) {
       $orderBy = 'first_name_en';
       }

       $members = DB::table('members')
       ->where(['is_deleted' => false]);
       if (!empty($status)) {
       if ($status == 'true') {
       $status = 1;
       } else {
       $status = 0;
       }
       $members->where(['status' => $status]);
       }
       if (!empty($meberstatus)) {
       if ($meberstatus == 'true') {
       $meberstatus = 1;
       } else {
       $meberstatus = 0;
       }
       $members->where(['is_aproved' => $meberstatus]);
       }
       if (!empty($name)) {
       $members->where('first_name_en', 'like', '\\' . $name . '%');
       }
       if (!empty($application_no)) {
       $members->where('application_no', 'like', '\\' . $application_no . '%');
       }
       $members->orderBy($orderBy, $order_direction);
       return $members->paginate($per_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        try{
        DB::beginTransaction();
            $work_experiences = $request->work_experiences;
            $qualifications=$request->qualifications;
            $trainings = $request->trainings;
            $data_to_insert = [];
            $data_to_insert = $request->member_details;
            $data_to_insert['application_no'] = 52125;
            $data_to_insert['created_at']=Carbon::now();
            $member_request = Member::create($data_to_insert);

            foreach($work_experiences as $experience){
            //validation
            //Store
            $experience['member_id'] = $member_request->id;
            DB::table('members_work_experience')->insert($experience);
            }
            foreach($qualifications as $qualification){
            //validation
            //Store
            $qualification['member_id'] = $member_request->id;
            DB::table('members_qualifications')->insert($qualification);
            }
            foreach($trainings as $training){
            //validation
            //Store
            $training['member_id'] = $member_request->id;
            $training['is_training'] = true;
            DB::table('members_qualifications')->insert($training);
            }
           DB::commit();
           return ['message'=>'Membership application recevied.'];

           }catch(Exception $err){
           DB::rollBack();
           return $err;
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $check = Member::findOrFail($id);

       $member = Member::where('id',$id)
       ->get()->first();
       if($member){
       return $member;
       }
       return "Member not found";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    $member = Member::findOrFail($id);

    $member->status = false;
    $member->is_deleted = true;
    $member->save();
    if($member){
    return "Deleted Sucessfully";
    }
    return "Could not delete";

    }


    public function restore($id)
    {
    $member = Member::findOrFail($id);

    $member->status = true;
    $member->is_deleted = false;
    $member->save();
    if($member){
    return "Restored Sucessfully";
    }
    return "Could not restore";

    }

    public function updateStatus(Request $request)
    {
    $status = $request->status;
    $id = $request->id;

    if ($status == 'true') {
    $status = 1;
    } else {
    $status = 0;
    }
    $member_data_update['status'] = $status;
    $update_status = Member::where("id", $id)->update($member_data_update);

    if ($update_status) {
    return "Student Status Updated successfully";
    } else {
    return "Student Status Not Updated. Please try Again.";
    }
    }
    /**
    * Approve or reject the member request.
    *
    * @param \App\Models\Member $member
    * @return \Illuminate\Http\Response
    */
    public function manageMemberRequest(Request $request){
    $checkiD = Member::findOrFail($request->id);
    if($checkiD){
    $result = Member::where('id',$request->id)->update(['is_aproved'=>$request->status]);
    if($request->status){
    return "Accepted updated";
    }else{
    return "Rejected Sucessfully";
    }
    }
    }
    /**
    * Get the deleted members .
    *
    * @param \App\Models\Member $member
    * @return \Illuminate\Http\Response
    */
    public function trash()
    {
    $per_page = request()->per_page;
    $status = request()->status;
    $meberstatus = request()->memberstatus;
    $application_no = request()->application_no;
    $name = request()->name;
    $orderBy = request()->sort_by;

    $order_direction = '';

    if (request()->has('sort_desc')) {
    $order_direction = request()->sort_desc == 'true' ? 'desc' : 'asc';
    } else {
    $order_direction = 'desc';
    }

    if (!request()->has('sort_by')) {
    $orderBy = 'first_name_en';
    }

    $members = DB::table('members')
    ->where(['is_deleted' => true]);

    if (!empty($status)) {
    if ($status == 'true') {
    $status = 1;
    } else {
    $status = 0;
    }
    $members->where(['status' => $status]);
    }
    if (!empty($meberstatus)) {
    if ($meberstatus == 'true') {
    $meberstatus = 1;
    } else {
    $meberstatus = 0;
    }
    $members->where(['is_aproved' => $meberstatus]);
    }
    if (!empty($name)) {
    $members->where('first_name_en', 'like', '\\' . $name . '%');
    }
    if (!empty($application_no)) {
    $members->where('application_no', 'like', '\\' . $application_no . '%');
    }
    $members->orderBy($orderBy, $order_direction);
    return $members->paginate($per_page);
    }

    public function deletePermanently($id){
    $checkiD = Member::findOrFail($id);
    if($checkiD->delete()){
    return "Deleted Permanently";
    }
    return "Could not delete";
    }
}
