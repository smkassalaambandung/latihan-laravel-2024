@php
    $siswa = \App\Models\Siswa::all();
    $siswa2 = \App\Models\Siswa::where('kelas', '!=', 'c')
            ->take(2)
            ->orderBy('id', 'desc')
            ->get();
    $siswa3 = \App\Models\Siswa::find(10);
    $siswa4 = \App\Models\Siswa::orderBy('id', 'asc')->first();
@endphp

<h1>Pengulangan Data</h1>
@foreach ($siswa as $item)
    <h2>ID : {{ $item->id }}</h2>
    <h2>Nama : {{ $item->nama }}</h2>
    <h2>Kelas : {{ $item->kelas }}</h2>
    <h2>Jenis Kelamin : {{ $item->jenis_kelamin }}</h2>
    <hr>
@endforeach
<hr>

<h1 style="color: red">Menampilkan Data query</h1>
@foreach ($siswa2 as $item)
    <h2>ID : {{ $item->id }}</h2>
    <h2>Nama : {{ $item->nama }}</h2>
    <h2>Kelas : {{ $item->kelas }}</h2>
    <h2>Jenis Kelamin : {{ $item->jenis_kelamin }}</h2>
    <hr>
@endforeach

<h1 style="color: green">Menampilkan Data Find</h1>
<h2>ID : {{ $siswa3->id ?? '-' }}</h2>
<h2>Nama : {{ $siswa3->nama ?? '-' }}</h2>
<h2>Kelas : {{ $siswa3->kelas ?? '-'}}</h2>
<h2>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? '-'}}</h2>
<hr>

<h1 style="color: yellow">Menampilkan Data First</h1>
<h2>ID : {{ $siswa4->id ?? '-' }}</h2>
<h2>Nama : {{ $siswa4->nama ?? '-' }}</h2>
<h2>Kelas : {{ $siswa4->kelas ?? '-'}}</h2>
<h2>Jenis Kelamin : {{ $siswa4->jenis_kelamin ?? '-'}}</h2>
<hr>
