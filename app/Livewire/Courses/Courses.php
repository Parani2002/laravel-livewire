<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.courses.courses',compact('courses'));
    }
}
