@extends('layouts.layout')

@section('content')
    <div class="container-fluid">


        <div>
            <h2>You Must Be Here</h2>
            <h1>Cuz You're Bored</h1>
        </div>

        <div>
            <p id="clickedCounter" class="clicked-counter">0</p>
            <button id="button">click me</button>
            <canvas id="myCanvas" width="500" height="500"></canvas>
        </div>
        <div>
            <p class="timer">0</p>
        </div>
        <div>
            <iframe src="http://www.theuselessweb.com" frameborder="0"></iframe>
        </div>





    </div>



@endsection