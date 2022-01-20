<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mRequest;
use Livewire\Component;

class PurchaseDetail extends Component
{
    public $slug;
    public $req;

    public function mount()
    {
        $req = mRequest::where('txtslug',$this->slug)->first();
        $this->req = $req;
        // dd($this->req);
    }
    public function render()
    {
        return view('livewire.purchase.purchase-detail');
    }
}
