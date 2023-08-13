
@section('title','About')
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


</head>
<body>




<section id="about-info" class="bg-light py-3">
    <div class="container">
        <div class="info-left">
            <h1 class="l-heading"><span class="text-primary">About </span>Hotel BT</h1>

            <p>At our hotel, we take pride in delivering an exceptional experience to every guest. With a passion for service excellence, we offer beautifully designed rooms, top-notch amenities, and a commitment to sustainability. Whether for business or pleasure, we promise a luxurious and unforgettable stay.</p>
            <p>Our team of friendly and attentive staff is at your service, ensuring that your every need is met with warmth and efficiency. From the moment you step into our lobby to the time you retire to your elegantly appointed room, you'll experience genuine hospitality that sets us apart.</p>
        </div>
        <div class="info-right">
            <img src="{{asset('Images/photo-2.jpg')}}" alt="hotel">
        </div>
    </div>
</section>
<div class="clr"></div>

<section id="testimonials" class="py-3">
    <div class="container">
        <h2 class="l-heading">What Our Guests Say</h2>
        <div class="testimonials bg-primary" >
            <img src="{{asset('Images/person-1.jpg')}}" alt="Samantha">
            <p>"Amazing hotel! The staff was incredibly friendly and accommodating, making us feel right at home. The rooms were spacious, clean, and beautifully decorated. The amenities were top-notch, especially the pool and spa facilities. We had a truly memorable experience and can't wait to come back!"</p>
        </div>

        <div class="testimonials bg-primary" >
            <img src="{{asset('Images/person-2.jpg')}}" alt="Jen">
            <p>"Our stay at this hotel exceeded all expectations. The location was perfect, close to popular attractions and with easy access to transportation. The staff went above and beyond to ensure our comfort and satisfaction. The rooms were stylish and well-appointed, providing a peaceful retreat after a busy day of exploring. We were truly impressed and will definitely be returning in the future."</p>
        </div>
    </div>
</section>

@include('layouts.footer')



</body>
</html>
