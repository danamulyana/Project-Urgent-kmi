<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
class PurchaseList extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $searchTerms;

    public function render()
    {
        return view('livewire.purchase.purchase-list',[
            'data' => mRequest::query()->where('intiduser',Auth::user()->id)->where('txtnorequest', 'like', '%'.$this->searchTerms.'%')
            ->orWhere('txtreason','like', '%'.$this->searchTerms.'%')
            ->orderBy('dtmcreatedat', 'desc')->paginate(5),
        ]);
    }
}
