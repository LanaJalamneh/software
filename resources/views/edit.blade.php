
@section('title','Contact')
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
    <script src="https://kit.fontawesome.com/cf7b2cdf0b.js" crossorigin="anonymous"></script>


</head>
<body>


<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
        <p>Please fill out the form below to contact us</p>

{{--        FORM--}}
        <form action="{{route('contact.submit')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$info->name}}">
            </div>
            <div class="form-group">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$info->email}}">
    </div>
            <div class="form-group">

                <label for="message">Message</label>
                <textarea type="text" name="message" id="message">{{$info->message}}</textarea>
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
<p>50 Main st, Boston MA</p>
        </div>
        <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h3>Phone Number</h3>
<p>(617) 555-5555</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h3>Email Address</h3>
            <p>frontdesk@hotelbt.co</p>
        </div>
    </div>
</section>

@include('layouts.footer')


</body>
</html>
