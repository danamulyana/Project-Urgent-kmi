<div class="col-xxl-8">
    <div class="card">
      <div class="card-header">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h4 class="mb-0">Request Approve List</h4>
          </div>
        </div>
      </div>
      <div class="card-body h-100">
        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
              <thead class="bg-200 text-900">
                <tr>
                  <th scope="col" >No Dok</th>
                  <th scope="col" class="text-center">No PR/WO</th>
                  <th scope="col" class="text-center">Reason</th>
                  <th scope="col" class="text-center">Status</th>
                  <th scope="col" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($data as $key => $d)
                <tr>
                  <td class="w-100"><a href="{{ route('purchase.detail',[$d->txtslug]) }}" class="text-600">{{ $d->txtnorequest }}</a></td>
                  <td class="text-600 w-100">{{ $d->txtmumberpr }}</td>
                  <td class="text-600"><p>{{ $d->txtreason }}</p></td>
                  <td class="text-600 w-100"><span class="badge rounded-pill {{ $d->txtstatus == 'pending' ? 'badge-soft-warning' : ($d->txtstatus == 'solved' ? 'badge-soft-success' : 'badge-soft-danger') }}">{{ $d->txtstatus }}</span></td>
                  <td class="text-600 ">
                    <div class="d-flex">
                        <div class="m-1">
                            <button class="btn btn-sm me-1 mb-1 btn-outline-danger  ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">Reject</button>
                        </div>
                        <div class="m-1">
                            <button wire:click="Approve({{ $d->intidrequest }})" class="btn btn-sm me-1 mb-1 btn-outline-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">Approve</button>
                        </div>
                    </div>
                  </td>
                </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/icons/spot-illustrations/21.png') }}" alt="No Data Found" width="200">
                        <span class="d-block">Data Not Found!</span>
                      </div>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>