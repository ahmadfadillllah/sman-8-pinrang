@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hasil Ujian Kelas {{ $kelas->kelas }}</h4>
                        @if (Auth::user()->role == 'Guru')
                        <a class="btn btn-primary" href="{{ route('detail-nilai-ujian', ['id'=> request()->id]) }}">
                            <i data-feather="edit-2" class="me-50"></i>
                            <span>Tambah Nilai</span>
                        </a>
                        @endif
                    </div>
                    {{-- <button type="button" class="btn btn-primary">
                        <a class="dropdown-item" href="{{ route('detail-nilai-ujian', ['id'=> request()->id]) }}">
                            <i data-feather="edit-2" class="me-50"></i>
                            <span>Tambah Nilai</span>
                        </a>
                        </button> --}}

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Semester</th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>Jenis Ujian</th>
                                    <th>Nilai</th>
                                    <th>Predikat</th>
                                    @if (Auth::user()->role != 'Siswa')
                                    <th>Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ ucfirst($data->pelajaran->mata_pelajaran) }}</td>
                                        <td>{{ $data->semester }}</td>
                                        <td>{{ $data->siswa->nama_siswa }}</td>
                                        <td>{{ $data->siswa->no_induk }}</td>
                                        <td>{{ $data->tipe_ujian }}</td>
                                        <td>{{ $data->nilai }}</td>
                                        <td>{{ $data->predikat }}</td>
                                        @if (Auth::user()->role != 'Siswa')
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit-detail-nilai-ujian', ['id'=>$data->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <form action="{{ route('delete-nilai-ujian', ['id'=>$data->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
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
