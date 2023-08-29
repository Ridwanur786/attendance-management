<?php

namespace App\Rules;

use Closure;
use App\Models\Students;
use Illuminate\Contracts\Validation\ValidationRule;

class AttendanceValidationRules implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //validation logic for attendance value ['present' or 'absent']

        $attendance = ['present', 'absent'];

        if(!is_array($value)){
            $fail("the :attribute Must be an array");
        }
            if (!in_array($value, $attendance)) {
                $fail('The :attribute contains only "present" or "absent" values');
            }
       
        $studentCount = count(Students::all());
        if($value !== $studentCount){
            $fail('The :attribute contains the attendance of all students');
        }

        if(empty($value)){
            $fail('the :attribute must not be empty field');
        }
        if(!$value){
            $fail('The :attribute must be required');
        }
        
    }
}
