@extends('layouts.app')

@section('title', 'Train Map')

@section('content')
<div class="container">
<div class="row justify-content-center">  
    <div class="col-md-8">
        <div class="card mt-4">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">TrainMap</li>
    </ol>
</nav>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
    @endif

    @php
    $maps_cards = array(
        /**
         * https://codepen.io/aniketkudale/pen/BaNxomQ
         * Dutch palette
         */
        array('img' => './images/map/hlv.svg',        'name' => 'Stoomlocomotief',  'link' => "https://track.scm-team.be/Resources/ScriptPlugins/com.GpsGate/Publish/v3/single_gmap.html?appId=6&viewId=7&userName=hlv&mapKey=AIzaSyAQLRtDypeBHfYsRSwbQnoTUY0euHEy7aQ&units=metric&v=5.0.0.4781"),
        array('img' => './images/map/mw.svg',         'name' => 'Motorwagen',       'link' => "https://track.scm-team.be/Resources/ScriptPlugins/com.GpsGate/Publish/v3/single_gmap.html?appId=6&viewId=7&userName=ttmw&mapKey=AIzaSyAQLRtDypeBHfYsRSwbQnoTUY0euHEy7aQ&units=metric&v=5.0.0.4781"),
        array('img' => './images/map/hlr.svg',        'name' => 'Rangeerloc',       'link' => "https://track.scm-team.be/Resources/ScriptPlugins/com.GpsGate/Publish/v3/single_gmap.html?appId=6&viewId=7&userName=hlr&mapKey=AIzaSyAQLRtDypeBHfYsRSwbQnoTUY0euHEy7aQ&units=metric&v=5.0.0.4781"),
        array('img' => './images/map/sms.svg',        'name' => 'Smalspoor',        'link' => "https://track.scm-team.be/Resources/ScriptPlugins/com.GpsGate/Publish/v3/single_gmap.html?appId=6&viewId=7&userName=sms&mapKey=AIzaSyAQLRtDypeBHfYsRSwbQnoTUY0euHEy7aQ&units=metric&v=5.0.0.4781"),
        array('img' => './images/map/plus.svg',       'name' => 'Extra Locomotief', 'link' => "https://track.scm-team.be/Resources/ScriptPlugins/com.GpsGate/Publish/v3/single_gmap.html?appId=6&viewId=7&userName=plus&mapKey=AIzaSyAQLRtDypeBHfYsRSwbQnoTUY0euHEy7aQ&units=metric&v=5.0.0.4781"),
        
    );
    @endphp
<div class="card-body">
    <div class="container">
        <div class="row text-center">
                <!-- Only logged in users -->
                @auth
                <div class="my-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
                    <a class="card my-card text-decoration-none" href="https://track.scm-team.be" target="_blank">
                        <img class="card-img-top" src="./images/map/tracking.svg">
                        <div class="py-3 card-footer text-uppercase"><strong>Tracking Console</strong></div>
                    </a>
                </div>
                @endauth
                <!-- loop through the array above to create the cards -->
                @foreach ($maps_cards as $card)
                    <div class="my-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
                        <a class="card my-card text-decoration-none" href="{{ $card['link'] }}" target="_blank" rel="noopener noreferrer">
                            <img class="card-img-top" src="{{ asset($card['img']) }}">
                            <div class="py-3 card-footer text-uppercase"><strong>{{ $card['name'] }}</strong></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection