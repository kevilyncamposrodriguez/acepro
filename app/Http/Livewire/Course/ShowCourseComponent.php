<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowCourseComponent extends Component
{
    public $allCourses;
    public function render()
    {
        $this->allCourses = Course::where("team_id",1)->where("active",'1')->get();
        return view('livewire.course.show-course-component');
    }
}
