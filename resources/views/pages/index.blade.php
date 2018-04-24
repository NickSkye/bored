@extends('layouts.layout')

@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>You Must Be Here</h2>
                <h1>Cuz You're Bored</h1>
            </div>
        </div>
        <div class="wall"></div>
        <div class="switch-div">
            <input type="checkbox" class="side" id="side" checked="checked" />
            <div class="onoff">
                <span class="off">OFF</span>
                <span class="on">ON</span>
            </div>
            <label class="front" for="side"></label>


            <div class="switchplate">
                <div class="screw top">&ndash;</div>
                <div class="screw bottom">&ndash;</div>
            </div>
            <div class="switch"></div>
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

        {{--<div class="row rocket-row">--}}
            {{--<div class="col-sm-12 text-center">--}}
                {{--<script>--}}

                {{--var myGamePiece;--}}
                {{--var myObstacles = [];--}}
                {{--var myScore;--}}

                {{--function startGame() {--}}
                    {{--myGamePiece = new component(30, 30, "red", 10, 120);--}}
                    {{--myGamePiece.gravity = 0.05;--}}
                    {{--myScore = new component("30px", "Consolas", "black", 280, 40, "text");--}}
                    {{--myGameArea.start();--}}
                {{--}--}}

                {{--var myGameArea = {--}}
                    {{--canvas : document.createElement("canvas"),--}}
                    {{--start : function() {--}}
                        {{--this.canvas.width = 480;--}}
                        {{--this.canvas.height = 270;--}}
                        {{--this.context = this.canvas.getContext("2d");--}}
                        {{--document.body.insertBefore(this.canvas, document.body.childNodes[0]);--}}
                        {{--this.frameNo = 0;--}}
                        {{--this.interval = setInterval(updateGameArea, 20);--}}
                    {{--},--}}
                    {{--clear : function() {--}}
                        {{--this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);--}}
                    {{--}--}}
                {{--}--}}

                {{--function component(width, height, color, x, y, type) {--}}
                    {{--this.type = type;--}}
                    {{--this.score = 0;--}}
                    {{--this.width = width;--}}
                    {{--this.height = height;--}}
                    {{--this.speedX = 0;--}}
                    {{--this.speedY = 0;--}}
                    {{--this.x = x;--}}
                    {{--this.y = y;--}}
                    {{--this.gravity = 0;--}}
                    {{--this.gravitySpeed = 0;--}}
                    {{--this.update = function() {--}}
                        {{--ctx = myGameArea.context;--}}
                        {{--if (this.type == "text") {--}}
                            {{--ctx.font = this.width + " " + this.height;--}}
                            {{--ctx.fillStyle = color;--}}
                            {{--ctx.fillText(this.text, this.x, this.y);--}}
                        {{--} else {--}}
                            {{--ctx.fillStyle = color;--}}
                            {{--ctx.fillRect(this.x, this.y, this.width, this.height);--}}
                        {{--}--}}
                    {{--}--}}
                    {{--this.newPos = function() {--}}
                        {{--this.gravitySpeed += this.gravity;--}}
                        {{--this.x += this.speedX;--}}
                        {{--this.y += this.speedY + this.gravitySpeed;--}}
                        {{--this.hitBottom();--}}
                    {{--}--}}
                    {{--this.hitBottom = function() {--}}
                        {{--var rockbottom = myGameArea.canvas.height - this.height;--}}
                        {{--if (this.y > rockbottom) {--}}
                            {{--this.y = rockbottom;--}}
                            {{--this.gravitySpeed = 0;--}}
                        {{--}--}}
                    {{--}--}}
                    {{--this.crashWith = function(otherobj) {--}}
                        {{--var myleft = this.x;--}}
                        {{--var myright = this.x + (this.width);--}}
                        {{--var mytop = this.y;--}}
                        {{--var mybottom = this.y + (this.height);--}}
                        {{--var otherleft = otherobj.x;--}}
                        {{--var otherright = otherobj.x + (otherobj.width);--}}
                        {{--var othertop = otherobj.y;--}}
                        {{--var otherbottom = otherobj.y + (otherobj.height);--}}
                        {{--var crash = true;--}}
                        {{--if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {--}}
                            {{--crash = false;--}}
                        {{--}--}}
                        {{--return crash;--}}
                    {{--}--}}
                {{--}--}}

                {{--function updateGameArea() {--}}
                    {{--var x, height, gap, minHeight, maxHeight, minGap, maxGap;--}}
                    {{--for (i = 0; i < myObstacles.length; i += 1) {--}}
                        {{--if (myGamePiece.crashWith(myObstacles[i])) {--}}
                            {{--return;--}}
                        {{--}--}}
                    {{--}--}}
                    {{--myGameArea.clear();--}}
                    {{--myGameArea.frameNo += 1;--}}
                    {{--if (myGameArea.frameNo == 1 || everyinterval(150)) {--}}
                        {{--x = myGameArea.canvas.width;--}}
                        {{--minHeight = 20;--}}
                        {{--maxHeight = 200;--}}
                        {{--height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);--}}
                        {{--minGap = 50;--}}
                        {{--maxGap = 200;--}}
                        {{--gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);--}}
                        {{--myObstacles.push(new component(10, height, "green", x, 0));--}}
                        {{--myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));--}}
                    {{--}--}}
                    {{--for (i = 0; i < myObstacles.length; i += 1) {--}}
                        {{--myObstacles[i].x += -1;--}}
                        {{--myObstacles[i].update();--}}
                    {{--}--}}
                    {{--myScore.text="SCORE: " + myGameArea.frameNo;--}}
                    {{--myScore.update();--}}
                    {{--myGamePiece.newPos();--}}
                    {{--myGamePiece.update();--}}
                {{--}--}}

                {{--function everyinterval(n) {--}}
                    {{--if ((myGameArea.frameNo / n) % 1 == 0) {return true;}--}}
                    {{--return false;--}}
                {{--}--}}

                {{--function accelerate(n) {--}}
                    {{--myGamePiece.gravity = n;--}}
                {{--}--}}
                {{--</script>--}}
                {{--<canvas id="rc" width="400" height="400"></canvas>--}}
                {{--<button onmousedown="accelerate(-0.2)" onmouseup="accelerate(0.05)">ACCELERATE</button>--}}
                {{--<button id="rocket-button" onclick="startGame()">start rocket</button>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<div class="col-sm-12 text-center">--}}
                {{--<iframe src="http://www.theuselessweb.com" frameborder="0"></iframe>--}}
            {{--</div>--}}
        {{--</div>--}}


    </div>



@endsection