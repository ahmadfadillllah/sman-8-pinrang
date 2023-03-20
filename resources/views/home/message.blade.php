@extends('layouts.app')

@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Saran</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($saran as $s)
                                    <tr>
                                        <td>{{ $s->name }}</td>
                                        <td>
                                            {{ $s->email }}
                                        </td>
                                        <td><span
                                                class="badge rounded-pill badge-light-primary me-1">{{ $s->message }}</span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Masukan</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masukan as $m)
                                    <tr>
                                        <td>{{ $m->name }}</td>
                                        <td>
                                            {{ $m->email }}
                                        </td>
                                        <td><span
                                                class="badge rounded-pill badge-light-primary me-1">{{ $m->message }}</span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- users list ends -->
@endsection
