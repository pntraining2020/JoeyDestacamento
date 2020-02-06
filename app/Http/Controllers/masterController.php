<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class masterController extends Controller
{

    public function viewLanding(Request $request){
        return view('home');
    }

    public function saveData(Request $reques){
        $name = $request->input('name');
        $timeIn = $request->input('timeIn');
        $timeOut = $request->input('timeOut');
        $totalHoursWorked = $request->input('totalHoursWorked');
        $totalBreakUsed =  $request->input('totalBreakUsed');
        $data=array('name'=>$name,"timeIn"=> $timeIn,"timeOut"=> $timeOut,"totalHoursWorked"=>$totalHoursWorked,"totalBreakUsed"=>$totalBreakUsed);
        DB::table('employees')->insert($data);
        echo "Record inserted successfully.";
    
    }

    public function retrieveData(Request $reques){
        $employees = DB::select('select * from employees');
        return view('record',['employee'=>$employees]);
    }
}
