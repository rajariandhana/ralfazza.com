@extends('template')
<link rel="stylesheet" href="{{ url('css/home.css') }}">
@section('css')
@endsection
@section('js')
@endsection

@section('main')
    <div class="container text-center section1">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ url('Asset/ProfilePicture.jpg') }}" alt="ProfilePicture" class="profPic">
            </div>
            <div class="col-md-8 description">
                <div class="row title1 purple">
                    <h1>Hi, Ralfazza here</h1>
                </div>
                <div class="row text1">
                    <h3>
                        You'll find several of my best works such as my projects as a
                        <a class="red" href="/projects">developer</a>, my interest in
                        <a class="green" href="/gallery">photography</a>, clothes that I design and
                        <a class="blue" href="/merch">sell</a>, as well as other surprises.
                    </h3>
                </div>
                <div class="row text3">
                    <h3>
                        Feel free to hit me up in any of my social media
                    </h3>
                </div>
                <div class="row row-cols-auto socials">
                    <div class="col">
                        <a> <img src="Asset/icon_instagram.png" alt="icon_instagram"
                                onclick="window.open('https://instagram.com/rajariandhana','_blank')"> </a>
                    </div>
                    <div class="col">
                        <a> <img src="Asset/icon_gmail.png" alt="icon_gmail"
                                onclick="window.location.href='mailto:rajariandhana@gmail.com';"> </a>
                    </div>
                    <div class="col">
                        <a> <img src="Asset/icon_github.png" alt="icon_github"
                                onclick="window.open('https://github.com/rajariandhana','_blank')"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
