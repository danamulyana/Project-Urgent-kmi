<div>
    <div class="col-xxl-8">
        <div class="card">
          <div class="card-header">
            <div class="row flex-between-center">
              <div class="col-auto">
                <h4 class="mb-0">UOM List</h4>
              </div>
            </div>
          </div>
          <div class="card-body h-100">
              <div class="my-3">
                  <button class="btn btn-sm btn-falcon-success me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                    <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg>
                    <span class="ms-1">New UOM</span>
                  </button>
              </div>
            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden">
                  <thead class="bg-200 text-900">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Code</th>
                      <th scope="col">Name</th>
                      <th class="text-end" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $key => $d)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $d->txtcode }}</td>
                      <td>{{ $d->txtname }}</td>
                      <td class="text-end">
                        <div>
                          <button wire:click="edit({{ $d->intiduoms }})" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                          <button wire:click="$emit('triggerDelete',{{ $d->intiduoms }})" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                        </div>
                      </td>
                    </tr>
                    @empty
                      <tr>
                        <td colspan="4" class="text-center">
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
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </div>
    
    {{-- Add Modal --}}
    <div wire:ignore.self class="modal fade" id="addModal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
          <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
              <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Add a new UOM </h4>
                  </div>
                  <div class="p-4 pb-0">
                    <form>
                      <div class="mb-3">
                        <label class="col-form-label" for="code">Code:</label>
                        <input class="form-control " id="code" type="text" wire:model="code" />
                        @error('code')<span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label" for="nama">Nama:</label>
                        <input class="form-control" id="nama" wire:model="name" />
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" wire:click="add" >Save </button>
              </div>
          </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div wire:ignore.self class="modal fade" id="EditModal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
      <div class="modal-dialog mt-6" role="document">
        <div class="modal-content border-0">
          <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0">
              <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                  <h4 class="mb-1" id="modalExampleDemoLabel">Edit UOM </h4>
                </div>
                <div class="p-4 pb-0">
                  <form>
                    <div class="mb-3">
                      <label class="col-form-label" for="code">Code:</label>
                      <input class="form-control " id="code" type="text" wire:model="edit.code" />
                      @error('code')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                      <label class="col-form-label" for="nama">Nama:</label>
                      <input class="form-control" id="nama" wire:model="edit.name" />
                      @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </form>
              </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-primary" type="button" wire:click="update" >Update </button>
            </div>
        </div>
      </div>
  </div>
</div>

@push('scripts')
    <script type="text/javascript" defer>
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', Id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Conatct record will be deleted!',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                //if user clicks on delete
                    if (result.value) {
                // calling destroy method to delete
                        @this.call('delete',Id)
                // success response
                        Swal.fire({title: 'Contact deleted successfully!', icon: 'success'});
                    } else {
                        Swal.fire({
                            title: 'Cancelled!',
                            icon: 'success'
                        });
                    }
                });
            });
        });
    </script>
@endpush