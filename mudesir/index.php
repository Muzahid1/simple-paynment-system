<?php
error_reporting(0);
$key = "demo";
$url = "https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=IBM&outputsize=full&apikey=".$key;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
/*echo '<pre>';
print_r($result);*/
if (isset($result['Time Series (Daily)'])){
    echo "<table id='customers'><tr><th>date</th><th>high</th><th>high</th></tr>";
   foreach($result['Time Series (Daily)'] as $key=>$val){
        echo  "<tr><th>".$key."</th><th>".$val['2. high']."</th><th>".$val['3. low']."</th></tr>";
    }
    echo "</table>";
    }
?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>