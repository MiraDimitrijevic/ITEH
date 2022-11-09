<?php
class Clan{
private $clanID;
private $username;
private $password;
private $imePrezime;
private $datumRođenja;
private $pol;
function __construct($cID, $un, $pass, $imePrez, $datRođ, $p) {
this->$clanID=$cID;
this->$username=$un;
this->$password=$pass;
this->$imePrezime=$imePrez;
this->$datumRođenja=$datRođ;
this->$pol=$p;
}
    
}



?>