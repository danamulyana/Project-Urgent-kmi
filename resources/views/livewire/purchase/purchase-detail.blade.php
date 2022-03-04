<div>
    <div class="card mb-3">
        <div class="card-body">
          <div class="row justify-content-between align-items-center">
            <div class="col-md">
              <h5 class="mb-2 mb-md-0">Request #{{ $req->txtnorequest }}</h5>
            </div>
            {{-- <div class="col-auto">
              <button class="btn btn-falcon-default btn-sm me-1 mb-2 mb-sm-0" type="button"><span class="fas fa-arrow-down me-1"> </span>Download (.pdf)</button>
              <button class="btn btn-falcon-default btn-sm me-1 mb-2 mb-sm-0" type="button"><span class="fas fa-print me-1"> </span>Print</button>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row align-items-center text-center mb-3">
            <div class="col-sm-2 text-sm-start">
                <img src="{{ asset('image/Logo KMI 8000x4000.png') }}" alt="invoice" width="120" />
            </div>
            <div class="col-sm-5 text-center mt-3">
                <div class="mb-3">
                    <h5>FORM</h5>
                </div>
                <div class="mb-3">
                    <h5>PEMBELIAN URGENT</h5>
                </div>
            </div>
            <div class="col mt-3 mt-sm-0 d-flex">
                <div class="m-2">
                    <p class="fs--1 text-start mb-0">No. Dok</p>
                    <p class="fs--1 text-start mb-0">No. Rev</p>
                    <p class="fs--1 text-start mb-0">Tanggal Berlaku</p>
                    <p class="fs--1 text-start mb-0">Halaman</p>
                </div>
                <div class="m-2">
                    <p class="fs--1 text-start mb-0">: FR/BDA-PU/FPU/008</p>
                    <p class="fs--1 text-start mb-0">: 04</p>
                    <p class="fs--1 text-start mb-0">: 01 Januari 2022</p>
                    <p class="fs--1 text-start mb-0">: 1 dari 1</p>
                </div>
            </div>
            <div class="col-12">
              <hr />
            </div>
          </div>
          <div class="row align-items-center">
              <div class="row">
                  <div class="col-6">
                      <div class="row">
                          <p class="col-sm-5 fs--1">Nomor PR / WO</p>
                          <div class="col-sm-7 fs--1">
                                {{ $req->txtmumberpr }}
                                <div class="mb-3 row"></div>
                          </div>
                          <p class="col-sm-5 fs--1">Tanggal dibuat</p>
                          <div class="col-sm-7 fs--1">
                                {{ $req->dtmcreatedat }}
                              <div class="mb-3 row"></div>
                          </div>
                          <p class="col-sm-5 fs--1">Tanggal dibutuhkan</p>
                          <div class="col-sm-7 fs--1">
                                {{ $req->dtmtanggalkebutuhan }}
                              <div class="mb-3 row"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="row">
                          <p class="col-sm-5 fs--1">Nama Requester</p>
                          <div class="col-sm-7 fs--1">
                            {{ $req->user->txtfullname }}
                            <div class="mb-3 row"></div>
                          </div>
                          <p class="col-sm-5 fs--1">Departement</p>
                          <div class="col-sm-7 fs--1">
                            {{ $req->user->departement->txtnamadepartement }}
                            <div class="mb-3 row"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="table-responsive scrollbar mt-4 fs--1">
            <table class="table table-striped border-bottom">
              <thead class="light">
                <tr class="bg-primary text-white dark__bg-1000">
                  <th class="border-0">No</th>
                  <th class="border-0 text-center">Nama Barang</th>
                  <th class="border-0 text-center">Jumlah</th>
                  <th class="border-0 text-center">Satuan</th>
                  <th class="border-0 text-center">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($req->barang as $key => $barang)
                  <tr>
                    <td class="align-middle">
                      <h6 class="mb-0 text-nowrap">{{ $key + 1 }}</h6>
                    </td>
                    <td class="align-middle text-center">
                      <h6 class="mb-0 text-nowrap">{{ $barang->txtnamabarang }}</h6>
                    </td>
                    <td class="align-middle text-center">
                      <h6 class="mb-0 text-nowrap">{{ $barang->txtjumlah }}</h6>
                    </td>
                    <td class="align-middle text-center">
                      <h6 class="mb-0 text-nowrap">{{ $barang->txtsatuan }}</h6>
                    </td>
                    <td class="align-middle text-center">
                      <h6 class="mb-0 text-nowrap">{{ $barang->txtketerangan }}</h6>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
          <div class="row justify-content-end">
            <div class="col-auto">
                <table class="table table-sm fs--1 border">
                    <thead>
                      <tr>
                        <th scope="col" class="border-end text-center">Dibuat Oleh</th>
                        <th scope="col" class="text-center"> Disetujui Oleh</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-end text-center">
                            <br>
                            <br>
                            <br>
                        </td>
                        <td class="text-center">
                            <br>
                            <br>
                            <br>
                        </td>
                      </tr>
                    </tbody>
                    <thead>
                        <tr>
                          <th scope="col" class="border-end text-center">Purchasing Staff</th>
                          <th scope="col" class="text-center"> Purchasing SPV</th>
                        </tr>
                    </thead>
                  </table>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light">
          <p class="fs--1 mb-0"><strong>Notes: </strong>Form ini digunakan untuk pembelian yang bersifat urgent purchase Requisition (PR) dan Purchase Order (PO) belum approved!</p>
        </div>
      </div>
</div>
