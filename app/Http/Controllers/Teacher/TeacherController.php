<?php

namespace App\Http\Controllers\Teacher;

use Exception;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\AttendanceValidationRules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{

    protected $students;

    public function __construct(Students $students)
    {
        $this->students = $students;
    }
    public function attendanceForm(string $class)
    {

        $students = Students::where('class', $class)->where('role', 'student')->get();
        return view('Teacher.attendance.attendance-form', compact('class', 'students'));
    }

   
    
    public function submitAttendance(Request $request, $class)
    {
        $this->validate($request, [
            'attendance.*' => ['nullable', Rule::in(['present', 'absent'])],
        ]);
    
        $students = Students::where('class', $class)->get();
        $attendanceChanges = [];
    
        foreach ($students as $student) {
            $attendanceStatus = $request->input('attendance.' . $student->id);
    
            if ($attendanceStatus !== null && $student->class->contains($class)) {
                $attendanceChanges[$student->id] = $attendanceStatus;
            }
        }
    
        foreach ($attendanceChanges as $studentId => $attendanceStatus) {
            $student = Students::find($studentId);
           //$student->attendance = $student->attendance ?: [];
            $student->attendance[$class] = $attendanceStatus;
            $student->save();
        }
    
        return redirect()->route('teacher.class-attendance', $class)
            ->with('success', 'Attendance has been submitted successfully.');
    }
    
    
}

        

