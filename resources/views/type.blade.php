@section('title', 'Rooms')
@include('layouts.nav')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/grid.css">
    

    <style>
        .title{
            text-align: center;
        }
    </style>



</head>
<body>
<section id="work-a" class="text-center py-3">
    <h1 class="title">Discover Our Exquisite Collection of Rooms: <span class="text-primary">A Haven for Every Guest</span></h1>
    <br>

    <div class="container">

        <div class="items">

            {{--1--}}
            <a href="/single">
            <div class="item">
                <div class="item-image">
                        <img src="{{asset('Images/single.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Single Room</h2>
                    </div>
                </div>
            </div>
            </a>


            {{--2--}}
            <a href="/double">
            <div class="item">
                <div class="item-image">
                        <img src="{{asset('Images/double.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Double Room</h2>
                    </div>
                </div>
            </div>
            </a>

            {{--3--}}
            <a href="/triple">
            <div class="item">
                <div class="item-image">
                    <img src="{{asset('Images/triple.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Triple Room</h2>
                    </div>
                </div>
            </div>
            </a>

            {{--4--}}

            <a href="/twin">
            <div class="item">
                <div class="item-image">
                    <img src="{{asset('Images/twin.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Twin Room</h2>
                    </div>
                </div>
            </div>
            </a>

            {{--5--}}
            <a href="/family">
            <div class="item">
                <div class="item-image">
                    <img src="{{asset('Images/family.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Family Room</h2>
                    </div>
                </div>
            </div>
            </a>

            {{--6--}}
            <a href="/suite">
            <div class="item">
                <div class="item-image">
                    <img src="{{asset('Images/suite.jpg')}}" alt="" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrap">
                        <h2 class="item-text-title">Suite</h2>
                    </div>
                </div>
            </div>
            </a>


        </div>
    </div>
</section>


</div>

@include('layouts.footer')

</body>
</html>
