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
                  <th scope="col">Email</th>
                  <th class="text-end" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($data as $d)
                <tr>
                  <td>FR/BDA-PU/FPU/{{ $i + 1 }}</td>
                  <td>zaine@example.com</td>
                  <td class="text-end">
                    <div>
                      <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                  </td>
                </tr>
                @empty
                  <tr>
                    <td colspan="3" class="text-center">
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
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
                <span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
                   1
                </button>
            </ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
                <span class="fas fa-chevron-right"> </span>
            </button>
          </div>
      </div>
    </div>
</div>