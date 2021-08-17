<?php
function camelcase($input)
{
$output = array();
$end = 0;
for($i = 0;$i<count($input);$i++)
{
    for($j =0; $j<strlen($input[$i]);$j++)
    {
        if ($input[$i][$j]=="_")
             $end = $j;
    }
    $first = substr($input[$i],0,$end);
    $second = ucwords(substr($input[$i],$end+1,strlen($input[$i])));

      $output[$i]=  $first.$second;
}
print_r($output);
}
$input = ["snake_case", "camel_case"];
camelcase($input);
