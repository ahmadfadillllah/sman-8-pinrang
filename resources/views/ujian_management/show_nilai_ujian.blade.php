@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Kelas</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kelas as $data)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>
                                            @if (Auth::user()->role == 'Siswa')
                                            <a  href="{{ route('show-nilai-ujian-siswa-detail', ['id'=> $data->id, 'name'=> Auth::user()->name]) }}">
                                                <i data-feather="eye" class="me-50"></i>
                                                <span>Lihat</span>
                                            </a>
                                            @else
                                            <a  href="{{ route('show-nilai-ujian-siswa', $data->id) }}">
                                                <i data-feather="eye" class="me-50"></i>
                                                <span>Lihat</span>
                                            </a>
                                            @endif
                                        </td>
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
    <!-- klss list ends -->
@endsection
