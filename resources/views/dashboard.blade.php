@extends('layout')

@section('page_title', 'Dashboard')

@section('content')

<div class="row mb-4">

    {{-- TOTAL SISWA --}}
    <div class="col-md-4">
        <div class="card shadow-lg p-3" style="border-left: 5px solid #4e73df;">
            <h5>Total Siswa</h5>
            <h2 class="text-primary">{{ $totalSiswa }}</h2>
        </div>
    </div>

    {{-- SELAMAT DATANG --}}
    <div class="col-md-4">
        <div class="card shadow-lg p-3" style="border-left: 5px solid #1cc88a;">
            <h5>Selamat Datang</h5>
            <h4 class="text-success">{{ auth()->user()->name }}</h4>
        </div>
    </div>

    {{-- ROLE --}}
    <div class="col-md-4">
        <div class="card shadow-lg p-3" style="border-left: 5px solid #f6c23e;">
            <h5>Role Anda</h5>
            <h4 class="text-warning">{{ auth()->user()->role }}</h4>
        </div>
    </div>

</div>

{{-- --------------------------------------------------}}
{{--  Fitur Baru: Statistik Gender --}}
{{-- --------------------------------------------------}}
<div class="card shadow-sm p-4 mt-4">
    <h4 class="mb-3">📊 Statistik Gender</h4>

    <div class="row text-center">

        <div class="col-md-6">
            <div class="p-3 rounded" style="background:#e3f2fd;">
                <h5>👦 Laki-laki</h5>
                <h3 class="text-primary">{{ $laki }}</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-3 rounded" style="background:#fde7f3;">
                <h5>👧 Perempuan</h5>
                <h3 class="text-danger">{{ $perempuan }}</h3>
            </div>
        </div>

    </div>
</div>

{{-- --------------------------------------------------}}
{{--  Fitur Baru: Jumlah Siswa per Kelas --}}
{{-- --------------------------------------------------}}
<div class="card shadow-sm p-4 mt-4">
    <h4 class="mb-3">🏫 Jumlah Siswa per Kelas</h4>

    <div class="row">

        @foreach($kelas as $k)
        <div class="col-md-4 mb-3">
            <div class="card p-3 shadow-sm text-center">
                <h5>📘 {{ $k->kelas }}</h5>
                <h3 class="text-info">{{ $k->total }}</h3>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
