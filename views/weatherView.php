<?php
//get the cityname
$cityName = $APIArray['location']['name'];

//get the temperature
$temperature = $APIArray ["current"]['temp_c'];

//get the humidity
$humidity = $APIArray ["current"]["humidity"].'%';

//get the wind speed
$windSpeed = $APIArray["current"]["wind_kph"].' km/h';

//get the condition text
$conditionText = $APIArray["current"]["condition"]["text"];

//get the condition Icon
$conditionIcon = $APIArray["current"]["condition"]["icon"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Information</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg,rgb(62, 40, 89), #2575fc);
      color: #ff0;
      margin: 0;
      padding: 20px;
    }

    .weather-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 20px; /* Space between containers */
      max-width: 1200px;
      margin: 0 auto;
    }

    .weather-container {
      background: hsla(60, 90.00%, 60.80%, 0.11);
      padding: 20px;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(205, 25, 25, 0.1);
      text-align: center;
      margin-bottom: 20px;
      margin-left: 200px;
      width: 300px;
      height: 50 px;
      display: inline-block;
      /*  */
    }

    h1 {
      font-size: 24px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .weather-icon {
      font-size: 48px;
      margin-bottom: 15px;
    }

    .city-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .temperature {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .condition {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .weather-details {
      text-align: left;
      margin-top: 15px;
    }

    .weather-details p {
      font-size: 16px;
      margin: 8px 0;
    }

    .weather-details strong {
      font-weight: bold;
      margin-right: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .weather-grid {
        grid-template-columns: 1fr; /* One column on smaller screens */
      }
    }
  </style>
</head>
<body>
    <div class="weather-container" >
        <h1>Weather Information</h1>
        <div class="weather-icon">
            <img src=<?php echo $conditionIcon; ?> >
        </div> 
        <div class="city-name"> <?php echo $cityName ; ?> </div> 
        <div class="temperature"><?php echo $temperature ; ?></div> 
        <div class="condition"><?php echo $conditionText; ?></div>
        <div class="weather-details">
        <p><strong>Humidity:</strong><?php echo $humidity; ?></p> 
        <p><strong>Wind Speed:</strong><?php echo $windSpeed ; ?> </p> 
        </div>
    </div>
  </div>
</body>
</html>