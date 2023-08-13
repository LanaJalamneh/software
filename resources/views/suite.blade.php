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
    <link rel="stylesheet" href="/room.css">

    <style>
        .btn{
            display: flex;
            justify-content: flex-end;
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* #rooms{
            height: 82vh !important;

        } */
    </style>

</head>
<body>
    <main id="main">
<section id="rooms">
    <div class="rooms-container">
          

            <div class="room">
                <div class="img">
                <img src="{{asset('Images/Deluxe6.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Deluxe Suite</h2>
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
                        <p>180$<span style="color: #747579">/day</span></p>
                   <button type="submit" class="btn">Select Room</button>
                </div>
                </div>

            </div>
         

            <div class="room">
                <div class="img">
                <img src="{{asset('Images/pool.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Deluxe Suite with pool</h2>
                    <ul>
                        <li>Air Conditioning</li>
                        <li>Wifi</li>
                        <li>Minibar</li>
                        <li>Flat-screen TV</li>
                        <li>Kitchenette</li>
                        <li>Living Area</li>
                        <li>Dining Table</li>
                        <li>Coffee/Tea Maker</li>
                    </ul>
                    <p style="color: #D6293E;">Non-Refundable Booking</p>

                    <div class="confirmation">
                        <p>200$<span style="color: #747579">/day</span></p>
                   <button type="submit" class="btn">Select Room</button>
                </div>
                </div>
            </div>


        </div>

</section>
</main>

@include('layouts.footer')
</body>
</html>
