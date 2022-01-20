<div class="col-xxl-8">
    <div class="card">
      <div class="card-header">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h4 class="mb-0">User List</h4>
          </div>
        </div>
      </div>
      <div class="card-body h-100">
          <div class="my-3">
              <button class="btn btn-sm btn-falcon-success me-1 mb-1" type="button">
                <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg>
                <span class="ms-1">New User</span>
              </button>
          </div>
        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
              <thead class="bg-200 text-900">
                <tr>
                  <th scope="col">Foto</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Email</th>
                  <th scope="col">Username</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Departement</th>
                  <th class="text-end" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>
                      <img src="{{ asset($item->profile_photo_url) }}" width="40" alt="{{ $item->username }}">
                    </td>
                    <td>{{ $item->txtnik }}</td>
                    <td>{{ $item->txtemail }}</td>
                    <td>{{ $item->txtusername }}</td>
                    <td>{{ $item->txtfullname }}</td>
                    <td>{{ $item->departement->txtnamadepartement}}</td>
                    <td class="text-end">
                      <div>
                        <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      </div>
      <div class="card-footer">
        {{ $data->links('pagination::bootstrap-4') }}
      </div>
    </div>
</div>