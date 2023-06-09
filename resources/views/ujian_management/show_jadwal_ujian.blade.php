@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Jadwal Ujian</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Mata Ujian</th>
                                    <th>Jenis Ujian</th>
                                    @if (Auth::user()->role == 'Admin')

                                    <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no  = 1;
                                @endphp
                                @foreach ($jadwalUjian as $data)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->hari->nama_hari }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->jam }}</td>
                                        <td>{{ $data->pelajaran->mata_pelajaran }}</td>
                                        <td>{{ $data->tipe_ujian }}</td>

                                    @if (Auth::user()->role == 'Admin')
                                        <td>
                                                    <form action="{{ route('delete-ujian', ['id'=>$data->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                        </td>
                                        @endif
                                    </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- datas list ends -->
@endsection
