@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Nilai Ujian Siswa {{ $siswa->nama_siswa }}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route('edit-detail-nilai-ujian-post', ['id' => $nilai->id]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Nilai</label>
                                        <input value="{{ $nilai->nilai }}" type="number" id="first-name"
                                            class="form-control text-lowercase" name="nilai" />
                                    </div>
                                    @error('nilai')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12"></div>
                                <div class="col-md-6 col-12">
                                    <div class="form-floating mt-1">
                                      <textarea
                                        data-length="255"
                                        class="form-control char-textarea"
                                        id="textarea-counter"
                                        rows="3"
                                        placeholder="Counter"
                                        style="height: 100px"
                                        name="desk_pengetahuan"
                                      >{{ $nilai->desk_pengetahuan }}</textarea>
                                      <label for="textarea-counter">Deskripsi Pengetahuan</label>
                                    </div>
                                    <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 255 </small>
                                    @error('desk_pengetahuan')
                                        <div class="text-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-floating mb-1 mt-1">
                                      <textarea
                                        data-length="255"
                                        class="form-control char-textarea"
                                        id="textarea-counter"
                                        rows="3"
                                        placeholder="Counter"
                                        style="height: 100px"
                                        name="desk_keterampilan"
                                      >{{ $nilai->desk_keterampilan }}</textarea>
                                      <label for="textarea-counter">Deskripsi Keterampilan</label>
                                    </div>
                                    <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 255 </small>
                                    @error('desk_keterampilan')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 text-center mt-1">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
