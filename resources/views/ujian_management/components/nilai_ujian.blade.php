@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Hasil Ujian Kelas {{ $kelas->kelas }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>Nilai</th>
                                    <th>Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ ucfirst($data->pelajaran->mata_pelajaran) }}</td>
                                        <td>{{ $data->siswa->nama_siswa }}</td>
                                        <td>{{ $data->siswa->no_induk }}</td>
                                        <td>{{ $data->nilai }}</td>
                                        <td>{{ $data->predikat }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- klss list ends -->
@endsection
