<?php
echo "Hello world";
$username = "komsiiski";
echo $username;
echo "My name is $username <br>";
$age = 22;
echo $age;
$istrue = true;
echo $istrue;
$usernameArray = ["kaloyan", "komsiiski"];
echo $usernameArray[0];
echo $usernameArray[1];
$usernameAsocArray = ["username"=>"kaloqn", "age"=>22];
echo $usernameAsocArray["username"];
echo $usernameAsocArray["age"];
for($i=0; $i<2; $i++)
{
    echo $usernameArray[$i];
}
foreach($usernameAsocArray as $key=>$item)
{
    echo $key." ".$item."<br>";
}