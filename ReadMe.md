#{{ThickMustache}}#

##About ThickMustache

ThickMustache is an extension of [Mustache.php](https://github.com/bobthecow/mustache.php)

ThickMustache extends Mustache by adding the following:

 * work with template directory
 * include other template files
 * assign variables
 * defined raw blocks, which will not be converted upon render
 * Can be used in any framework
 * Requires PHP 5.3 



###Examples
Please go the examples directory  for some examples


##About Mustache
Mustache is a logic-less template engine
[Mustache](http://mustache.github.com/)

Mustache can be used for HTML, config files, source code - anything. It works by expanding tags in a template using values provided in a hash or object.

We call it "logic-less" because there are no if statements, else clauses, or for loops. Instead there are only tags. Some tags are replaced with a value, some nothing, and others a series of values. 

A typical Mustache template:
		
		Hello {{name}}
		You have just won ${{value}}!
		{{#in_ca}}
		Well, ${{taxed_value}}, after taxes.
		{{/in_ca}}

Given the following hash:

		{
		  "name": "Chris",
		  "value": 10000,
		  "taxed_value": 10000 - (10000 * 0.4),
		  "in_ca": true
		}
Will produce the following:
		
		Hello Chris
		You have just won $10000!
		Well, $6000.0, after taxes.
		

##Download ThickMustache
ThickMustache requires [Mustache.php](https://github.com/bobthecow/mustache.php). However, this repo uses Submodule to link to Mustache.php, but GitHub doesn't support submodules when downloading from the Download Link on the page. 

The best way to get ThickMustache is to Clone it by using the method below. Or you can still download ThickMustache, by clicking on the Download Link, but you will have to download [Mustache.php](https://github.com/bobthecow/mustache.php) also.
plains the different types of Mustache tags.

##Cloning ThickMustache
ThickMustache uses submodules for [Mustache.php](https://github.com/bobthecow/mustache.php) . After you clone ThickMustache, you will need to to init and update the submodules.

Use the code below to clone ThickMustache and get the Mustache Submodule:

	git clone --recursive git://github.com/mardix/ThickMustache.git

Or

	git clone git://github.com/mardix/ThickMustache.git
	git submodule update --init


###ThickMustache is OOP

ThickMustache allows you to assign variables, add templates and define raws. ThickMustache can be added in your framework etc... and it's OOP

**example**

	$TM = new ThickMustache("My/Dir/Template");

	$TM->addTemplate("MyTemplate","template.tpl");

	$TM->assign("Key","Value")
	   ->assign(array(
			"City"=>"Charlotte",
			"State"=>"NC"
		))
	   ->assign("Origin",function($text){
		   return
					"{$text} is an awesome place";
		}
		));

**Render**

		print $TM->render("MyTemplate");



###ThickMustache Methods:

* **__construct($templateDir)**

* **setDir($dir)**               : Set the working directort

* **assign($key,$val)**               : Assign variables

* **unassign($key)**             : To unassign a var

* **addTemplate($name,$src)**          : Add a template file

* **addTemplateString($name,$content)**    : Add a template string

* **render($name)**               : render the template

* **reparse()**              : To reparse the template. By default template can be reparsed once. 
 

### New Markups

ThickMustache keeps everything the same

**Include**: to include other template files in the working template

	include the file from the working dir

```

	{{%include filename.html}}

```

	include file outside of the working dir, pay attention at !

```

	{{%include !/my/other/path/file.html}} 

```

	include a file reference name, which was loaded with ThickMustache::addTemplate($name,$src)

```

 	{{%include @TemplateName}} : 

```

**Raw**: Mustache tags between {{%raw}}{{/raw}} will not be parsed. 


         {{%raw}}
               {{name}} {{value}}
         {{/raw}}



