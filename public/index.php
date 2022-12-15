<?php

    require "../app/core/init.php"; 
    

    //CAPTURER LE LIEN
    Function getURL()
    {
        if(isset($_GET['url']))
        {
           //CREATE A VARIABLE
            $URL = $_GET['url'];            
            return $URL;             

        }else{

            $URL = "home";
            return $URL; 
        }
    }

   
    //SPLIT OU SEPARER LE LIEN
    function SPLITURL()
    {
        $SPLIT_URL =  getURL(); 

        //SLIPT OU SEPARER L URL
        $SPLIT_URL = explode("/", htmlspecialchars(strtolower($SPLIT_URL))); 

        //CREATE A FILENAME
        $FILENAME_ADMIN = "../app/controller/dashboard/$SPLIT_URL[0]" . ".php"; 
        $FILENAME = "../app/controller/$SPLIT_URL[0]" . ".php";

        //VERIFIE SI LA PAGE EXIST
        if(file_exists($FILENAME))
        {
            require $FILENAME; 

        }else{

            $FILENAME = "../app/controller/404.php";
            require $FILENAME; 
        }
      
    }

    SPLITURL(); 
  


    




