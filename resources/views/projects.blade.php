@extends('template')
<link rel="stylesheet" href="{{ url('css/projects.css') }}">
@section('css')
@endsection
@section('js')
@endsection

@section('main')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($projects as $project)
                <div class="card h-100 whiteBG">
                    @if ($project->jmlFoto > 0)
                    <div id="{{$project->id}}" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Asset/Projects/{{$project->nama}}/1.{{$project->fileEkstensi}}" class="d-block w-100 img-thumbnail projectFoto" alt="{{$project->nama}}_1.{{$project->fileEkstensi}}">
                            </div>
                            @for ($i=2; $i<=$project->jmlFoto; $i++)
                            <div class="carousel-item ">
                                <img src="Asset/Projects/{{$project->nama}}/{{$i}}.{{$project->fileEkstensi}}" class="d-block w-100 img-thumbnail projectFoto" alt="{{$project->nama}}_{{$i}}.{{$project->fileEkstensi}}">
                            </div>
                            @endfor
                            {{-- active --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{$project->id}}"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{$project->id}}"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title red">{{ $project->nama }}</h5>
                        <h6 class="card-subtitle mb02 text-body-secondary">{{ $project->techStack }}</h6>
                        <p class="card-text">{{ $project->deskripsi }}</p>
                        @if ($project->linkRepo != null && $project->linkRepo != '')
                            <a href="{{ $project->linkRepo }}" class="card-link red">Repo</a>
                        @endif
                        @if ($project->linkDemo != null && $project->linkDemo != '')
                            <a href="{{ $project->linkDemo }}" class="card-link red">Demo</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
