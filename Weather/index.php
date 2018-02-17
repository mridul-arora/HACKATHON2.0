

<!DOCTYPE html>
<html lang="en">


    <head>
  <title>Weather</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
    <style>
    .box {
        /*  margin: 2vh 3vw;*/
        width: 250px;
        height: 250px;
    }
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
  body{
            background-image: url("../Assets/images/weather.jpg");

            background-size: cover;
        }

        .well{
            margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;

           font-weight: 1000;
            border: bold 2px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 5vh;
             background-color:rgb(153, 179, 255);
        }
        .well:hover{
         margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;
            opacity:1;
           font-weight: 1000;
            border: bold 5px;
            text-decoration: none;
            border-radius: 25px;
        }
            .select_platform_space {
	border:2px solid black;
	margin-top:100px;
                margin-bottom: 100px;
	padding:45px;
   background-color:rgb(153, 179, 255);
	text-align:center;
	color:black;
	margin-left:350px;
	margin-right:350px;
    border: bold 5px;
	border-radius: 25px;
    font-weight: 1000;
}
    </style>
<body>

    <div class="select_platform_space">
     Temperature : <?php echo $temperature_current_c;?>&deg;C<br>
	  Humidity : <?php echo $humidity_current;?>%<br>
	<?php echo $summary_current;?><br>
	Wind Speed : <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr>
        <br>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
		 <?php
		          $i=0;
		          foreach($data1->daily->data as $day):
		?>


                                    <div class="well">
                                        <?php
                                        $t=$day->temperatureHigh;
                                        $temp=($t-32)*.556;
                                        ?>
                                       <b> <?php echo date("l",$day->time);?></b><br>
                                        <b>Temperature : <?php echo round($temp);?>&deg;C<br></b>
                                            <b> Humidity : <?php echo round($day->humidity*100);?>%<br></b>
                               </div>


	  <?php
	  $i++;
	  if($i==24) break;
	   endforeach;
	  ?>
            </div>
            <div class="col-md-6">
    <?php
		          $i=0;
		          foreach($data1->hourly->data as $hour):
		?>


                                    <div class="well">
                                        <?php
                                        $t=$hour->temperature;
                                        $temp=($t-32)*.556;
                                        ?>
                                       <b> Time : <?php echo date("g:i a",$hour->time);?></b><br>
                                        <b>Temperature : <?php echo round($temp);?>&deg;C<br></b>
                                            <b> Humidity : <?php echo round($hour->humidity*100);?>%<br></b>
                               </div>


	  <?php
	  $i++;
	  if($i==24) break;
	   endforeach;
	  ?>
    </div>
    </div>
    </div>
</body>
</html>
