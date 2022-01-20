<div class="col-xxl-8">
    <div class="card">
      <div class="card-header">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h4 class="mb-0">Purchese Request List</h4>
          </div>
        </div>
      </div>
      <div class="card-body h-100">
          <div class="my-3">
              <a href="{{ route('purchase.new') }}" class="btn btn-sm btn-falcon-success me-1 mb-1" type="button">
                <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>
                <span class="ms-1">New Purshase Request</span>
              </a>
          </div>
        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
              <thead class="bg-200 text-900">
                <tr>
                  <th scope="col">No Dok</th>
                  <th scope="col">No PR/WO</th>
                  <th scope="col">Reason</th>
                  <th scope="col">Status</th>
                  <th scope="col">Last update</th>
                  <th class="text-end" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($data as $key => $d)
                <tr>
                  <td><a href="{{ route('purchase.detail',[$d->txtslug]) }}" class="text-600">{{ $d->txtnorequest }}</a></td>
                  <td class="text-600">{{ $d->txtmumberpr }}</td>
                  <td class="text-600">{{ $d->txtreason }}</td>
                  <td class="text-600"><span class="badge rounded-pill {{ $d->txtstatus == 'pending' ? 'badge-soft-warning' : ($d->txtstatus == 'solved' ? 'badge-soft-success' : 'badge-soft-danger') }}">{{ $d->txtstatus }}</span></td>
                  <td class="text-600">{{ $d->dtmupdatedat->diffforhumans() }}</td>
                  <td class="text-600 text-end">
                    <div>
                      <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><span class="text-500 fas fa-trash-alt"></span></button>
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
      <div class="card-footer">
        {{ $data->links('livewire::bootstrap') }}
      </div>
    </div>
</div>