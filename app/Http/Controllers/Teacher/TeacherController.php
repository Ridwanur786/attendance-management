<?php

namespace App\Http\Controllers\Teacher;

use Exception;
use App\Models\HomeWork;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Rules\AttendanceValidationRules;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{


    public function attendanceForm($class)
{
    $students = Students::where('class', $class)->get();
    return view('Teacher.attendance.attendance-form', compact('students', 'class'));
}
    public function attendanceReport($class)
{
    $students = Students::where('class', $class)->get();
    return view('Teacher.attendance.attendance-report', compact('students', 'class'));
}


 
public function submitAttendance(Request $request, $class)
{
    $this->validate($request, [
        'attendance' => ['required', new AttendanceValidationRules($class)]
    ]);

    $attendance = $request->input('attendance');
   // dd($attendance);

   foreach ($attendance as $studentId => $value) {
    Students::where('id', $studentId)->update(['attendance' => json_encode([$class =>$value])]);

}


    return redirect()->route('teacher.class-attendance', $class)->with('success', 'Attendance submitted successfully');
}

// public function submitAttendance(Request $request, $class)
// {
    
//     $this->validate($request, [
//                 'attendance' => ['required', new AttendanceValidationRules($class)]
//             ]);

        
//     $attendanceData = $request->input('attendance');
  

//     // Validate if all students' attendance is marked
//     if (count($attendanceData) !== Students::where('class', $class)->count()) {
//         return back()->with('error', 'All students\' attendance is required.');
//     }

//     // Update attendance in the database
//     foreach ($attendanceData as $studentId => $attendance) {
//         $student = Students::find($studentId);
//         $student->attendance = $attendance;
//         $student->save();
//     }

//     return redirect()->route('teacher.class-attendance', $class)->with('success', 'Attendance submitted successfully.');
// }


 public function homeworkReport($class){

    $students = Students::with('homework')->where('class', $class)->get();
    //dd($students);
    return view('Teacher.home.homework', compact('students', 'class'));

 }


 public function approveHomework($class,$studentId){

    $student = Students::find($studentId);

    if (!$student) {
        return redirect()->back()->with('error', 'Student not found.');
    }

    // Debug to see the value of $student and $class
    //dd($student, $class);
      // Find the corresponding home_work record
    $homework = HomeWork::where('student_id', $student->id)->first();

    if ($homework) {
        if ($homework->status === "pending" || $homework->status === "N/A") {
            $homework->update(['status' => 'approved']);
            return redirect()->route('teacher.homework', $class)->with('success', 'Homework approval updated');
        } else {
            return redirect()->route('teacher.homework', $class)->with('error', 'Homework status is not pending.');
        }
    } else {
        return redirect()->route('teacher.homework', $class)->with('error', 'Homework not found for this student.');
    }
 }


    // public function attendanceForm(string $class)
    // {
    //     $attendance = [];

    //     $students = Students::where('class',$class)->where('attendance',$attendance)->get();
        
    //     return view('Teacher.attendance.attendance-form', compact('class','attendance','students'));
    // }

   
   
    
    
}

        

