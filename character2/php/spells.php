<?php

function spellsLevel1($level)
{
    if($level == 1)
    {
        return 1;
    }
    else if($level >= 2 && $level <= 3)
    {
        return 2;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 3;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 4;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 5;
    }
    else if($level >= 13 && $level <= 14)
    {
        return 6;
    }
    else if($level >= 15 && $level <= 16)
    {
        return 7;
    }
    else if($level >= 17 && $level <= 18)
    {
        return 8;
    }
    else
    {
        return 9;
    }

}


function spellsLevel2($level)
{
    if($level == 3)
    {
        return 1;
    }
    else if($level >= 4 && $level <= 5)
    {
        return 2;
    }
    else if($level >= 6 && $level <= 8)
    {
        return 3;
    }
    else if($level >= 9 && $level <= 11)
    {
        return 4;
    }
    else if($level >= 12 && $level <= 14)
    {
        return 5;
    }
    else if($level >= 15 && $level <= 16)
    {
        return 6;
    }
    else if($level >= 17 && $level <= 18)
    {
        return 7;
    }
    else if($level >= 19 && $level <= 20)
    {
        return 8;
    }
    else
    {
        return 0;
    }

}


function spellsLevel3($level)
{
    if($level == 5)
    {
        return 1;
    }
    else if($level >= 6 && $level <= 7)
    {
        return 2;
    }
    else if($level >= 8 && $level <= 10)
    {
        return 3;
    }
    else if($level >= 11 && $level <= 13)
    {
        return 4;
    }
    else if($level >= 14 && $level <= 16)
    {
        return 5;
    }
    else if($level >= 17 && $level <= 18)
    {
        return 6;
    }
    else if($level >= 19 && $level <= 20)
    {
        return 7;
    }
    else
    {
        return 0;
    }

}



function spellsLevel4($level)
{
    if($level == 7)
    {
        return 1;
    }
    else if($level >= 8 && $level <= 9)
    {
        return 2;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 3;
    }
    else if($level >= 13 && $level <= 15)
    {
        return 4;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 5;
    }
    else if($level >= 19 && $level <= 20)
    {
        return 6;
    }
    else
    {
        return 0;
    }

}


function spellsLevel5($level)
{
    if($level == 9)
    {
        return 1;
    }
    else if($level >= 10 && $level <= 11)
    {
        return 2;
    }
    else if($level >= 12 && $level <= 14)
    {
        return 3;
    }
    else if($level >= 15 && $level <= 17)
    {
        return 4;
    }
    else if($level >= 18 && $level <= 20)
    {
        return 5;
    }
    else
    {
        return 0;
    }

}

function spellsLevel6($level)
{
    if($level == 11)
    {
        return 1;
    }
    else if($level >= 12 && $level <= 13)
    {
        return 2;
    }
    else if($level >= 14 && $level <= 16)
    {
        return 3;
    }
    else if($level >= 17 && $level <= 19)
    {
        return 4;
    }
    else if($level == 20)
    {
        return 5;
    }
    else
    {
        return 0;
    }

}


function spellsLevel7($level)
{
    if($level == 15)
    {
        return 1;
    }
    else if($level >= 16 && $level <= 17)
    {
        return 2;
    }
    else if($level >= 18 && $level <= 20)
    {
        return 3;
    }
    else
    {
        return 0;
    }

}


function addSpellsLevel1($wisdom)
{
    if($wisdom < 13)
    {
        return 0;
    }
    else if($wisdom == 13)
    {
        return 1;
    }
    else
    {
        return 2;
    }

}


function addSpellsLevel2($level, $wisdom)
{
    if($level > 2 && $wisdom > 14)
    {
        if($wisdom == 14)
        {
            return 1;
        }
        else
        {
            return 2;
        }

    }
    else
    {
        return 0;
    }
    
}


function addSpellsLevel3($level, $wisdom)
{
    if($level > 4 && $wisdom > 16)
    {
        return 1;
    }
    else
    {
        return 0;
    }
    
}


function addSpellsLevel4($level, $wisdom)
{
    if($level > 6 && $wisdom > 17)
    {
        return 1;
    }
    else
    {
        return 0;
    }
    
}



?>