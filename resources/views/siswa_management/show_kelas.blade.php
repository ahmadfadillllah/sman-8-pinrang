@extends('layouts.app')


@section('content')
@include('notif.index')
@error('kelas')
    <div class="text-danger mt-1">
        {{ $message }}
    </div>
@enderror
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Kelas</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Tambah Kelas
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Tambahkan Kelas</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('show-kelas') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Kelas: </label>
                                                <div class="mb-1">
                                                    <input type="text" name="kelas" placeholder="Masukkan Kelas"
                                                        class="form-control" />
                                                </div>
                                                <label>Guru</label>
                                                <select class="form-select mb-1" id="basicSelect" name="guru">
                                                    <option selected>Pilih Guru</option>
                                                    @foreach ($guru as $g)
                                                        <option value="{{ $g->nama_guru }}">{{ $g->nama_guru }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
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
                                @foreach ($kelas as $kls)
                                {{-- Modal Edit --}}
                                    <div class="modal fade text-start" id="inlineFormEdit{{ $kls->id }}" tabindex="-1" aria-labelledby="myModalLabel33"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Edit Kelas</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('updateKelas', $kls->id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <label>Kelas: </label>
                                                        <div class="mb-1">
                                                            <input type="text" name="kelas" value="{{ $kls->kelas }}"
                                                                class="form-control" />
                                                        </div>
                                                        <label>Guru</label>
                                                        <select class="form-select mb-1" id="basicSelect" name="guru">
                                                            <option selected value="{{ $kls->guru }}">{{ $kls->guru }}</option>
                                                            @foreach ($guru as $g)
                                                                <option value="{{ $g->nama_guru }}">{{ $g->nama_guru }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <td>{{ $no }}</td>

                                        <td>{{ $kls->kelas }}</td>

                                        <td>
                                            <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                            data-bs-target="#inlineFormEdit{{ $kls->id }}">
                                                <i data-feather="edit" class="me-50"></i>
                                                <span>Edit</span>
                                            </button>
                                            <form action="{{ route('delete-kelas', ['id' => $kls->id]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item" type="submit">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </form>
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
