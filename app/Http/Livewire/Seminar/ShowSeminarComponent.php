<?php

namespace App\Http\Livewire\Seminar;

use App\Models\Seminar;
use Livewire\Component;

class ShowSeminarComponent extends Component
{
    public $allSeminars;
    public function render()
    {
        $this->allSeminars = Seminar::where("team_id",1)->where("active",'1')->get();
        return view('livewire.seminar.show-seminar-component');
    }
}
