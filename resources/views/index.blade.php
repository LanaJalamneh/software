
@section('title', 'Welcome')
@include('layouts.nav')



    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welcome to the most extraordinary hotel in Boston Massachusetts ">
    <meta name="keywords" content="hotel,boston hotel,new england hotel">
    <link rel="stylesheet" href="/style.css">
    {{-- <link rel="stylesheet" href="/mobile.css"> --}}

    <script src="https://kit.fontawesome.com/cf7b2cdf0b.js" crossorigin="anonymous"></script>
</head>
<body>
<header>


    <div id="showcase">
        <div class="container">
            <div class="showcase-content">
                <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
                <p class="lead">Welcome to our hotel, where comfort and hospitality meet for a truly enjoyable stay</p>
                <a class="btn" href="/signup">Book a Room</a>
            </div>
        </div>
    </div>

</header>

<section id="home-info" class="bg-dark">
    <div class="info-img">

    </div>
    <div class="info-content">
        <h2><span class="text-primary">The History</span> Of Our Hotel</h2>
        <p>For decades, we have been a cherished destination for travelers seeking exceptional hospitality and unforgettable experiences. Our journey began in 1995, when our founders envisioned creating a haven of luxury and comfort. Over the years, we have evolved into a landmark establishment, blending timeless elegance with modern amenities. With a rich heritage of serving esteemed guests from all around the world, we take pride in our legacy of providing impeccable service and creating lasting memories.</p>

        <a href="/about" class="btn btn-light">Read More</a>
    </div>
</section>

<section id="features">
    <div class="box bg-light">
        <i class="fas fa-hotel fa-3x"></i>
        <h3>Great Location</h3>
        <p>Our hotel sits in the heart of Amman, putting you in the center of it all. Experience the city's top attractions, renowned shopping, and vibrant entertainment, all just steps away from our doorstep.</p>
    </div>
    <div class="box bg-primary">
        <i class="fas fa-utensils fa-3x"></i>
        <h3>Free Meals</h3>
        <p>Delight in a wide selection of delicious dishes crafted by our skilled chefs. From breakfast to dinner, our free meals are designed to satisfy your taste buds and enhance your stay with us.</p>
    </div>
    <div class="box bg-light">
        <i class="fas fa-dumbbell fa-3x"></i>
        <h3>Fitness Room</h3>
        <p>Stay fit and active during your stay with our well-equipped Fitness Room. Experience a wide range of modern exercise machines and equipment for an invigorating workout session.</p>
    </div>
</section>

<div class="clr"></div>


@include('layouts.footer')


</body>
</html>
