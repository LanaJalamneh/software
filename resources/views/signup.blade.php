@section('title', 'Signup')
@include('layouts.nav')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign-up</title>
    <link
        href="https://fonts.googleapis.com/css?family=Raleway"
        rel="stylesheet"
    />
    <style>
        * {
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        body {
            background: #ded9d9;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        main{
            flex: 1;
        }
        a {
            text-decoration: none;
        }
        h1{
            padding-bottom: 0px;
        }
        #container {
            margin: 0px auto;
            max-width: 400px;
            padding: 20px;
            border: transparent;
            border-radius: 10px;
            font-family: 'Raleway', sans-serif;
            color: #fff;
            line-height: 1.8;          
        }
        .form-wrap {
            background: #fff;
            padding: 10px 25px;
            color: #333;
        }
        .form-wrap h1,
        .form-wrap p {
            text-align: center;
        }
        .form-wrap .form-group {
            margin-top: 15px;
        }

        .form-wrap .form-group label {
            display: block;
            color: #666;
        }

        .form-wrap .form-group input {
            width: 100%;
            padding: 8px;
            border: #ddd 1px solid;
            border-radius: 5px;
        }
        .form-wrap .form-group input:focus {
            border: 1px solid #f7c08a;
            outline: none;
        }

        .form-wrap button {
            display: block;
            width: 100%;
            padding: 8px;
            margin-top: 15px;
            background: #f7c08a;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .form-wrap button:hover {
            background: #c9975a;
        }

        .form-wrap .bottom-text {
            font-size: 13px;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 10px;
        }

        footer a {
            color:#f7c08a;
        }
    </style>
</head>
<body>
    <main id="main">
<div id="container">
    <div class="form-wrap">
        <h1>Sign Up</h1>
        <p>It's free and only takes a minute</p>
        <form>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" name="firstName" id="first-name" />
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" name="lastName" id="last-name" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </div>
            <div class="form-group">
                <label for="password2">Confirm Password</label>
                <input type="password" name="pasword2" id="password2" />
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <p class="bottom-text">
                By clicking the Sign Up button, you agree to our
                <a href="#">Terms & Conditions</a> and
                <a href="#">Privacy Policy</a>
            </p>
        </form>
    </div>
    <footer>
        <p>Already have an account? <a href="/login">Login Here</a></p>
    </footer>
</div>
</main>

@include('layouts.footer')

</body>
</html>
