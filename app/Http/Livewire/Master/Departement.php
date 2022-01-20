<?php

namespace App\Http\Livewire\Master;

use App\Models\mDepartement;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Departement extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $searchTerms;
    public $name, $edit, $edit_id;


    public function resetInputFields()
    {
        $this->name = "";
        $this->edit = "";
        $this->edit_id = "";
    }

    public function add()
    {
        $this->validate([
            'name' => 'required|string',
        ],[
            'name.required' => 'Nama Harus di isi.',
        ]);

        $data = new mDepartement();
        $data->txtnamadepartement = $this->name;
        $data->save();
        $this->resetInputFields();
        $this->emit('hideModal',['id' => 'addModal']);
        $this->alert('success', 'Data berhasil di tambahkan', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function edit($id)
    {
        $data = mDepartement::find($id);
        $this->edit_id = $data->intiddepartement;
        $data = ['name' => $data->txtnamadepartement];
        $this->edit = $data;
    }

    public function update()
    {
        $this->validate([
            'edit.name' => 'required|string',
        ],[
            'edit.name.required' => 'Nama Harus di isi.',
        ]);
        
        $data = mDepartement::find($this->edit_id);
        $data->txtnamadepartement = $this->edit['name'];
        $data->save();
        $this->resetInputFields();
        $this->emit('hideModal',['id' => 'EditModal']);
        $this->alert('success', 'Data berhasil di Ubah', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function delete($id)
    {
        $data = mDepartement::find($id);
        $data->delete();
        $this->resetInputFields();
        $this->alert('success', 'Selamat Data berhasil di Hapus', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.master.departement',[
            'data' => mDepartement::query()->where('txtnamadepartement', 'like', '%'.$this->searchTerms.'%')
            ->orderBy('dtmcreatedat', 'desc')->paginate(5),
        ]);
    }
}
