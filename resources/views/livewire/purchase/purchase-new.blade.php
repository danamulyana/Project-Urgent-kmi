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
                  @error('nomorpr')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="tanggaldibutuhkan">Tanggal di butuhkan</label>
                <div class="col-sm-9">
                  <input class="form-control" id="tanggaldibutuhkan" type="date" placeholder="Tanggal di butuhkan" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" wire:model="tanggalkebutuhan" />
                  @error('tanggalkebutuhan')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="row mb-4">
                <div class="table-responsive scrollbar">
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
                      <tbody >
                        <tr class="btn-reveal-trigger">
                          <td>
                            <input class="form-control form-control-sm" id="namabarang" type="text" placeholder="Nama Barang" wire:model="namabarang.0" />
                            @error('namabarang.0')<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                            <input class="form-control form-control-sm" id="jumlah" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang.0" />
                            @error('Jumlahbarang.0')<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                            <input class="form-control form-control-sm" id="satuan" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang.0" />
                            @error('satuanbarang.0')<span class="text-danger">{{ $message }}</span>@enderror
                            <datalist id="satuanList">
                                @foreach ($uom as $i)
                                <option value="{{ $i->txtcode }}"> </option>
                                @endforeach
                            </datalist>
                          </td>
                          <td>
                            <textarea class="form-control form-control-sm" rows="1" id="keterangan" type="text" placeholder="Keterangan" wire:model="keteranganbarang.0" ></textarea>
                            @error('keteranganbarang.0')<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                              <button class="btn btn-sm btn-primary me-1 mb-1"  wire:click.prevent="addinputs({{$inde}})">Add</button>
                          </td>
                        </tr>
                        @foreach ($inputs as $key => $item)
                        <tr class="btn-reveal-trigger">
                          <td>
                            <input class="form-control form-control-sm" type="text" placeholder="Nama Barang" wire:model="namabarang.{{ $item }}" />
                            @error('namabarang.'.$item)<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                            <input class="form-control form-control-sm" type="number" min="0" placeholder="Jumlah" wire:model="Jumlahbarang.{{ $item }}" />
                            @error('Jumlahbarang.'.$item)<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                            <input class="form-control form-control-sm" type="text" placeholder="Satuan" list="satuanList" wire:model="satuanbarang.{{ $item }}" />
                            @error('satuanbarang.'.$item)<span class="text-danger">{{ $message }}</span>@enderror
                            <datalist id="satuanList">
                                @foreach ($uom as $i)
                                <option value="{{ $i->txtcode }}"> </option>
                                @endforeach
                            </datalist>
                          </td>
                          <td>
                            <textarea class="form-control form-control-sm" rows="1" type="text" placeholder="Keterangan" wire:model="keteranganbarang.{{ $item }}" ></textarea>
                            @error('keteranganbarang.'.$item)<span class="text-danger">{{ $message }}</span>@enderror
                          </td>
                          <td>
                              <button class="btn btn-sm btn-danger me-1 mb-1"  wire:click.prevent="removeinputs({{$key}})">remove</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
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
                    @error('reason')<span class="text-danger">{{ $message }}</span>@enderror
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