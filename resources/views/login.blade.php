@section('title', 'Welcome')
@include('layouts.nav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Log-in</title>
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
            min-height: 100vh;
        }
        #container {
            margin: 50px auto;
            padding: 20px;
            border: transparent;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;            
            font-family: 'Raleway', sans-serif;
            color: #fff;
            line-height: 1.8;
        }
        main{
            flex: 1;
        }
        .form-wrap {
            background: #fff;
            padding: 25px;
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
            padding: 10px;
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
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 50px;

            background: #f7c08a;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;

        }

        .form-wrap button:hover {
            background: #c9975a;
        }
        footer{
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <main id="main">
<div id="container">
    <div class="form-wrap">
        <h1>Log in</h1>
        <p>Access your Hotel account instantly        </p>
        <form>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </div>

            <form>
            <button type="submit" class="btn" formaction="/type">Log in</button>
            </form>
            <p class="bottom-text">
                <a href="#">Forgot Password?</a>
            </p>
        </form>
    </div>
</div>
</main>

@include('layouts.footer')

</body>
</html>
