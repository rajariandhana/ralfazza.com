@extends('template')
<link rel="stylesheet" href="{{ url('css/cv.css') }}">
@section('css')
@endsection
@section('js')
@endsection

@section('main')
    {{-- <div class="container">
        nanti ini link download cv
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                ITS
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Research Assistant</li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default variables. It's also worth noting that just about
                        any
                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                        limit
                        overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                        limit
                        overflow.
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($employers as $employer)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header">
                            {{ $employer->nama }}
                        </div>
                        <div class="accordion accordion-flush" id="{{ $employer->namaSlug }}">
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
