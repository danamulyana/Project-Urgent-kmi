<?php

namespace App\Http\Livewire\Purchase;

use App\Models\mRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PurchaseApprove extends Component
{
    use LivewireAlert;

    public function Approve($requestID)
    {
        $approved = mRequest::find($requestID);
        $approved->intalur = $approved->intalur + 1;

        if ($approved->intalur == 2) {
            $approved->txtStatus = 'approved by Dept Head';
        }
        if ($approved->intalur == 3) {
            $approved->txtStatus = 'in process by buyer';
        }

        if ($approved->intalur == 4) {
            $approved->txtStatus = 'approved by Pu SPV';
        }
        $approved->save();

        $this->alert('success', 'Request berhasil di Approve', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function notApprove($requestId)
    {
        $request = mRequest::find($requestId);
        if ($request->intalur == 1) {
            $request->txtStatus = 'rejected by Dept Head';
        }
        if ($request->intalur == 2) {
            $request->txtStatus = 'rejected by buyer';
        }
        if ($request->intalur == 3) {
            $request->txtStatus = 'rejected by Pu SPV';
        }
        $request->intalur = 5;
        $request->save();

        $this->alert('danger', 'Request Tidak di Approve', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function checkRoles()
    {
        $user = User::find(Auth::id());

        // dd($user);

        // dept Head
        if($user->Role->intidlevel == 3) {
            return 1;
        }
        // Buyer
        if($user->Role->intidlevel == 2) {
            return 2;
        }
        // SPV
        if($user->Role->intidlevel == 4) {
            return 3;
        }
        return abort(403,'anda tidak bisa mengakses ini');
    }

    public function checkRequest()
    {
        if ($this->checkRoles() === 1) {
            $request = mRequest::where('intalur',$this->checkRoles())->orderBy("dtmcreatedat", "desc")->get();
            $requestFilter = [];
            foreach ($request as $key => $value) {
                if ($value->user->departement->intiddepartement == Auth::user()->departement->intiddepartement) {
                    $requestFilter[] = $value;
                }
            }
            return $requestFilter;
        }
        $request = mRequest::where('intalur',$this->checkRoles())->orderBy("dtmcreatedat", "desc")->get();

        return $request;

    }

    public function render()
    {
        return view('livewire.purchase.purchase-approve',[
            'data' => $this->checkRequest(),
        ]);
    }
}
