<?php

namespace App\Http\Livewire\Comentary;

use App\Models\Comentary;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ComentaryComponent extends Component
{
    public $allComentaries;
    public $name, $comentary;
    public function render()
    {
        $this->allComentaries = Comentary::where("active", '1')->get();
        return view('livewire.comentary.comentary-component');
    }
    public function store()
    {
        dd('s');
        $this->validate([
            'name' => 'required',
            'comentary' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $result = Comentary::create([
                'name' => $this->name,
                'comentary' => $this->comentary,

            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al ingresar la informacion ' . $e->getMessage()]);
            DB::rollback();
        }
        DB::commit();
        $this->cleanInputs();
    }
    public function cleanInputs()
    {
        $this->name = "";
        $this->comentary = '';
    }
}
