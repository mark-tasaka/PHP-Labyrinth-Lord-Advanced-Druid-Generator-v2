<?php

/*Cleric */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(3, 6);
        $levelHP += $conMod;

        if($levelHP < 3)
        {
            $levelHP = 3;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;

}

//druid d8
function getAdvancedHitPoints($level, $conMod)
{
    $hitPoints = 0;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(4, 8);
        $levelHP += $conMod;

        if($levelHP < 4)
        {
            $levelHP = 4;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;

}


function saveBreathAttack($level)
{
    if($level <= 4)
    {
        return 16;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 14;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 12;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 8;
    }
    else
    {
        return 6;
    }

}


function savePoisonDeath($level)
{
    if($level <= 4)
    {
        return 11;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 9;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 7;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 3;
    }
    else
    {
        return 2;
    }
}


function savePetrify($level)
{
    if($level <= 4)
    {
        return 14;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 10;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 8;
    }
    else
    {
        return 6;
    }

}


function saveWands($level)
{
    if($level <= 4)
    {
        return 12;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 10;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 8;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 4;
    }
    else
    {
        return 4;
    }

}


function saveSpells($level)
{
    if($level <= 4)
    {
        return 15;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 9;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 6;
    }
    else
    {
        return 5;
    }

}

//druid
function primeReq($wisdom, $charisma)
{
    if($wisdom == 12)
    {
        return "";
    }
    else if( ($wisdom >= 13 && $wisdom <=15) && ($charisma >= 13) )
    {
        return "+5% Experience Point Adjustment (Prime Requisite)<br/>";
    }
    else if( ($wisdom >= 16) && ($charisma >= 13 && $charisma <=15) )
    {
        return "+5% Experience Point Adjustment (Prime Requisite)<br/>";
    }
    else if( ($wisdom >= 16 && $wisdom <=18) && ($charisma >= 16 && $charisma <=18) )
    {
        return "+10% Experience Point Adjustment (Prime Requisite)<br/>";
    }
    else
    {
        return "";
    }
    
}

function secondAttack($level)
{
    if($level >= 15 && $level <= 18)
    {
        return "Fighter has 2 attacks per round.";
    }
    else if($level > 18)
    {
        return "Fighter has 3 attacks per round.";
    }
    else
    {
        return "";
    }

}


function strengthModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 to hit, damage & forcing doors";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 to hit, damage & forcing doors";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 to hit, damage & forcing doors";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 to hit, damage & forcing doors";
        }
    else if($abilityScore === 19)
        {
            $desc = "+3 to hit (+4 damage), damage & forcing doors";
        }
    
    return $desc;
}


function dexterityModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore === 18)
        {
            $desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }   
    else if($abilityScore === 19)
        {
            $desc = "-4 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return $desc;
}

function constitutionModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Hit Points per Hit Die; -2 Poison Save adj";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Hit Points per Hit Die; -1 Poison Save adj";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Hit Points per Hit Die";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Hit Points per Hit Die";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Hit Points per Hit Die";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Hit Points per Hit Die";
        }   
    else if($abilityScore === 19)
        {
            $desc = "+4 Hit Points per Hit Die; +1 Poison Save adj";
        }
    
    return $desc;
}


function intelligenceModifierDescription($abilityScore)
{
    $desc = "Able to read and write";
    
    if($abilityScore === 3)
        {
            $desc = "Unable to read or write; broken speech";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "Unable to read or write";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "Partial ability to write";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Languages; Able to read and write";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Languages; Able to read and write";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Languages; Able to read and write";
        }
    
    return $desc;
}


function wisdomModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Saving Throw against all magical effects";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Saving Throw against all magical effects";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Saving Throw against all magical effects";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Saving Throw against all magical effects";
        }   
    else if($abilityScore === 19)
    {
        $desc = "+4 Saving Throw against all magical effects";
    }
    
    return $desc;
}



function charismaModifierDescription($abilityScore)
{
    $desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if($abilityScore === 3)
        {
            $desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if($abilityScore === 18)
        {
            $desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return $desc;
}



function getThaco($level, $abiltyMod)
{
    if($level == 1 || $level == 2 || $level == 3)
    {
        $thaco = 19;
    }
    else if($level == 4 || $level == 5)    
    {
        $thaco = 18;
    }
    else if($level == 6 || $level == 7 || $level == 8)    
    {
        $thaco = 17;
    }
    else if($level == 9 || $level == 10)    
    {
        $thaco = 16;
    }
    else if($level == 11)    
    {
        $thaco = 15;
    }
    else if($level == 12)    
    {
        $thaco = 14;
    }
    else if($level == 13 || $level == 14)    
    {
        $thaco = 13;
    }
    else if($level == 15 || $level == 16)    
    {
        $thaco = 12;
    }
    else if($level == 17 || $level == 18)    
    {
        $thaco = 11;
    }
    else
    {
        $thaco = 10;
    }

    $thaco -= $abiltyMod;

    return $thaco;
}

function getThacoCheck($score)
{
    if($score <= 2)
    {
        $score = 2;
    }

    return $score;
}

//Cleric, Druid, Monk
function startingAge($species)
{
    $age = 0;

    if($species == "Human")
    {
        $age += 18;
        $dieRoll = rand(1, 6);
        $age += $dieRoll;
    }

    if($species == "Dwarf")
    {
        $age += 230;
        $dieRoll = rand(1, 20);
        $dieRoll2= rand(1, 20);
        $dieRoll3 = rand(1, 20);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Elf")
    {
        $age += 510;
        $dieRoll = rand(1, 8);
        $dieRoll2= rand(1, 8);
        $dieRoll3 = rand(1, 8);
        $dieRoll4 = rand(1, 8);
        $dieRoll5 = rand(1, 8);
        $dieRoll6 = rand(1, 8);
        $dieRoll7 = rand(1, 8);
        $dieRoll8 = rand(1, 8);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
        $age += $dieRoll5;
        $age += $dieRoll6;
        $age += $dieRoll7;
        $age += $dieRoll8;
    }

    if($species == "Gnome")
    {
        $age += 300;
        $dieRoll = rand(1, 10);
        $dieRoll2= rand(1, 10);
        $dieRoll3 = rand(1, 10);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Halfling")
    {
        $age += 20;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
    }

    if($species == "Half-Elf")
    {
        $age += 30;
        $dieRoll = rand(1, 4);
        $dieRoll2= rand(1, 4);
        $dieRoll3 = rand(1, 4);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Half-Orc")
    {
        $age += 20;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    return $age;

}

function druidMinWisdom($wisdom)
{
    if($wisdom <= 11)
    {
        $wisdom = 12;
    }

    return $wisdom;
}

function druidMinCharisma($charisma)
{
    if($charisma <= 14)
    {
        $charisma = 15;
    }

    return $charisma;
}


function druidSpecial($level)
{
    $message = "";
    
    if($level < 3)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/>";
    }
    else if($level == 3)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/> 1 additional language from the following list: centaur, dragon (green), dryad, dwarven, elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe or poisoned.<br/>";
    }
    else if($level >= 4 && $level < 7)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/>" . ($level - 2) . " additional languages from the following list: centaur, dragon (green), dryad, dwarven, elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe or poisoned.<br/>";
    }
    else if($level >= 7)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/>" . ($level - 2) . " additional languages from the following list: centaur, dragon (green), dryad, dwarven, elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe or poisoned.<br/>Can assume animal shapes up to 3 times per day.<br/>";
    }
    
    return $message;
}


?>