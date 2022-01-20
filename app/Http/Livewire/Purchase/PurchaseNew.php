<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mRequest;
use App\Models\mUom;
use App\Models\trRequestbarang;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class PurchaseNew extends Component
{
    use WithFileUploads;
 
    public $nomorpr, $reason, $tanggalkebutuhan;
    public $namabarang, $Jumlahbarang, $satuanbarang, $keteranganbarang;
    public $files = [];
    public $inputs = [];
    public $inde = 1;

    public function clearFile($index)
    {
        unset($this->files[$index]);
    }

    public function request()
    {
        $this->validate([
            'nomorpr' => 'required',
            'reason' => 'required',
            'tanggalkebutuhan' => 'required',
            'namabarang.0' => 'required',
            'Jumlahbarang.0' => 'required',
            'satuanbarang.0' => 'required',
            'keteranganbarang.0' => 'required',
            'namabarang.*' => 'required',
            'Jumlahbarang.*' => 'required',
            'satuanbarang.*' => 'required',
            'keteranganbarang.*' => 'required',
        ],[
            'nomorpr.required' => 'Nomor PR / WO Harus di isi',
            'reason.required' => 'Reason Harus di isi',
            'tanggalkebutuhan.required' => 'Tanggal Kebutuhan Harus di isi',
            'namabarang.0.required' => 'Nama Barang Harus di isi',
            'Jumlahbarang.0.required' => 'Jumlah Barang Harus di isi',
            'satuanbarang.0.required' => 'Satuan Barang Harus di isi',
            'keteranganbarang.0.required' => 'Keterangan Barang Harus di isi',
            'namabarang.*.required' => 'Nama Barang Harus di isi',
            'Jumlahbarang.*.required' => 'Jumlah Barang Harus di isi',
            'satuanbarang.*.required' => 'Satuan Barang Harus di isi',
            'keteranganbarang.*.required' => 'Keterangan Barang Harus di isi',
        ]);

        $number = mRequest::all()->count();
        $number++;
        $generate = str_pad($number, 4, "0", STR_PAD_LEFT).'/BDA-PU/FPU/' . Carbon::now()->format('m/Y');
        $slug = str_pad($number, 4, "0", STR_PAD_LEFT).'-BDA-PU-FPU-' . Carbon::now()->format('m-Y');

        $data = new mRequest();
        $data->txtslug = Str::slug($slug);
        $data->txtnorequest = $generate;
        $data->intiduser = Auth::user()->id;
        $data->txtmumberpr = $this->nomorpr;
        $data->txtreason = $this->reason;
        $data->dtmtanggalkebutuhan = $this->tanggalkebutuhan;
        $data->intalur = 1;
        $data->save();

        $barang = new trRequestbarang();
    }

    public function render()
    {
        return view('livewire.purchase.purchase-new',[
            'uom' => mUom::all(),
        ]);
    }

    public function addinputs($index)
    {
        $inde = $index + 1;
        $this->inde = $inde;
        array_push($this->inputs ,$inde);
    }
 
    public function removeinputs($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }
}
