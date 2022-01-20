<div>
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
          <div class="row">
            <div class="col-lg-8">
              <h4>Purchase Request</h4>
            </div>
          </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body p-4">
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="requestName">Requester Name</label>
                <div class="col-sm-9">
                  <input class="form-control" id="requestName" type="text" placeholder="Request Name" value="{{ Auth::user()->txtfullname }}" readonly/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="nopr">Nomor PR / WO</label>
                <div class="col-sm-9">
                  <input class="form-control" id="nopr" type="text" placeholder="Nomor PR / WO" wire:model="nomorpr" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="tanggaldibutuhkan">Tanggal di butuhkan</label>
                <div class="col-sm-9">
                  <input class="form-control" id="tanggaldibutuhkan" type="date" placeholder="Tanggal di butuhkan" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" wire:model="tanggalkebutuhan" />
                </div>
            </div>
            <div class="row mb-4">
                <div class="container ">
                  <div class="row p-3 bg-soft-primary">
                    <div class="col">Nama Barang</div>
                    <div class="col">Jumlah</div>
                    <div class="col">Satuan</div>
                    <div class="col">Keterangan</div>
                    <div class="col"></div>
                  </div>
                  <div class="row p-2">
                    <div class="col">
                      <input class="form-control form-control-sm" id="namabarang" type="text" placeholder="Nama Barang" wire:model="namabarang" />
                    </div>
                    <div class="col">
                      <input class="form-control form-control-sm" id="jumlah" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang" />
                    </div>
                    <div class="col">
                      <input class="form-control form-control-sm" id="satuan" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang" />
                      <datalist id="satuanList">
                          @foreach ($uom as $i)
                          <option value="{{ $i->txtcode }}"> </option>
                          @endforeach
                      </datalist>
                    </div>
                    <div class="col">
                      <textarea wire:ignore.self class="form-control form-control-sm" rows="1" id="keterangan" type="text" placeholder="Keterangan" wire:model="keteranganbarang" ></textarea>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-primary me-1 mb-1"  wire:click.prevent="add({{$i}})">Add</button>
                    </div>
                  </div>
                  @foreach ($inputs as $item)
                  <div class="row p-2">
                    <div class="col">
                      <input class="form-control form-control-sm" id="namabarang" type="text" placeholder="Nama Barang" wire:model="namabarang" />
                    </div>
                    <div class="col">
                      <input class="form-control form-control-sm" id="jumlah" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang" />
                    </div>
                    <div class="col">
                      <input class="form-control form-control-sm" id="satuan" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang" />
                      <datalist id="satuanList">
                          @foreach ($uom as $i)
                          <option value="{{ $i->txtcode }}"> </option>
                          @endforeach
                      </datalist>
                    </div>
                    <div class="col">
                      <textarea wire:ignore.self class="form-control form-control-sm" rows="1" id="keterangan" type="text" placeholder="Keterangan" wire:model="keteranganbarang" ></textarea>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-danger me-1 mb-1"  wire:click.prevent="remove({{$i}})">remove</button>
                    </div>
                  </div>
                  @endforeach
                </div>
                {{-- <div class="table-responsive scrollbar">
                    <table class="table table-striped overflow-hidden">
                      <thead class="bg-soft-primary">
                        <tr class="btn-reveal-trigger">
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Satuan</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="btn-reveal-trigger">
                            <td>
                              <input wire:ignore.self class="form-control form-control-sm" id="namabarang" type="text" placeholder="Nama Barang" wire:model="namabarang" />
                            </td>
                          <td>
                            <input wire:ignore.self class="form-control form-control-sm" id="jumlah" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang" />
                          </td>
                          <td>
                            <input wire:ignore.self class="form-control form-control-sm" id="satuan" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang" />
                            <datalist id="satuanList">
                                @foreach ($uom as $i)
                                <option value="{{ $i->txtcode }}"> </option>
                                @endforeach
                            </datalist>
                          </td>
                          <td>
                            <textarea wire:ignore.self class="form-control form-control-sm" rows="1" id="keterangan" type="text" placeholder="Keterangan" wire:model="keteranganbarang" ></textarea>
                          </td>
                          <td>
                              <button class="btn btn-sm btn-primary me-1 mb-1"  wire:click.prevent="add({{$i}})">Add</button>
                          </td>
                        </tr>
                        @foreach ($inputs as $item)
                        <tr class="btn-reveal-trigger">
                          <td>
                            <input wire:ignore.self class="form-control form-control-sm" id="namabarang" type="text" placeholder="Nama Barang" wire:model="namabarang" />
                          </td>
                        <td>
                          <input wire:ignore.self class="form-control form-control-sm" id="jumlah" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang" />
                        </td>
                        <td>
                          <input wire:ignore.self class="form-control form-control-sm" id="satuan" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang" />
                          <datalist id="satuanList">
                              @foreach ($uom as $i)
                              <option value="{{ $i->txtcode }}"> </option>
                              @endforeach
                          </datalist>
                        </td>
                        <td>
                          <textarea wire:ignore.self class="form-control form-control-sm" rows="1" id="keterangan" type="text" placeholder="Keterangan" wire:model="keteranganbarang" ></textarea>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1 mb-1"  wire:click.prevent="add({{$i}})">Add</button>
                        </td>
                      </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div> --}}
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="reason">Reason</label>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" id="Breakdown" type="radio" name="reason" value="Breakdown" wire:model="reason" />
                        <label class="form-check-label" for="Breakdown">Breakdown</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="jadwalproduksi" type="radio" name="reason" value="Jadwal Produksi" wire:model="reason" />
                        <label class="form-check-label" for="jadwalproduksi">Jadwal Produksi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="humanerror" type="radio" name="reason" value="Human Error (Miss Planning)" wire:model="reason" />
                        <label class="form-check-label" for="humanerror">Human Error (Miss Planning)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="sefety" type="radio" name="reason" value="Sefety K3" wire:model="reason" />
                        <label class="form-check-label" for="sefety">Sefety K3</label>
                    </div>        
                </div>
            </div>
            <div class="row">
              <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="file-upload">File Upload <span class="fs--2">(optional)</span></label>
                <div class="col-sm-9">
                  <div class="mb-3">
                    <input class="form-control" id="file-upload" type="file" name="files[]" wire:model="files" multiple="multiple"/>
                    @error('files.*') <span class="fs--2 text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
              </div>
              @if ($files)
                @foreach ($files as $key => $i)
                <div class="file-clickable">
                  <div class="file-preview m-0 d-flex flex-column">
                    <div class="d-flex media mb-3 pb-3 border-bottom btn-reveal-trigger">
                      @if ($i->getClientOriginalExtension() == 'png' || $i->getClientOriginalExtension() == 'jpeg' || $i->getClientOriginalExtension() == 'jpg' || $i->getClientOriginalExtension() == 'svg')
                      <img class="file-image" src="{{ $i->temporaryUrl() }}" alt="{{ $i->getClientOriginalName() }}"/>
                      @else
                      <img class="file-image" src="{{ asset('assets/img/icons/zip.png') }}" alt="{{ $i->getClientOriginalName() }}"/>
                      @endif
                      <div class="flex-1 d-flex flex-between-center">
                        <div>
                          <h6 data-dz-name="data-dz-name">{{ $i->getClientOriginalName() }}</h6>
                          <div class="d-flex align-items-center">
                            <p class="mb-0 fs--1 text-400 lh-1">{{ $i->getSize() }} kb</p>
                            <div class="dz-progress"><span class="dz-upload"></span></div>
                          </div>
                          <span class="fs--2 text-danger"></span>
                        </div>
                        <div class="dropdown font-sans-serif">
                          <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2">
                            <button class="dropdown-item" wire:click="clearFile({{ $key }})">Remove File</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif
            </div>
        </div>
        <div class="card-footer bg-light py-2">
            <div class="row justify-content-end">
              <div class="col-auto">
                  <button type="submit" class="btn btn-primary me-1 mb-1" wire:click="request">Request</button>
                </div>
            </div>
        </div>
    </div>
</div>