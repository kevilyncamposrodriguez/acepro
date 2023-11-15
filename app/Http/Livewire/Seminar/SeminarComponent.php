<?php

namespace App\Http\Livewire\Seminar;


use App\Http\Livewire\Seminar\SeminarsTable;
use App\Models\Seminar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class SeminarComponent extends Component
{
    use WithFileUploads;
    public $start_date, $end_date, $class_date, $name, $description, $seminar_image, $update, $seminar_id;
    protected $listeners = ['refreshSeminars', 'deleteSeminar', 'restoreSeminar', 'editSeminar' => 'edit'];
    public function render()
    {

        return view('livewire.seminar.seminar-component');
    }
    public function store()
    {

        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'class_date' => 'required',
            'seminar_image' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $result = Seminar::create([
                'team_id' => Auth::user()->currentTeam->id,
                'name' => $this->name,
                'description' => $this->description,
                'start_date' => $this->start_date . " 00:00:00",
                'end_date' => $this->end_date . " 00:00:00",
                'class_date' => $this->class_date . " 00:00:00",
                'seminar_image' => $this->seminar_image->getClientOriginalName(),

            ]);
            $this->seminar_image->storeAs('public/seminars', $this->seminar_image->getClientOriginalName());
            $this->dispatchBrowserEvent('success', ['message' => 'Seminario ' . $result->name . ' creado!']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        }
        DB::commit();
        $this->emitTo(SeminarsTable::class, 'pg:eventRefresh-default');
        $this->cleanInputs();
    }
    public function edit($id)
    {
        $this->update = true;
        $seminar = Seminar::find($id)->first();
        $this->seminar_id = $seminar->id;
        $this->start_date = substr($seminar->start_date, 0, 10);
        $this->end_date = substr($seminar->end_date, 0, 10);
        $this->class_date = substr($seminar->class_date, 0, 10);
        $this->name = $seminar->name;
        $this->description = $seminar->description;
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
            $result = Seminar::find($this->seminar_id);
            if ($this->seminar_image != '') {
                Storage::delete('public/seminars/' . $result->seminar_image);
                $this->seminar_image->storeAs('public/seminars', $this->seminar_image->getClientOriginalName());
            }
            $result->update([
                'team_id' => Auth::user()->currentTeam->id,
                'name' => $this->name,
                'description' => $this->description,
                'start_date' => $this->start_date . " 00:00:00",
                'end_date' => $this->end_date . " 00:00:00",
                'class_date' => $this->class_date . " 00:00:00",
                'seminar_image' => ($this->seminar_image == '') ? $result->seminar_image : $this->seminar_image->getClientOriginalName(),
            ]);

            $this->dispatchBrowserEvent('success', ['message' => 'Seminario ' . $this->name . ' actualizado!']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        }
        DB::commit();
        $this->emitTo(SeminarsTable::class, 'pg:eventRefresh-default');
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
        $this->seminar_image = '';
    }
    public function deleteSeminar($id)
    {
        Seminar::find($id)->first()->update([
            'active' => '0'
        ]);
        $this->emitTo(SeminarsTable::class, 'pg:eventRefresh-default');
    }
    public function restoreSeminar($id)
    {
        Seminar::find($id)->first()->update([
            'active' => '1'
        ]);
        $this->emitTo(SeminarsTable::class, 'pg:eventRefresh-default');
    }
}
