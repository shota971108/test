<?php
$a=3;
$b=7;
echo $a+$b;


$array_month=[
    "January"=>"1月",
    "February"=>"2月",
    "march"=>"3月",
    "April"=>"4月",
    "May"=>"5月",
    "June"=>"6月",
    "July"=>"7月",
    "August"=>"8月",
    "September"=>"9月",
    "October"=>"10月",
    "Nobember"=>"11月",
    "December"=>"12月",
];
echo $array_month["August"];

$hello="Hello,";
$name="しょーた";
$world="s World";
echo $hello.$name.$world;

$tech_boost="tech";
$tech_boost.="boost";
echo $tech_boost;

$calender_2018=[
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calender_2018["December"];
