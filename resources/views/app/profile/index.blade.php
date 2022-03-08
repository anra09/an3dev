@extends('app.layout.main')

@section('container')

<div class="container">

      <!-- User Information-->
      <div class="card bg-primary user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
            <div class="order-profile">
                <div class="thumb">
                    <input name="profile_photo_url" type="image" data-bs-toggle="modal" data-bs-target="#editphoto" img class="rounded-circle img-thumbnail" src="{{ Auth::user()->profile_photo_url }}" alt="img">
                </div>
                <div class="media-body">
                    <h5>{{ Auth::user()->name }}</h5>
                    <p>{{ Auth::user()->email }}</p>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <br>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"> {{ __('Keluar') }}</a>

                        </form>
                </div>
            </div>
        </div>
      </div>

      <!-- User Meta Data-->
      @if(count($penggunas))
      @foreach($penggunas as $pengguna)
      <div class="card user-data-card mb-4">
        <div class="card-body">
           <!--Form Data Diri-->
            <div class="form-group mb-3">
              <label class="form-label" for="fullname">Nama</label>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="form-control mb-1">{{ $pengguna->nama_pengguna }}</h5>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
              <label class="form-label" for="email">Alamat Email</label>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="form-control mb-1">{{ $pengguna->alamat_email }}</h5>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
              <label class="form-label" for="alamat">Alamat</label>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="form-control mb-1">{{ $pengguna->alamat_1 }}, {{ $pengguna->alamat_2 }}, {{ $pengguna->alamat_3 }}, {{ $pengguna->alamat_4 }}, {{ $pengguna->alamat_kodepos }}</h5>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
              <label class="form-label" for="no_telp">Nomor Telepon</label>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="form-control mb-1">{{ $pengguna->no_telp }}</h5>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
              <label class="form-label" for="nomor_identitas">Nomor Identitas</label>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="form-control mb-1">{{ $pengguna->nomor_identitas }}</h5>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="dropdown">
                <button type="button" class="btn btn-base w-100" data-bs-toggle="modal" data-bs-target="#updatedatadiri"><i data-feather='plus'> </i><span> Edit Data Diri </span></button>
            </div>
        </div>
        </div>
    </div>
        <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      @endforeach
      @else
        <div class="content-body">
            <div class="dropdown">
                <button type="button" class="btn btn-base w-100" data-bs-toggle="modal" data-bs-target="#datadiri"><i data-feather='plus'> </i><span> Lengkapi Data Diri </span></button>
            </div>
        </div>
      @endif
</div>
      <br>
    <br>


<!-- Form Data Diri-->

<!-- Form Pop Up Data Diri-->
<div class="modal fade" id="datadiri" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center">
          <h4 class="mb-1">Lengkapi Data Diri Anda</h4>
          <p>Isilah data dengan benar</p>
        </div>
        <form id="UserForm" class="row gy-1 pt-75" method="POST" action="/profile">
            @csrf
          <div class="col-12 col-md-12 mt-3">
              <label class="form-label" for="fullname">Nama Lengkap</label>
            <input
              type="text"
              id="fullname"
              name="nama_pengguna"
              class="form-control"
              value="{{ Auth::user()->name }}"
              required
              />
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label">Provinsi</label>
                <select name="province" id="province" class="form-control">
                    <option value="">== Pilih Provinsi ==</option>
                    @foreach ($provinces as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">City</label>
                <div class="col-md-6">
                    <select name="city" id="city" class="form-control">
                        <option value="">== Select City ==</option>
                    </select>
                </div>
            </div>
          <div class="col-12 col-md-12 mt-3">
              <label class="form-label" for="alamat_2">Kelurahan</label>
            <input
              type="text"
              id="alamat_2"
              name="alamat_2"
              class="form-control"
              required
              {{-- value="{{ old('alamat_2', $pengguna->alamat_2) }}" --}}
              />
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label" for="alamat_3">Kabupaten/Kota</label>
            <input
            type="text"
            id="alamat_3"
            name="alamat_3"
            class="form-control"
            required
              {{-- value="{{ old('alamat_3', $pengguna->alamat_3) }}" --}}
              />
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label" for="alamat_4">Provinsi</label>
                <input
                type="text"
                id="alamat_4"
                name="alamat_4"
                class="form-control"
                required
                {{-- value="{{ old('alamat_4', $pengguna->alamat_4) }}" --}}
                />
            </div>
          <div class="col-12 col-md-12 mt-3">
              <label class="form-label" for="alamat_kodepos">Kode Pos</label>
              <input
              type="number"
              id="alamat_kodepos"
              name="alamat_kodepos"
              class="form-control"
              required
              {{-- value="{{ old('alamat_kodepos', $pengguna->alamat_kodepos) }}" --}}
            />
        </div>
        <div class="col-12 col-md-12 mt-3">
            <label class="form-label" for="alamat_email">Alamat Email</label>
            <input
            type="email"
            id="alamat_email"
            name="alamat_email"
            class="form-control"
            required
            {{-- value="{{ Auth::user()->email }}" --}}
            />
          </div>
          <div class="col-12 col-md-6 mt-3">
              <label class="form-label" for="no_telp">Nomor Telepon</label>
              <input
              type="number"
              id="no_telp"
              name="no_telp"
              class="form-control"
              required
              {{-- value="{{ old('no_telp', $pengguna->no_telp) }}" --}}
              />
            </div>
          <div class="col-12 col-md-6 mt-3">
              <label class="form-label" for="nomor_identitas">Nomor Identitas</label>
              <input
              type="number"
              id="nomor_identitas"
              name="nomor_identitas"
              class="form-control"
              required
              {{-- value="{{ old('nomor_identitas', $pengguna->no_identitas) }}" --}}
              />
            </div>
            <input
            type="hidden"
            name="user_id"
              value="{{ Auth::user()->id }}"
              class="form-control"
            />
            <br>
            <div class="col-12 text-center mt-2 pt-50">
                <button type="submit" class="btn btn-base we-100">Simpan</button>
                <br>
                <br>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Keluar</button>
            </div>
        </form>
      </div>
    </div>
</div>
</div>

<!-- Form Pop Up edit Data Diri-->
<div class="modal fade" id="updatedatadiri" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center">
          <h4 class="mb-1">Lengkapi Data Diri Anda</h4>
          <p>Isilah data dengan benar</p>
        </div>
        @foreach ($penggunas as $pengguna)
        <form id="UserForm" class="row gy-1 pt-75" method="POST" action="/profile/{{ $pengguna->user_id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-12 col-md-12 mt-3">
            <label class="form-label" for="fullname">Nama Lengkap</label>
            <input
            type="text"
            id="fullname"
              name="nama_pengguna"
              class="form-control"
              value="{{ Auth::user()->name }}"
              required
            />
          </div>
          <div class="col-12 col-md-12 mt-3">
            <label class="form-label" for="alamat_1">Alamat Rumah</label>
            <input
            type="text"
            id="alamat_1"
            name="alamat_1"
            class="form-control"
            value="{{ old('alamat_1', $pengguna->alamat_1) }}"
            required
            />
        </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label">Provinsi</label>
                <select class="form-control" id="provinsi">
                    <option>Pilih Provinsi</option>
                    @foreach ($provinces as $provinsi )
                        <option>{{$provinsi->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label">Kabupaten / Kota</label>
                <select class="form-control" id="provinsi">
                    <option>Pilih Kabupaten / Kota</option>
                    @foreach ($regencies as $kabupatenkota )
                        <option>{{$kabupatenkota->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label">Kecamatan</label>
                <select class="form-control" id="provinsi">
                    <option>Pilih Kecamatan</option>
                    @foreach ($districts as $kecamatan )
                        <option>{{$kecamatan->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label">Desa / Kelurahan</label>
                <select class="form-control" id="provinsi">
                    <option>Pilih Desa / Kelurahan</option>
                    @foreach ($villages as $desakelurahan )
                        <option>{{$desakelurahan->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label for="name" class="col-md-4 col-form-label">City</label>
                <div class="col-md-6">
                    <select name="city" id="city" class="form-control">
                        <option value="">== Select City ==</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label" for="alamat_3">Kabupaten/Kota</label>
                <input
                type="text"
                id="alamat_3"
                name="alamat_3"
                class="form-control"
                value="{{ old('alamat_3', $pengguna->alamat_3) }}"
                required
                />
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label" for="alamat_4">Provinsi</label>
                <input
                type="text"
                id="alamat_4"
                name="alamat_4"
              class="form-control"
              value="{{ old('alamat_4', $pengguna->alamat_4) }}"
              required
              />
            </div>
            <div class="col-12 col-md-12 mt-3">
                <label class="form-label" for="alamat_kodepos">Kode Pos</label>
                <input
                type="number"
              id="alamat_kodepos"
              name="alamat_kodepos"
              class="form-control"
              value="{{ old('alamat_kodepos', $pengguna->alamat_kodepos) }}"
              required
              />
            </div>
          <div class="col-12 col-md-12 mt-3">
              <label class="form-label" for="alamat_email">Alamat Email</label>
              <input
              type="email"
              id="alamat_email"
              name="alamat_email"
              class="form-control"
              value="{{ Auth::user()->email }}"
              required
              />
            </div>
            <div class="col-12 col-md-6 mt-3">
                <label class="form-label" for="no_telp">Nomor Telepon</label>
                <input
                type="number"
                id="no_telp"
                name="no_telp"
                class="form-control"
                value="{{ old('no_telp', $pengguna->no_telp) }}"
                required
                />
            </div>
            <div class="col-12 col-md-6 mt-3">
                <label class="form-label" for="nomor_identitas">Nomor Identitas</label>
                <input
                type="number"
                id="nomor_identitas"
              name="nomor_identitas"
              class="form-control"
              value="{{ old('nomor_identitas', $pengguna->nomor_identitas) }}"
              required
              />
            </div>
            <div class="mb-3 mt-3">
              <label for="profile_photo_url" class="form-label">Pilih Poto Profil</label>
              <input class="form-control" type="image" id="profile_photo_url" name="profile_photo_url">
            </div>
            <input
            type="hidden"
            name="user_id"
            value="{{ Auth::user()->id }}"
              class="form-control"
              />
              <br>
              <div class="col-12 text-center mt-2 pt-50">
                  <button type="submit" class="btn btn-base we-100">Simpan</button>
                  <br>
                  <br>
                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Keluar</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
</div>

<script>
    $(function () {
        $('#province').on('change', function () {
        // Kode untuk ajax request disini
        });
    });
</script>
<script>
    $(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

        $('#province').on('change', function () {
            $.ajax({
                url: '{{ route('profile-kota.kota') }}',
                method: 'POST',
                data: {id: $(this).val()},
                success: function (response) {
                    $('#city').empty();

                    $.each(response, function (id, name) {
                        $('#city').append(new Option(name, id))
                    })
                }
            })
        });
    });
</script>

<script>
    $(function(){
        $('#provinsi').'change',function(){
            let id_provinsi = $('#provinsi').val();
        }
    })
</script>

@endsection
