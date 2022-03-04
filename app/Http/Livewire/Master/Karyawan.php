<?php

namespace App\Http\Livewire\Master;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Karyawan extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $searchTerms;

    public function render()
    {
        return view('livewire.master.karyawan',[
            'data' => User::query()->where('txtfullname', 'like', '%'.$this->searchTerms.'%')
                ->orWhere('txtusername','like', '%'.$this->searchTerms.'%')
                ->orderBy('dtmcreatedat', 'desc')->paginate(5),
        ]);
    }
    public function updatedSearchTerms()
    {
        $this->resetPage();
    }
}
