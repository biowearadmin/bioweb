<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('jke-d3-ecg/dist/jke-d3-ecg.css') }}">
    <title>Patient</title>
    <style>
        #chartdiv {
        width: 95%;
        height: 200px;
        margin: 0 auto;
        }
        .green{ color: #48C2C4;font-size: 2rem;text-align:left;margin-top: 20px}
        h2 {color: #243E90; text-align: left; margin-top: 10px}
        p {text-align: left;}
        .padding0 {padding: 0}
        .big {font-size: 2.25rem; font-weight: 600; margin: 0;}
        .borderR {border-right: 1px solid #666}
        .lbl {color: #333; font-size: 2rem}
        .blue {color: #243E90;font-size: 2rem}
        .center {text-align: center}
        .bluebg {background-color: #48C2C4; color:#fff;padding: 5px;height: 150px;border-left: 3px solid #fff;border-right: 3px solid #fff;margin-top:5rem;}
        .bluebg figure{width: 100%;}
        .bluebg figure img{margin: 0 auto;width: 45%;} 
        .bluebg p{font-size: 1.75rem;text-align: center;}
        .bluebg .big {font-size: 4rem; font-weight: normal;}
        .bluebg .medium {font-size: 2rem; font-weight: normal;margin-top: 2rem}
        
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
                    <h1 class="blue">Personal Patient Profile</h1>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="{{ asset('images/biowear_logo_transp.png') }}" alt="" style="max-width: 100px;">
                    </figure>
                </div>            
            </div>
            <div class="row">
                <div class="col-md-2">
                    <figure>
                        <img src="{{ asset('images/Craig_Lee.png') }}" alt="" style="max-width: 100%">
                    </figure>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <p class="green">Patient ID</p>
                    </div>
                    <div class="row">
                        <h2>Craig Lee</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <p class="green">Summary</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 padding0 borderR">
                            <p class="big">53</p>
                            <p class="padding0 lbl">Age</p>
                        </div>
                        <div class="col-md-4 borderR">
                            <p class="big">65 Kg</p>
                            <p class="lbl">Weight</p>
                        </div>
                        <div class="col-md-4">
                            <p class="big">1.67 m</p>
                            <p class="lbl">Height</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <p class="green">Category</p>
                        <p class="lbl">Mature age group</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-2 padding0">
                    <p class="blue">Last Visit</p>
                    <p>10/22/2016</p>
                </div>
                <div class="col-md-4 padding0">
                    <p class="blue">Condition</p>
                    <p> Healty</p>
                </div>
                <div class="col-md-3 padding0">
                    <p class="blue">Medication</p>
                    <p>None</p>
                </div>
            </div>
            <div class="row">
                <div class="row"><h1 style="color:#48C2C4">Biowear Live Data</h1></div>
                <div class="jke-ecgChart"></div>
                <div class="jke-ecgChart"></div>
                <div class="jke-ecgChart"></div>
                <div class="jke-ecgChart"></div>
                <div class="jke-ecgChart"></div>
                {{-- <form method="post" id="formy" action="{{ action('ReportsController@readECGFile') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <p class="file">Select file:</p>
                    <input type="file" name="ECGFile" class="form-class"/>
                    <input type="submit" value="send" name="send"/>
                </form> --}}
            </div>
             <div class="row">
                <div class="col-md-2 col-md-offset-1 bluebg">
                    <p>Heart rate</p>
                    <figure>
                        <img src="{{ asset('images/heart_white.png') }}" alt="">
                    </figure>
                    <p class="big">138</p>
                </div>
                 <div class="col-md-2 bluebg">
                    <p>Blood Pressure</p>
                    <figure>
                        <img src="{{ asset('images/measure_circle.png') }}" alt="">
                    </figure>
                    <p class="big">81/44</p>
                </div>
                <div class="col-md-2 bluebg">
                    <p>Temperature</p>
                    <figure>
                        <img src="{{ asset('images/temperature.png') }}" alt="">
                    </figure>
                    <p class="medium">97°F / 36°C</p>
                </div>
                <div class="col-md-2 bluebg">
                    <p>Respiratory Rate</p>
                    <figure>
                        <img src="{{ asset('images/wind.png') }}" alt="">
                    </figure>
                    <p class="big">16</p>
                </div>
                <div class="col-md-2 bluebg">
                    <p>Activity Monitor</p>
                    <figure>
                        <img src="{{ asset('images/data.png') }}" alt="">
                    </figure>
                    <p class="medium">Standing up</p>
                </div>
            </div>
        </div>
    </div>
     
    
</body>
<script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('jquery-ui/ui/minified/jquery.ui.widget.min.js') }}"></script>
    <script src="{{ asset('d3/d3.min.js') }}"></script>

    <!-- Include jke-d3-ecg and initialize the chart -->
    <script src="{{ asset('jke-d3-ecg/dist/jke-d3-ecg.min.js') }}"></script>
    <script>
        $('.jke-ecgChart').ecgChart({
            
            height: 100,
            width: 800
        
        });
    </script>
    <script >
        var _data = [
            0, 0, 0, 0, 0.0000050048828125, 0.0000137939453125, 0.000049560546875,
            0.00008740234375, 0.00015966796875, 0.000262451171875, 0.0003975830078125, 0.0005687255859375,
            0.0007802734375, 0.001037353515625, 0.0013468017578125, 0.00172119140625, 0.0021756591796875,
            0.0027232666015625, 0.0033880615234375, 0.004206787109375, 0.0052380371093750005,
            0.006586181640625, 0.008400146484375001, 0.010904296875, 0.0144892578125, 0.0196798095703125, 
            0.049684204101562504, 0.0886883544921875, 0.11185363769531251, 0.134164306640625,
            0.137352294921875, 0.1160369873046875, 0.08516308593750001, 0.0539765625, 
            0.014997436523437501, -0.015882568359375, -0.0387554931640625, -0.06125732421875,
            -0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
            0.08582861328125001, 0.397717529296875, 0.8136408691406251, 1.2295617980957032,
            0.9944150390625001, 0.2824605712890625, -0.38949267578125, -0.597251220703125,
            -0.425675537109375, -0.1537947998046875, -0.0500914306640625, -0.0111041259765625,
            0.0027451171875, 0.0071739501953125, 0.008443359375, 0.0094327392578125, 0.012530517578125,
            0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
            0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
            0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
            0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
            0.2724073486328125, 0.286978271484375, 0.3007579345703125, 0.3067425537109375,
            0.3106370849609375, 0.303756103515625, 0.2897236328125,0.25916931152343753,
            0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
            0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
            -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
            -0.012556030273437501, -0.010675048828125, -0.00835888671875, 
            -0.0057305908203125, -0.0000562744140625];
    
// Create a data point generator.
var getDataPoint = (function () {
    var _x = -1;
    var _max = _data.length;

    return function () {
        _x = (_x + 1) % _max;
        return { x: Date.now(), y: _data[_x] };
    };
})();

var heartRate = 60; // bpm
var interval = 60 * 1000 / (_data.length * heartRate);

// Generate a new data point based on the heart rate.
setInterval(function () {
    $('.jke-ecgChart').ecgChart('addDataPoint', getDataPoint());
}, interval);
    </script>
</html>