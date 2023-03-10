<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        html, body{
            height: 100%;
        }
        head, body {
            background: #9ADCBB !important;
        }
        h4, h6, a{
            justify-content: center;
            display: flex;
        }
        .container{
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>
        <div>
            @yield('content')
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <!--@stack('script')-->
        </div>
        <div class="container" style="max-width: fit-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header">
                            <h4 style="font-family: exo;margin-bottom: 30px; margin-top:20px">Login</h4>
                                <div>
                                    <input style="margin-bottom: 10px; font-size: 16px; font-family: open-sans;" placeholder="Username" type="text"id="username" name="username" class="form-control">
                                </div>
                                <div>
                                    <input style="margin-bottom: 20px;font-size: 16px; font-family: open-sans;" placeholder="Password" type="password"id="password" name="password" class="form-control">
                                </div>
                                <a style="border-radius: 0.5rem;font-size: 15px; font-family: exo;display:block; background:#50D492; border-color: #50D492;" href="{{url('signin')}}" class="btn btn-sm btn-primary">SIGN IN</a><br>

                            <h6 style="font-size: 14px; font-family: open-sans;">Not a User?
                                <a class="btn" style="border-block: none;display: contents; color:#243665" href="{{url('register')}}">Register here</a>
                            </h6>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
