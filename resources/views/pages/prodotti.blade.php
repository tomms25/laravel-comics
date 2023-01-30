@extends('layouts.main-layout')

@section('content')
    <div class="container-fluid my_bg_primary"></div>
    <div class="container-fluid my_current_bg">
        <h1 class="text-primary my_current">CURRENT SERIES</h1>
        <div class="card-holder container d-flex justify-content-between gap-2">
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic1.webp')}}" alt="">
                <span class="comics_title">ACTION COMICS</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic2.webp')}}" alt="">
                <span class="comics_title">LA MOSSA DI BANE</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic3.jpg')}}" alt="">
                <span class="comics_title">SUPERMAN</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic4.jpg')}}" alt="">
                <span class="comics_title">HARLEY QUINN</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic5.jpg')}}" alt="">
                <span class="comics_title">BATGIRLS</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic6.jpg')}}" alt="">
                <span class="comics_title">FLASH&ZAGOR</span>
            </div>
        </div>
        <div id="second_row" class="ard-holder container d-flex justify-content-between gap-2">
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic1.webp')}}" alt="">
                <span class="comics_title">ACTION COMICS</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic2.webp')}}" alt="">
                <span class="comics_title">LA MOSSA DI BANE</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic3.jpg')}}" alt="">
                <span class="comics_title">SUPERMAN</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic4.jpg')}}" alt="">
                <span class="comics_title">HARLEY QUINN</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic5.jpg')}}" alt="">
                <span class="comics_title">BATGIRLS</span>
            </div>
            <div class="card col-2 single_card">
                <img src="{{Vite::asset('resources/img/dc-pic6.jpg')}}" alt="">
                <span class="comics_title">FLASH&ZAGOR</span>
            </div>

        </div>
    </div>
   

    
@endsection