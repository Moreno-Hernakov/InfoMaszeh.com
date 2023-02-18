@extends('layouts.app')
@section('content')
<div class="container py-5" >
    <h3 class="fw-bold text-dark mb-3">Selamat Datang <span class="text-warning">{{auth()->user()->name}}</span> </h3>
    <div class="card shadow p-4">
        <a href="/add" class="btn btn-warning mb-3 w-25 mb-4"><i class="fa fa-plus"></i> Tambah Berita</a>
    
        <table class="table table-striped text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <td width="5%">No.</td>
                    <td width="">Gambar</td>
                    <td width="">Judul</td>
                    <td width="">penulis</td>
                    <td>kategori</td>
                    <td width="25%">Aksi</td>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach ($datas as $index => $val)
                <tr>
                    {{-- $kamars->firstItem()+$i --}}
                    <td>{{$datas->firstItem()+$index}}.</td>
                    <td><img style="object-fit: cover" width="40px" height="40px" class="shadow rounded-circle" src="/storage/{{$val->img}}" alt=""></td>
                    <td>{{$val->title}}</td>
                    <td>{{$val->user->name}}</td>
                    <td>{{$val->category->nama}}</td>
                    <td>
                        <a href="/admin/detail/{{$val->id}}" class="btn btn-sm btn-success"><i class="fa fa-info"></i> Detail</a>
                        <a href="/update/{{$val->id}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> Edit</a>
                        <a onclick="return confirm('hapus berita?')" href="/delete/{{$val->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$datas->links()}}
        
    </div>
</div>
@endsection