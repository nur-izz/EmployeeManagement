<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
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

                        <div class="card" style="border: 0px; background-color: transparent;">
                            <div class="card-header">
                                <h4>Employee
                                <a href="{{url('add-employee')}}" style="color:#50D492; background:transparent; border-color: #50D492; border-radius: 0.5rem;"class="btn btn-sm btn-primary">ADD NEW EMPLOYEE</a>
                                <a href="{{url('removed-employee')}}" style="color:#323232; background:transparent; border-color: transparent; border-radius: 0.5rem;" class="btn btn-sm btn-primary">REMOVED EMPLOYEE</a>
                                <a style="background: transparent;border-color: transparent;color: #000000;border-bottom: 2px solid gray;" class="btn btn-sm btn-primary float-end">Filter Address</a>
                                </h4>

                                <div class="card-header" style="display:flex;padding: 15px 0px;">
                                    <div class="card" style="margin-right:16px;border-radius: 14px; width: 436px;">
                                        <div class="card-header">
                                            <div style="color:#9E9E9E; display:contents; font-size:12px; font-family:Exo">#IDXXXX
                                            <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-employee')}}">edit</a></div>
                                                
                                                <div style="font-family:Exo; font-size:20px; color:#389466">
                                                    Employee Name
                                                </div>
                                                <div style="font-family:Open sans; font-size:14px; color:#808080">
                                                    Employee Position
                                                </div>
                                        </div>
                                        <div class="card" style="background:#F5F5F5;border-bottom-left-radius: 13px; border-bottom-right-radius:13px;">
                                                <div style="font-family:Exo; font-size:16px; color:#757575; padding-left: 15px;">
                                                    Address Name
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card" style="margin-right:16px;border-radius: 14px; width: 436px;">
                                        <div class="card-header">
                                            <div style="color:#9E9E9E; display:contents; font-size:12px; font-family:Exo">#IDXXXX
                                            <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-employee')}}">edit</a></div>
                                                <div style="font-family:Exo; font-size:20px; color:#389466">
                                                    Employee Name
                                                </div>
                                                <div style="font-family:Open sans; font-size:14px; color:#808080">
                                                    Employee Position
                                                </div>
                                        </div>
                                        <div class="card" style="background:#F5F5F5;border-bottom-left-radius: 13px; border-bottom-right-radius:13px;">
                                                <div style="font-family:Exo; font-size:16px; color:#757575; padding-left: 15px;">
                                                    Address Name
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card" style="border-radius: 15px; width: 436px;">
                                        <div class="card-header">
                                            <div style="color:#9E9E9E; display:contents; font-size:12px; font-family:Exo">#IDXXXX
                                            <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-employee')}}">edit</a></div>
                                                <div style="font-family:Exo; font-size:20px; color:#389466">
                                                    Employee Name
                                                </div>
                                                <div style="font-family:Open sans; font-size:14px; color:#808080">
                                                    Employee Position
                                                </div>
                                        </div>
                                        <div class="card" style="background:#F5F5F5;border-bottom-left-radius: 13px; border-bottom-right-radius:13px;">
                                                <div style="font-family:Exo; font-size:16px; color:#757575; padding-left: 15px;">
                                                    Address Name
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                                <div class="card" style="border: 0px;background-color: transparent;">
                                    <div class="card-header">
                                        <h4>Addresses
                                            <a href="{{url('add-address')}}" style="color:#50D492; background:transparent; border-color: #50D492; border-radius: 0.5rem;" class="btn btn-sm btn-primary">NEW ADDRESS</a>
                                        </h4>

                                        <div class="card-header" style="display:flex;padding: 15px 0px;">
                                            <div class="card" style="margin-right:16px;border-radius: 14px; width: 436px;">
                                                <div class="card-header">
                                                    <div style="color:#389466; display:contents; font-size:20px; font-family:Exo">Address Name
                                                        <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-address')}}">edit</a>
                                                    </div>
                                                    <div style="font-family:Open sans; font-size:16px; color:#000000">
                                                         Unit/Block/Building Address
                                                         <div>Street Address</div>
                                                         <div>XXXXXX Country Address</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card" style="margin-right:16px;border-radius: 14px; width: 436px;">
                                                <div class="card-header">
                                                    <div style="color:#389466; display:contents; font-size:20px; font-family:Exo">Address Name
                                                        <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-address')}}">edit</a>
                                                    </div>
                                                    <div style="font-family:Open sans; font-size:16px; color:#000000">
                                                         Unit/Block/Building Address
                                                         <div>Street Address</div>
                                                         <div>XXXXXX Country Address</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card" style="border-radius: 15px; width: 436px;">
                                                <div class="card-header">
                                                    <div style="color:#389466; display:contents; font-size:20px; font-family:Exo">Address Name
                                                        <a class="btn float-end" style="border-block: none; color:#243665" href="{{url('edit-address')}}">edit</a>
                                                    </div>
                                                    <div style="font-family:Open sans; font-size:16px; color:#000000">
                                                         Unit/Block/Building Address
                                                         <div>Street Address</div>
                                                         <div>XXXXXX Country Address</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </body>
</html>
