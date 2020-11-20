<?php
class User{
public $Name;
public $Username;
public $Email;

function construct($Name,$Username,$Email){
    $this->name = $Name;
    $this->username = $Username;
    $this->email = $Email;
}

function addFriend(){
    echo $this->Name, "Added a Friend.";
}
function postStatus(){
    echo $this->Name, "Posted a Status.";
}
}

$me = new User("Bryle  Castillon", "Bwylle", "brylecourdey@gmail.com");
$me->addFriend();
echo  "<br>";
$me->postStatus();
?>
// index.php
