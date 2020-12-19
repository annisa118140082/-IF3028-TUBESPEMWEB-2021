@extends('Master.master')

@section('content')
            <h1>IF SIAGA LAPOR!</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP1NcsHf_auML9glkHz5cIuBjXgz4m_0Mw7Q&usqp=CAU.jpg" alt="Informatika" width="400px" height="150px">
        </header>
    </div>
    <div class="head">
        <h3>Detail Laporan/Komentar</h3>
    </div>
    <hr>
    <p><b>Pengirim : </b>{{$data->pengirim}}</p>
    <p><b>Judul Laporan : </b>{{$data->judul}}</p>
    <p><b>Laporan : </b>{{$data->laporan}}</p>
    <p><b>Aspek : </b>{{$data->aspek}}</p>
    <p><b>Lampiran : </b>{{$data->lampiran}}</p>
    <p><b>Laporan dibuat pada : </b>{{$data->created_at}}</p>
    

    <form action="{{ route('edit', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Edit Laporan/Komentar</button><br>
    </form>

    <form action="{{ route('delete', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Hapus Laporan/Komentar</button>
    </form>
    <hr>
</body>

@endsection