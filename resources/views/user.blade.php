<html>
    <body>

        <div class="container">
            <h1>CURRENT LOCATION </h1>
            <hr>
            <div class="card">
                <div class="cared-body">
                    @if ($currentLoc)

                    <h4> IP : {{$currentLoc->ip}}</h4>
                    <h4> Country name : {{$currentLoc->countryName}}</h4>
                    <h4> Country Code : {{$currentLoc->countryCode}}</h4>
                    <h4> Region Code : {{$currentLoc->regionCode}}</h4>
                    <h4> Region Name : {{$currentLoc->regionName}}</h4>
                    <h4> City Name : {{$currentLoc->cityName}}</h4>
                    <h4> Zip Code : {{$currentLoc->zipCode}}</h4>
                    <h4> Latitude : {{$currentLoc->latitude}}</h4>
                    <h4> Longitude : {{$currentLoc->longitude}}</h4>
                    <h4> Timezone : {{$currentLoc->timezone}}</h4>

                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
