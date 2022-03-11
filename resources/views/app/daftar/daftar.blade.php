@extends('app.layout.main')

@section('container')

<div class="cart-page-area">
    @foreach ($penyedia_layanans as $penyedia_layanan)
    <div class="cart-product-wrap">
        <div class="thumb">
            <img class="rounded-circle img-thumbnail" src="assets/img/logokecil.png" alt="img">
        </div>
        <div class="media-body">
            <h6>{{ $penyedia_layanan->kegiatan_usaha }}</h6>
            <p><span>{{ $penyedia_layanan->nama_penyedia }}</span><i class="ri-checkbox-blank-circle-fill"></i> {{ $penyedia_layanan->nama_kontak }} : {{ $penyedia_layanan->no_telp }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>
<div class="order-cart-area">
    <form class="order-cart" method="POST" action="/daftar">
        @csrf
        <ul>
            <li>
                <div class="single-input-wrap with-btn">
                    <select class="form-select" aria-label="Default select example" name="layanan_id" required >
                        <option selected>Pilih Layanan</option>
                        @foreach ($layanans as $layanan )
                        <option value="{{ $layanan->id }}">{{ $layanan->nama_singkat }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li>
                <div class="single-input-wrap with-btn">
                    <input type="date" id="tanggal_layanan" name="tanggal_layanan" class="form-control" placeholder="Pilih tangal" required/>
                </div>
            </li>
            <li>
                <div class="single-input-wrap with-btn">
                    <input type="text" id="keterangan_pendaftaran" name="keterangan_pendaftaran" class="form-control" placeholder="Keterangan">
                </div>
                <input
                type="hidden"
                name="penyedia_layanan_id"
                value="{{ $layanan_id }}"
                class="form-control"
                />
                <input
                type="hidden"
                name="nama_pengguna"
                value="{{ Auth::user()->name }}"
                class="form-control"
                />
                @foreach ($penggunas as $pengguna)
                <input
                type="hidden"
                name="pengguna_id"
                value="{{ Auth::user()->id }}"
                class="form-control"
                />
                <input
                type="hidden"
                name="nomor_identitas"
                value="{{ $pengguna->nomor_identitas }}"
                class="form-control"
                />
                <input
                type="hidden"
                name="no_telp"
                value="{{ $pengguna->no_telp }}"
                class="form-control"
                />
                <input
                type="hidden"
                name="keterangan_tambahan_status"
                value="Butuh Konfirmasi"
                class="form-control"
                />
                <input
                type="hidden"
                name="status_transaksi"
                value="Pendaftaran Diterima"
                class="form-control"
                />
                @endforeach
            </li>
            <li>
                <button type="submit" class="btn btn-white w-100">Simpan</button>
            </li>
        </ul>
    </form>
</div>

@endsection
