@extends('layouts.main')

@section('container')
    <div class="container">
        <h2>Form Pendaftaran</h2><br>
        <form class="row g-3" method="post" action="{{ url('/') }}">
            @csrf
            <div class="col-md-6">
                <label for="inputNamaDepan" class="form-label fw-semibold">Nama Depan</label>
                <input type="text" class="form-control" id="inputNamaDepan" value="Saiful">
            </div>

            <div class="col-md-6">
                <label for="inputNamaBelakang" class="form-label fw-semibold">Nama Belakang</label>
                <input type="text" class="form-control" id="inputNamaBelakang" value="Nur Budiman">
            </div>

            <div class="col-12">
                <label for="inputEmail" class="form-label fw-semibold">Alamat Email</label>
                <input type="email" class="form-control" id="inputEmail" value="saiful@unisba.sch.id">
            </div>

            <div class="col-6">
                <label for="inputNIM" class="form-label fw-semibold">NIDN</label>
                <input type="text" class="form-control" id="inputNIM" value="0710028805">
            </div>

            <div class="col-6">
                <label for="inputJurusan" class="form-label fw-semibold">Mata Kuliah</label>
                <input type="text" class="form-control" id="inputJurusan" value="Teknik Informatika">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-dark">Submit!</button>
            </div>

        </form>
    </div>
@endsection
