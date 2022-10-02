@extends('layouts.main')

@section('container')
    <div class="container">
        @if (session()->get('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div>
                    <i class="bi bi-patch-check-fill"></i> {{ session()->get('success') }}
                </div>
            </div>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row-3">Nama Depan</th>
                        <td>{{ $namaDepan }}</td>
                    </tr>
                    <tr>
                        <th scope="row-3">Nama Belakang</th>
                        <td>{{ $namaBelakang }}</td>
                    </tr>
                    <tr>
                        <th scope="row-3">Alamat Email</th>
                        <td>{{ $email }}</td>
                    </tr>
                    <tr>
                        <th scope="row-3">NIDN</th>
                        <td>{{ $nidn }}</td>
                    </tr>
                    <tr>
                        <th scope="row-3">Mata Kuliah</th>
                        <td>{{ $mataKuliah }}</td>
                    </tr>
                </tbody>
            </table>
        @endif

        <h2>Anggota Kelompok:</h2>
        <br>
        <div class="row align-items-start">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $image }}" class="card-img-top" alt="{{ $name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $name }}</h5>
                        <p class="card-text">Halo saya Verel dari Universitas Islam Balitar.</p>
                        <a href="https://instagram.com/mhd.verel" class="btn btn-danger" target="_blank"><span
                                class="bi bi-instagram"></span> Instagram</a>
                        <a href="https://twitter.com/pey3ng" class="btn btn-info" target="_blank"><span
                                class="bi bi-twitter">
                                Twitter</a>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="{{ $image2 }}" class="card-img-top" alt="{{ $name }}">
                    <div class="card-body">
                        <h5 class="card-title">Adhi Jadmiko</h5>
                        <p class="card-text">Halo saya Adhi Jadmiko, Saya dari Prodi Teknik Informatika</p>
                        <a href="https://instagram.com/mhd.verel" class="btn btn-danger" target="_blank"><span
                                class="bi bi-instagram"></span> Instagram</a>
                        <a href="https://twitter.com/pey3ng" class="btn btn-info" target="_blank"><span
                                class="bi bi-twitter">
                                Twitter</a>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="{{ $image3 }}" class="card-img-top" alt="{{ $name }}">
                    <div class="card-body">
                        <h5 class="card-title">Mohandes Santiko</h5>
                        <p class="card-text">Halo saya Mohandes Santiko, saya anggota kelompok ini.</p>
                        <a href="https://instagram.com/mhd.verel" class="btn btn-danger" target="_blank"><span
                                class="bi bi-instagram"></span> Instagram</a>
                        <a href="https://twitter.com/pey3ng" class="btn btn-info" target="_blank"><span
                                class="bi bi-twitter">
                                Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
