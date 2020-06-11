<?php

$sunucu = "localhost";
$sifre = "159705Ka";
$veritabani = "aeco_cv19";
$kullanici = "aeco_kayaunal";

$baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);

$csv = array();
$lines = file('https://raw.githubusercontent.com/ozanerturk/covid19-turkey-api/master/dataset/timeline.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
    
    if($key > 0){
    $date      = $csv[$key][0];
    $totalTest = $csv[$key][1];
    $totalCases = $csv[$key][2];
    $totalDeaths = $csv[$key][3];
    $totalIntensiveCare = $csv[$key][4];
    $totalIntubated = $csv[$key][5];
    $totalRecovered = $csv[$key][6];
    $tests = $csv[$key][7];
    $cases = $csv[$key][8];
    $deaths = $csv[$key][9];
    $recovered = $csv[$key][10];
    
    $dates = strtotime($date);
    
    if ($dates === FALSE || TRUE) {
      $dates = strtotime(str_replace('/', '-', $date));
    }
    
    $permaDate = date('Y-m-d', $dates);
    
    $query = "INSERT INTO data(date, totalTest, totalCases, totalDeaths, totalIntensiveCare, totalIntubated, totalRecovered, tests, cases, deaths, recovered)
    VALUES ('$permaDate', '$totalTest', '$totalCases', '$totalDeaths', '$totalIntensiveCare', '$totalIntubated', '$totalRecovered', '$tests', '$cases', '$deaths', '$recovered')";
    
    $result = mysqli_query($baglan, $query); 
  }
}

$jsonQuery = "SELECT * FROM data ORDER BY id DESC";
$response = mysqli_query($baglan, $jsonQuery);

$arr = [];
$count = 1;

$meta=[ "page"=> 1,
    "pages"=> 10,
    "perpage"=> 10,
    "total"=> 15,
    "sort"=> "asc",
    "provider && owner" => "Sağlık Bakanlığı",
    "implements" => "Kaya Unal",
    "field"=> "Count"];
    
    while ($row = mysqli_fetch_array($response)) {
        
        $dates = strtotime($row["date"]);
    
        $tempDate = date('d/m/Y', $dates);
        
    $arr[] = array(
        'Count' => $count++,
        'cases' => number_format($row["cases"],  0, ',', '.'),
        'totalCases' => number_format($row["totalCases"],  0, ',', '.'),
        'totalDeaths' => number_format($row["totalDeaths"], 0, ',', '.'),
        'recovered' => number_format($row["recovered"], 0, ',', '.'),
        'totalRecovered'=> number_format($row["totalRecovered"], 0, ',', '.'),
        'totalIntubated'=> number_format($row["totalIntubated"], 0, ',', '.'),
        'totalIntensiveCare'=> number_format($row["totalIntensiveCare"], 0, ',', '.'),
        'tests'=> number_format($row["tests"], 0, ',', '.'),
        'totalTests'=> number_format($row["totaltest"], 0, ',', '.'),
        'deaths'=> number_format($row["deaths"], 0, ',', '.'),
        'date'=> $tempDate ,
    );
    
    }
    
    $json = json_encode(array('meta'=>$meta,'data' => $arr));
    print_r($json);
    