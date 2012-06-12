<?php

/**
 * nested-include
 * @description: Showing how you can include a template from another included template
 */
/*******************************************************************************/

include ("../../ThickMustache.php");

$ThickMustache = new ThickMustache(__DIR__."/templates");

$ThickMustache->addTemplate("Body","body.tpl");

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
