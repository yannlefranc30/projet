<?php
//class pas de  tuto youtube et personaliser
class yann
{

    //le constructeur permet d'appeller les methodes
    function __construct()
    {

        print "ok_";
    }
}

//principe de l'heritage.
class back extends yann
{

    function __construct()
    {

        //operateur de résolutions de portée
        parent::__construct();

        print "je veux bien";
    }
}

//declaration d'un nouvel objet
$obj = new back();
