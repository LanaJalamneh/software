@section('title', 'Triple Rooms')
@include('layouts.nav')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/room.css">

    <style>
        .btn{
            display: flex;
            justify-content: flex-end;
        }
    </style>

</head>
<body>
<section id="rooms">
    <div class="rooms-container">
        <div class="room">
            <div class="img">
                <img src="{{asset('Images/Standard3.jpg')}}" alt="">
            </div>
            <div class="content">
                <h2>Standard Room</h2>
                <ul>
                    <li>Air Conditioning</li>
                    <li>Wifi</li>
                    <li>Work desk</li>
                    <li>Flat-screen TV</li>

                </ul>
                <p style="color: #0cbc87;">Free cancellation up to 2 days</p>

                <div class="confirmation">
                    <p>55$<span style="color: #747579">/day</span></p>
                    <button type="submit" class="btn">Select Room</button>
                </div>
            </div>
        </div>

        <div class="room">
            <div class="img">
                <img src="{{asset('Images/Deluxe3.jpg')}}" alt="">
            </div>
            <div class="content">
                <h2>Deluxe Room</h2>
                <ul>
                    <li>Air Conditioning</li>
                    <li>Wifi</li>
                    <li>Work desk</li>
                    <li>Flat-screen TV</li>
                    <li>Minibar</li>
                    <li>Coffee/Tea Maker</li>

                </ul>
                <p style="color: #D6293E;">Non-Refundable Booking</p>

                <div class="confirmation">
                    <p>80$<span style="color: #747579">/day</span></p>
                    <button type="submit" class="btn">Select Room</button>
                </div>
            </div>

        </div>
        <div class="room">
            <div class="img">
                <img src="{{asset('Images/Economy3.jpg')}}" alt="">
            </div>
            <div class="content">
                <h2>Economy Room</h2>
                <ul>
                    <li>Air Conditioning</li>
                    <li>Wifi</li>
                    <li>Work desk</li>
                </ul>
                <p style="color: #0cbc87;">Free cancellation up to 3 days</p>

                <div class="confirmation">
                    <p>40$<span style="color: #747579">/day</span></p>
                    <button type="submit" class="btn">Select Room</button>
                </div>
            </div>
        </div>
    </div>

</section>

@include('layouts.footer')
</body>
</html>
