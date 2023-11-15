<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CourseComponent extends Component
{
    use WithFileUploads;
    public $start_date, $end_date, $class_date, $name, $description, $course_image, $update, $course_id;
    protected $listeners = ['refreshCourses', 'deleteCourse', 'restoreCourse', 'editCourse' => 'edit'];
    public function render()
    {

        return view('livewire.course.course-component');
    }
    public function store()
    {

        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'class_date' => 'required',
            'course_image' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $result = Course::create([
                'team_id' => Auth::user()->currentTeam->id,
                'name' => $this->name,
                'description' => $this->description,
                'start_date' => $this->start_date . " 00:00:00",
                'end_date' => $this->end_date . " 00:00:00",
                'class_date' => $this->class_date . " 00:00:00",
                'course_image' => $this->course_image->getClientOriginalName(),

            ]);
            $this->course_image->storeAs('public/courses', $this->course_image->getClientOriginalName());
            $this->dispatchBrowserEvent('success', ['message' => 'Curso ' . $result->name . ' creado!']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        }
        DB::commit();
        $this->emitTo(CourseTable::class, 'pg:eventRefresh-default');
        $this->cleanInputs();
    }
    public function edit($id)
    {
        $this->update = true;
        $course = Course::find($id)->first();
        $this->course_id = $course->id;
        $this->start_date = substr($course->start_date, 0, 10);
        $this->end_date = substr($course->end_date, 0, 10);
        $this->class_date = substr($course->class_date, 0, 10);
        $this->name = $course->name;
        $this->description = $course->description;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'class_date' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $result = Course::find($this->course_id);
            if ($this->course_image != '') {
                Storage::delete('public/courses/' . $result->course_image);
                $this->course_image->storeAs('public/courses', $this->course_image->getClientOriginalName());
            }
            $result->update([
                'team_id' => Auth::user()->currentTeam->id,
                'name' => $this->name,
                'description' => $this->description,
                'start_date' => $this->start_date . " 00:00:00",
                'end_date' => $this->end_date . " 00:00:00",
                'class_date' => $this->class_date . " 00:00:00",
                'course_image' => ($this->course_image == '') ? $result->course_image : $this->course_image->getClientOriginalName(),
            ]);
            $this->dispatchBrowserEvent('success', ['message' => 'Curso ' . $this->name . ' actualizado!']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        }
        DB::commit();
        $this->emitTo(CourseTable::class, 'pg:eventRefresh-default');
        $this->cleanInputs();
    }
    public function cleanInputs()
    {
        $this->update = false;
        $this->start_date = '';
        $this->end_date = '';
        $this->class_date = '';
        $this->name = '';
        $this->description = '';
        $this->course_image = '';
    }
    public function deleteCourse($id)
    {
        Course::find($id)->first()->update([
            'active' => '0'
        ]);
        $this->emitTo(CourseTable::class, 'pg:eventRefresh-default');
    }
    public function restoreCourse($id)
    {
        Course::find($id)->first()->update([
            'active' => '1'
        ]);
        $this->emitTo(CourseTable::class, 'pg:eventRefresh-default');
    }
}
