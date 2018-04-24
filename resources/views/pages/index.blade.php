@extends('layouts.layout')

@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>You Must Be Here</h2>
                <h1>Cuz You're Bored</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <p id="clickedCounter" class="clicked-counter">0</p>
                <button id="button">click me</button>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="timer">0</p>
            </div>
        </div>
        <div class="row snek-row">
            <div class="col-sm-12 text-center">
                <canvas id="gc" width="400" height="400"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <iframe src="http://www.theuselessweb.com" frameborder="0"></iframe>
            </div>
        </div>


    </div>



@endsection