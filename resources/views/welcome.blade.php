<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}", ng-app="weatherReadingApp">
    <head>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script>window.Laravel = { csrfToken: '{{csrf_token()}}'}</script>
            {{-- <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

            {{-- <script src="npm/angular/angular.min.js"></script>
            <script src="npm/lodash/lodash.min.js"></script>
            <script src="npm/angular-route/angular-route.min.js"></script>
            <script src="npm/angular-local-storage/dist/angular-local-storage.min.js"></script>
            <script src="npm/restangular/dist/restangular.min.js"></script>

            <script src="js/app.js"></script>
            <script src="js/controllers.js"></script> --}}

        <title>Weather</title>

    </head>
    <body>
        <h1> Hello World 3</h1>
        
        <div id='app'>
            <div class="container">
                <readings></readings>
            </div>
        </div>

        {{-- <div ng-view></div> --}}

        
<p> lev: Elevation </p>
<p>hs : Significant wave height </p>
<p>hx : Spectral estimate of maximum wave </p>
 <p>tp : Peak Period </p>
<p>tm01 : Mean wave period </p>
<p>tm02 : Mean wave period </p>
<p>dp : Peak wave direction (from) </p>
<p>dpm : Mean direction at peak frequency (from) </p>
<p>hs_sw1 : Significant wave height of primary swell </p>
<p>hs_sw8 : Significant wave height of swell (> 8s) </p>
<p>tp_sw1 : Peak period of primary swell </p>
<p>tp_sw8 : Peak period of swell (> 8s) </p>
<p>dpm_sw8 : Mean direction at swell peak frequency (from) </p>
<p>dpm_sw1 : Mean direction of primary swell peak frequency </p>
<p>hs_sea8 : Significant wave height of sea (< 8s) </p>
<p>hs_sea : Significant wave height of wind sea </p>
<p>tp_sea8 : Peak period of sea (< 8s) </p>
<p>tp_sea : Peak period of wind sea </p>
<p>tm_sea : Mean period of wind sea </p>
<p>dpm_sea8 : Mean direction at sea peak frequency (from) </p>
<p>dpm_sea : Mean direction at wind sea peak frequency (from) </p>
<p>hs_ig : Infragravity significant wave height </p>
<p>hs_fig : Far infragravity wave height </p>
<p>wsp : Mean wind speed at 10 m </p>
<p>gst : Typical gust speed </p>
<p>wd : Wind direction (from) </p>
<p>wsp100 : Mean wind speed at 100 m </p>
<p>wsp50 : Mean wind speed at 50 m </p>
<p>wsp80 : Mean wind speed at 80 m </p>
<p>precip : Precipitation </p>
<p>tmp : Air temperature </p>
<p>rh : Relative humidity </p>
<p>vis : Visibility </p>
<p>cld : Cloud cover </p>
<p>cb : Cloud base </p>
<p>csp0 : Surface current speed </p>
<p>cd0 : Surface current direction (to) </p>
<p>ss : Storm surge elevation </p>
<p>sst : Sea surface temperature </p>

<p> Occasional waves may be larger than Hx.Occasional gusts may be up to 50% greater </p>


 <script src="{{ asset('js/app.js') }}"></script>
    </body>

  


   

</html>
