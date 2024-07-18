<html>
    <body>

        <div class="container">
            <h1>CURRENT LOCATION </h1>
            <hr>
            <div class="card">
                <div class="cared-body">
                    @if ($location)

                    <h4> IP : {{$location->ip}}</h4>
                    <h4> Country name : {{$location->countryName}}</h4>
                    <h4> Country Code : {{$location->countryCode}}</h4>
                    <h4> Region Code : {{$location->regionCode}}</h4>
                    <h4> Region Name : {{$location->regionName}}</h4>
                    <h4> City Name : {{$location->cityName}}</h4>
                    <h4> Zip Code : {{$location->zipCode}}</h4>
                    <h4> Latitude : {{$location->latitude}}</h4>
                    <h4> Longitude : {{$location->longitude}}</h4>
                    <h4> Timezone : {{$location->timezone}}</h4>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
