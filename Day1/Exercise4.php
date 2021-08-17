<?php
function loop_over_json($input)
{
    $m = json_decode($input, true);
    $Name = array();
    $Age = array();
    $City = array();
    foreach ($m["players"] as $player) {
        array_push($Name, $player["name"]);
        array_push($Age, $player["age"]);
        array_push($City, $player["address"]["city"]);
        print_r($Name);
        print_r($Age);
        print_r($City);
        $unique_players = array_unique($Name);
        print_r($unique_players);
        $maximum_age = max($Age);
        $person_with_max_age = array();
        foreach ($Age as $Key => $value) {
            if ($value == $maximum_age)
                array_push($person_with_max_age, $Name[$Key]);


        }
        print_r($person_with_max_age);
    }
}
$input = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
loop_over_json($input);