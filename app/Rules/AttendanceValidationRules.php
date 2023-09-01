<?php

namespace App\Rules;

use Closure;
use App\Models\Students;
use Illuminate\Contracts\Validation\ValidationRule;

class AttendanceValidationRules implements ValidationRule
{
protected $class;


public function __construct($class){
    $this->class= $class;
   
}
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
       
        $students = Students::where('class', $this->class)->get();
        $totalStudents = count($students);
        $jsonString = json_encode($value);
         $isValid = json_validate($jsonString);
        //$attendance = json_decode($jsonString);

        // // foreach ($attendance as $studentId => $value) {
        // //     echo "Student ID: $studentId, Value: $value<br>";
        // // }
        if($isValid){
             $attendance = json_decode($jsonString, true);
            // dd(count($attendance));

             if( count($attendance) !== $totalStudents){
                if(count($attendance) > 0){
                    $studentId = key($attendance);
                    $studentName = Students::find($studentId)->name;
                    $fail("Attendance for $studentName is required.");
                }else{
                    $fail(':attribute must have a value for each students');
                }
            
           
        }else{
             foreach ($attendance as $value) {
            if (empty($value)) {
                $fail('The value must be either "present" or "absent".');
                
            }
        }
        }
    }else{
            $fail(':attribute is not avalid json string');
        }
          
    }
}
