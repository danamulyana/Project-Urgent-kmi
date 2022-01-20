<?php

namespace App\Http\Livewire\Master;

use App\Models\mUom;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Uom extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $searchTerms;
    public $name, $code, $edit, $edit_id;

    public function resetInputFields()
    {
        $this->name = "";
        $this->code = "";
        $this->edit = "";
        $this->edit_id = "";
    }

    public function add()
    {
        $this->validate([
            'name' => 'required|string',
            'code' => 'required|string'
        ],[
            'name.required' => 'Nama Harus di isi.',
            'code.required' => 'Code Harus di isi.',
        ]);

        $data = new mUom();
        $data->txtcode = $this->code;
        $data->txtname = $this->name;
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
        $data = mUom::find($id);
        $this->edit_id = $data->intiduoms;
        $data = ['code' => $data->txtcode,'name' => $data->txtname];
        $this->edit = $data;
    }

    public function update()
    {
        $this->validate([
            'edit.name' => 'required|string',
            'edit.code' => 'required|string'
        ],[
            'edit.name.required' => 'Nama Harus di isi.',
            'edit.code.required' => 'Code Harus di isi.',
        ]);
        
        $data = mUom::find($this->edit_id);
        $data->txtcode = $this->edit['code'];
        $data->txtname = $this->edit['name'];
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
        $data = mUom::find($id);
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
        return view('livewire.master.uom',[
            'data' => mUom::query()->where('txtcode', 'like', '%'.$this->searchTerms.'%')
            ->orWhere('txtname','like', '%'.$this->searchTerms.'%')
            ->orderBy('dtmcreatedat', 'desc')->paginate(5),
        ]);
    }
}
