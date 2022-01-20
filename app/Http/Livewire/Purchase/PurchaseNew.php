<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mUom;
use Livewire\Component;
use Livewire\WithFileUploads;

class PurchaseNew extends Component
{
    use WithFileUploads;
 
    public $nomorpr, $reason, $tanggalkebutuhan;
    public $namabarang, $Jumlahbarang, $satuanbarang, $keteranganbarang;
    public $files = [];
    public $inputs = [];
    public $i = 1;

    public function clearFile($index)
    {
        unset($this->files[$index]);
    }

    public function add($i)
    {
        $i = (int)$i + 1;
        $this->i = $i;
        $this->inputs[] = $i;
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function request()
    {
        dd(
            [
                $this->nomorpr, 
                $this->reason,
                $this->tanggalkebutuhan,
                [
                    $this->namabarang, 
                    $this->Jumlahbarang, 
                    $this->satuanbarang, 
                    $this->keteranganbarang
                ],
            ]
        );
    }

    public function render()
    {
        return view('livewire.purchase.purchase-new',[
            'uom' => mUom::all(),
        ]);
    }
}
