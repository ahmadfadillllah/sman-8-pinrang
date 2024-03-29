@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Jadwal Ujian</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('edit-ujian', request()->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Tentukan Tanggal</label>
                                    <input name="tanggal" type="text" id="fp-default" class="form-control flatpickr-basic" value="{{ $jadwalUjian->tanggal }}" />
                                    @error('tanggal')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                     @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Hari</label>
                                        <select class="form-select" id="basicSelect" name="hari">
                                            <option value="{{ $jadwalUjian->kode_hari }}" >{{ $jadwalUjian->hari->nama_hari }}</option>
                                            @foreach ($hari as $data)
                                            <option value="{{$data->id}}">{{$data->nama_hari}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('hari')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam Mulai</label>
                                        <input name="jamStart" type="text" id="fp-time" class="form-control flatpickr-time text-start" value="{{ substr($jadwalUjian->jam,0,5) }}" />
                                    </div>
                                    @error('jamStart')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam Berakhir</label>
                                        <input name="jamEnd" type="text" id="fp-time" class="form-control flatpickr-time text-start" value="{{ substr($jadwalUjian->jam,8,5) }}" />
                                    </div>
                                    @error('jamEnd')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Mata Pelajaran</label>
                                        <select class="form-select" id="basicSelect" name="matapelajaran">
                                            <option value="{{ $jadwalUjian->pelajaran->id }}">{{ $jadwalUjian->pelajaran->mata_pelajaran }}</option>

                                            @foreach ($pelajaran as $matapelajaran)
                                                <option value="{{$matapelajaran->id}}">{{$matapelajaran->mata_pelajaran}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('matapelajaran')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Pilih Tipe Ujian</label>
                                    <select class="form-select" id="basicSelect" name="tipe_ujian">
                                        <option value="{{$jadwalUjian->tipe_ujian}}">{{$jadwalUjian->tipe_ujian}}</option>
                                        <option value="Ulangan Harian">Ulangan Harian</option>
                                        <option value="MID">MID</option>
                                        <option value="UAS">UAS</option>
                                    </select>
                                    @error('tipe_ujian')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12 text-center mt-1">
                                    <button type="submit" class="btn btn-primary me-1">Update</button>
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
