@extends('layouts.app')

@section('content')
@include('notif.index')
                @error('name')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
                @error('email')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
                @error('password')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                 @enderror
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Guru</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                              Tambah Guru
                            </button>
                            <!-- Modal -->
                            <div
                              class="modal fade text-start"
                              id="inlineForm"
                              tabindex="-1"
                              aria-labelledby="myModalLabel33"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambahkan Akun Guru</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="{{route('show-guru')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                      <label>Nama: </label>
                                      <div class="mb-1">
                                        <input type="text" name="name" placeholder="Masukkan Nama" class="form-control" />
                                      </div>

                                      <label>Email: </label>
                                      <div class="mb-1">
                                        <input type="text" name="email" placeholder="Masukkan Alamat Email" class="form-control" />
                                      </div>

                                      <label class="form-label" for="basicSelect">Status</label>
                                      <select class="form-select mb-1" id="basicSelect" name="role">
                                          <option disabled selected>Pilih Status</option>
                                          <option selected value="Guru">Guru</option>
                                          <option value="WaliKelas">Wali Kelas</option>
                                      </select>
                                      <label>Password: </label>
                                      <div class="mb-1">
                                        <input type="password" name="password" placeholder="Masukkan Password" class="form-control" />
                                      </div>

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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td><span
                                                class="badge rounded-pill badge-light-primary me-1">{{ $user->role }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit-guru', ['id'=>$user->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <form action="{{ route('delete', ['id'=>$user->id]) }}" method="POST">
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
