
<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
    // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
                        // validate confirmation
        else if (($_POST["password"]) != ($_POST["confirmation"]))
        {
            apologize('Passwords do not match!');
            //return false;
        }
        else
        $result = query("INSERT INTO users (User_name, Password, firstname, location, sex, E_Mail, age) VALUES(?, ?, ?, ?, ?, ?, ?)", 
                        $_POST["username"],$_POST["password"], $_POST["name"],$_POST["location"],$_POST["sex"],$_POST["email"],$_POST["age"]);
            if ($result === false)
            {
                apologize('Username taken!');
            }
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        redirect("index.php");

    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
 
