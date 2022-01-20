<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mRequest;
use Livewire\Component;

class PurchaseList extends Component
{
    public function render()
    {
        return view('livewire.purchase.purchase-list',[
            'data' => mRequest::all(),
        ]);
    }
}
