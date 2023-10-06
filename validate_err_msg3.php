<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr="name is a required field";
        echo$nameErr;
    }
    else
    {
        $name=test_input($_POST["name"]);
        echo $name."<br/>";
    }
    
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["email"]))
    {
    $emailErr="email is a requrired field";
    }
    else
    {
        $email=test_input($_POST["email"]);
        echo $email."<br/>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["website"]))
    {
    $website="website is a requrired field";
    }
    else
    {
        $website=test_input($_POST["website"]);
        echo $website."<br/>;"
    }
}
f($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["comment"]))
    {
    $website="comment is a requrired field";
    }
    else
    {
        $commennt=test_input($_POST["comment"]);
        echo $commennt."<br/>;"
    }
}
f($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["gender"]))
    {
    $website="gender is a requrired field";
    }
    else
    {
        $gender=test_input($_POST["gender"]);
        echo $gender."<br/>;"
    }
}
function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>