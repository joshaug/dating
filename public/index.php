<?php

    // configuration
    require("../includes/config.php"); 

	$rows = query("SELECT firstname, location,  age, sex FROM users ");

$positions = [];
foreach ($rows as $row)
{

    
    {
        $positions[] = [

            "age" => $row["age"],
            "sex" => $row["sex"],
            "firstname" => $row["firstname"],

            "location" => $row["location"],


        ];
    }
}



    // render
    render("index_form.php", ["positions" => $positions, "title" => "index_form"]);

    


?>
