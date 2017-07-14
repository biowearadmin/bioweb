<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .patient {border-top: 1px solid #666; border-bottom: 1px solid #666; margin: -1px 0 0 2rem; padding: .5rem}
        .patient figure img{ max-width: 100% }
        .patient p {color: rgb(0, 154,139);}
        .patient h2 {color: rgb(71,71,71);}
        .patient p, .patient h2 {text-align: left;}
        .patient p {margin: 25px 0 5px 0}
        .patient h2{margin: 0px 0 5px 0 }
        .patient div.col-md-1 { padding: 8px }
        .patient div.col-md-1 figure img {margin-top: 40px;}
        .center {text-align: center}
        .margin-bot {margin-bottom: 20px;}
        .blue {color: #243E90;}
    </style>
</head>
<body>

    <div class="container-fluid" style="background-color: #48C2C5; padding:0;">
        <div class="col-md-3 center">
            <div class="row">
                <h4 style="background-color:#ff3333;margin-top:0;padding: 3rem;color:#fff;">Menu</h4>
            </div>
            <div class="row">
                <figure>
                    <img src="{{ asset('images/hospital_logo.png') }}" alt="">
                </figure>
            </div>
            <div class="row">
                <h1 style="color:#fff; border-bottom: 1px solid #fff;border-top: 1px solid #fff; width: 80%; margin: 10px auto">Dr. Danielle Williams</h1>
            </div>
        </div>
        <div class="col-md-9" style="background-color: rgb(255,255,255); text-align: center;">
            <div class="row margin-bot">
                <div class="col-md-9">
                    <h1 class="blue">Patient Monitoring Dashboard</h1>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="{{ asset('images/biowear_logo_transp.png') }}" alt="" style="max-width: 100px;">
                    </figure>
                </div>            
            </div>
            <div class="row patient">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/Dean_Dexter.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <p>Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>Dean Dexter</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/icons/note.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/icons/odometer01.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/icons/alert-red.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                     <a href="{{ action('ReportsController@dean') }}">
                        <figure>
                            <img src="{{ asset('images/heart.png') }}" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/icons/bubbles.png') }}" alt="">
                    </figure>
                </div>
            </div>
            {{-- Patient 2 --}}
            <div class="row patient">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/Samantha_Brown.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <p>Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>Latisha Brown</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/note.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/odometer02.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/alert-gray.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                     <a href="{{ action('ReportsController@latisha') }}">
                        <figure>
                            <img src="{{ asset('images/heart.png') }}" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/bubbles.png') }}" alt="">
                    </figure>
                </div>
            </div>
            {{-- Patient 3 --}}
            <div class="row patient">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/Julia_Jimenez.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <p>Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>Julia Jimenez</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/note.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/odometer03.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/alert-red.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                     <a href="{{ action('ReportsController@julia') }}">
                        <figure>
                            <img src="{{ asset('images/heart.png') }}" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/bubbles.png') }}" alt="">
                    </figure>
                </div>
            </div>
            {{-- Patient 4 --}}
            <div class="row patient">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/Craig_Lee.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <p>Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>Craig Lee</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/note.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/odometer01.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/alert-gray.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <a href="{{ action('ReportsController@craig') }}">
                        <figure>
                            <img src="{{ asset('images/heart.png') }}" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/bubbles.png') }}" alt="">
                    </figure>
                </div>
            </div>
            {{-- Patient 5 --}}
            <div class="row patient">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/David_Marchesi.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <p>Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>David E Marchesi</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/note.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/odometer05.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/alert-gray.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-1">
                     <a href="{{ action('ReportsController@david') }}">
                        <figure>
                            <img src="{{ asset('images/heart.png') }}" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-md-1">
                    <figure>
                        <img src="{{ asset('images/bubbles.png') }}" alt="">
                    </figure>
                </div>
            </div>
            {{-- End Patients --}}
        </div>
    </div>
    
</body>

</html>