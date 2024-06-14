
@section('title','Feedback')
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
<style>
    a{
        color: #fff;
    }
</style>

</head>
<body>


<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading">We value your <span class="text-primary">feedback!</span></h1>
        <p>Tell us what you think and help us improve our services.</p>

{{--        FORM--}}
        <form action="{{route('contact.submit')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">
    </div>
            <div class="form-group">

                <label for="message">Message</label>
                <textarea type="text" name="message" id="message"></textarea>
            </div>

            <button type="submit"  class="btn">Submit</button>
        </form>
    </div>
</section>

<section id="contact-info" class="bg-dark">
    <div class="container">
        <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Location</h3>
<p>Abdoun, Amman, Jordan</p>
        </div>
        <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h3>Phone Number</h3>
<p>(06) 3346872</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h3>Email Address</h3>
            <p><a href="mailto:papilio_hotel@gmail.com">papilio_hotel@gmail.com</a></p>
        </div>
    </div>
</section>

@include('layouts.footer')


</body>
</html>
