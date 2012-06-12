<?php

/**
 * Raw
 * @description: showing how you can put raw content, so it's not parsed when being rendered
 */
/*******************************************************************************/

include ("../../ThickMustache.php");

$ThickMustache = new ThickMustache(__DIR__."/templates");

$ThickMustache->addTemplate("Body","body.tpl");

// Key/value assigment
$ThickMustache->assign("Name","Mardix");
            
//Array assigment
$ThickMustache->assign(array(
    "Location"=>"Charlotte, NC",
    "Hobbies"=>"Music,Web development,Ethiopian girls" 
));


// Assign with lambdas
$ThickMustache->assign("Origin",function($text){
    return
        "{$text}, an awesome place";
});

$render = $ThickMustache->render("Body");

// To print on the screen
print($render);


/*******************************************************************************/

/*******************************************************************************/

// Save the rendered content

$f = pathinfo(__FILE__,PATHINFO_FILENAME);

file_put_contents(__DIR__."/{$f}.txt",$render);
