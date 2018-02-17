
<?php

/*$api_url='https://api.darksky.net/forecast/e1faeca74abbf5d10832e4fa804bff35/37';

$forecast=$json_decode(file_get_contents($api_url));
echo "neha";
echo '<pre>';
print_r($forecast);
echo '</pre>';*/

$coordinates="30.3165,78.0322";
$json_url = "https://api.darksky.net/forecast/e1faeca74abbf5d10832e4fa804bff35/".$coordinates;
$json = file_get_contents($json_url);
/*$json=str_replace('},

]',"}

]",$json);*/
$data1 = json_decode($json);
/*echo "<pre>";
print_r($data1);
echo "</pre>";*/

//current conditions
$temperature_current=$data1->currently->temperature;
$temperature_current_c=round(($temperature_current - 32)*.5556);
$summary_current=$data1->currently->summary;
$windspeed_current=round($data1->currently->windSpeed);
$humidity_current=$data1->currently->humidity*100;
//set timezone
date_default_timezone_set($data1->timezone);
?>
<!DOCTYPE html>
<head>
<title>Weather Report </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
       .select_platform_space {
	border:2px solid black;
	margin-top:100px;
	padding:45px;
   background-color:rgb(153, 179, 255);
	text-align:center;
	color:black;
	margin-left:350px;
	margin-right:350px;
	border-radius: 25px;
}
      .select_platform_space1 {
	border:2px solid black;
	margin-top:100px;
	padding:45px;
   background-color:rgb(153, 179, 255);
	text-align:center;
	color:black;
	margin-left:50px;
	margin-right:50px;
	border-radius: 25px;
}
</style>
<body>
    <div class="select_platform_space">
     Temperature : <?php echo $temperature_current_c;?>&deg;C<br>
	  Humidity : <?php echo $humidity_current;?><br>
	<?php echo $summary_current;?><br>
	Wind Speed : <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr>
    <br>
    </div>

		 <?php
		          $i=0;
		          foreach($data1->daily->data as $day):
		?>


                                    <div class="select_platform_space1">
                                       <b> <?php echo date("l",$day->time);?></b><br>
                                        <b>Temperature : <?php echo round($day->temperatureHigh);?><br></b>
                                            <b> Humidity : <?php echo round($day->humidity*100);?><br></b>
                               </div>


	  <?php
	  $i++;
	  if($i==24) break;
	   endforeach;
	  ?>



</body>
</html>
