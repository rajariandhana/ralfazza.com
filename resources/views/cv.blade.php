@extends('template')
<link rel="stylesheet" href="{{ url('css/cv.css') }}">
@section('css')
@endsection
@section('js')
@endsection

@section('main')
    <div class="container">
        <div class="row download-cv">
            <a href="/download-cv" download>
                Click to download my CV
            </a>
        </div>
        {{-- <div class="row">
            <div class="testClass">
                <img src="Asset/CV/Alpro_ITS.png" alt="">
                <h2>Alpro ITS</h2>
            </div>
        </div> --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($employers as $employer)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header">
                            <a class="employer-name-icon" href="{{$employer->link}}" target="_blank">
                                <img src="Asset/CV/{{ $employer->namaSlug }}.png" alt="">
                                <h2>{{ $employer->nama }}</h2>
                            </a>
                            <p>{{$employer->deskripsi}}</p>
                        </div>
                        <div class="card-body accordion accordion-flush" id="{{ $employer->namaSlug }}">
                            @foreach ($employer->positions as $position)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{ $employer->namaSlug }}_{{ $position->posisiSlug }}"
                                            aria-expanded="false"
                                            aria-controls="{{ $employer->namaSlug }}_{{ $position->posisiSlug }}">
                                            {{ $position->posisi }}
                                        </button>
                                    </h2>
                                    <div id="{{ $employer->namaSlug }}_{{ $position->posisiSlug }}"
                                        class="accordion-collapse collapse" {{-- data-bs-parent="#{{$employer->namaSlug}}" --}}>
                                        <div class="accordion-body">
                                            {{-- <div class="card-body"> --}}
                                            <h6 class="text-body-secondary">{{ $position->tgl }}</h6>
                                            <p class="text">{{ $position->deskripsi }}</p>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
