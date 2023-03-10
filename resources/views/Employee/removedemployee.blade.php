<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Removed Employees</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <style>
        html, body{
            height: 100%;
        }
        body{
            background:#FAFAFA !important;
        }
        h4{
            display: contents;
            font-family: Exo;
            size: 34px;
        }
        .card-header{
            background: transparent;
            border-bottom: none;
        }
    </style>
    <body>
    @include('header')
        <div class="py-3">
            @yield('content')
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <!--@stack('script')-->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card" style="display:flex;border: 0px;left: 5%;right: 5%;top: 15%;position: absolute;background-color: transparent;">
                        <br>
                        <h5 style="font-family: Exo;">Removed Employees
                            <a style="color:#50D492;border-block: none; background: transparent; border-color: transparent;" href="{{url('back')}}" class="btn btn-sm btn-primary float-start">BACK</a>
                        </h5>
                        <div class="card" style="border: 0px; background-color: transparent;">
                            <div class="card-header" style="border-bottom: 1px solid rgba(0,0,0,.125);">
                                <a style="font-size:14px; padding-right: 20px;">Employee ID</a>
                                <a style="font-size:14px;">Employee Name</a>
                                <a style="font-size:14px; float: right!important;">Removed Date</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
