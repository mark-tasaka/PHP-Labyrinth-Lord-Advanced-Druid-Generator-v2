<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,065";
          break;

        case "2":
            $xpNext = "4,125";
        break;
        
        case "3":
            $xpNext = "7,751";
        break;
        
        case "4":
            $xpNext = "12,501";
        break;
        
        case "5":
            $xpNext = "20,001";
        break;
        
        case "6":
            $xpNext = "40,001";
        break;        

        case "7":
            $xpNext = "60,001";
        break;
                
        case "8":
            $xpNext = "90,001";
        break;
                
        case "9":
            $xpNext = "150,001";
        break;
                
        case "10":
            $xpNext = "200,001";
        break;
                
        case "11":
            $xpNext = "300,001";
        break;
                
        case "12":
            $xpNext = "750,001";
        break;
                
        case "13":
            $xpNext = "1,500,001";
        break;
                
        case "14":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>