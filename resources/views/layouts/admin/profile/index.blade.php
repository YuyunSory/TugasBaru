@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Profile</div>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h4 class="card-title">Add Data</h4>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="{{ route('profile.create') }}" class="btn" style="background-color: #0DCA37; color:white;"><i class="fa fa-fw fa-plus"></i> Add</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Birthday</th>
                                    <th>Phone</th>
                                    <th>Age</th>
                                    <th>City</th>
                                    <th>Program Studi</th>
                                    <th>University</th>
                                    <th>Action</th> <!-- Tambah kolom untuk aksi -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                <tr>
                                    <td><img src="{{ asset('images/'.$profile->image) }}" alt="Profile Image" style="width: 100px;"></td> <!-- Menampilkan gambar profil -->
                                    <td>{{ $profile->name }}</td> <!-- Menampilkan nama -->
                                    <td>{{ $profile->birthday }}</td> <!-- Menampilkan tanggal lahir -->
                                    <td>{{ $profile->phone }}</td> <!-- Menampilkan nomor telepon -->
                                    <td>{{ $profile->age }}</td> <!-- Menampilkan usia -->
                                    <td>{{ $profile->city }}</td> <!-- Menampilkan kota -->
                                    <td>{{ $profile->program_studi }}</td> <!-- Menampilkan program studi -->
                                    <td>{{ $profile->university }}</td> <!-- Menampilkan universitas -->
                                    <td>
                                        <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button> <!-- Tombol Hapus -->
                                        </form>
                                        <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary">Edit</a> <!-- Tombol Edit -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
