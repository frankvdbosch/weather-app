<!doctype html>
<html>
    <head>
        <title>Weather Information</title>
    </head>
    <body>
        <h1>Current weather in {{ $weatherData['name'] }}</h1>
        <p>Description {{ $weatherData['weather'][0]['description']}}</p>
        <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
    </body>
</html>