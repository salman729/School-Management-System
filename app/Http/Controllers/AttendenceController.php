<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
use App\TimeTable;
use App\Attendence;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $admissions = Admission::all();
        // $timeTables = TimeTable::all();
         $timeTables = TimeTable::with('periods.times','periods.days','periods.classRooms','subjects','batches.classes','batches.sections','batches.years')->get();
         // dd($timeTables);
         return view('pages.attendence.attendence',compact('admissions','timeTables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



  
    public function   markattendence(Request $request)
    {
$check=Attendence::where('attendenceDate',$request->attenDenceDate)->where('peroid_id',$request->peroid_Id)->get();
$count=count($check);
if ($count>1) {
  return json_encode(['status'=>'yes']);
}else{

foreach ($request->mydata as  $key => $value) {
        $insert=Attendence::create([
            'admission_id'=>$value['addmission_id'],
            'timeTable_id'=>$value['timeTable_id'],
            'is_active'=>$value['attendence'],
            'attendenceDate'=>$value['attendenceDate'],
            'lec_type'=>$value['lec_type'],
            'peroid_id'=>$value['peroid_id']
             
         ]); 
    }
return json_encode(['status'=>'no']);
}      
      
    }
}
