#{{ThickMustache}}#

###Description###

ThickMustache extends [Mustache](http://mustache.github.php), 


##Download
ThickMustache requires [Mustache.php](https://github.com/bobthecow/mustache.php). However, this repo uses Submodule to link to Mustache.php, but GitHub doesn't support submodules when downloading from the Download Link on the page. 

The best way to get ThickMustache is to Clone it by using the method below. Or you can still download ThickMustache, by clicking on the Download Link, but you will have to download [Mustache.php](https://github.com/bobthecow/mustache.php) also.



##Cloning 
ThickMustache uses submodules for [Mustache.php](https://github.com/bobthecow/mustache.php) . After you clone ThickMustache, you will need to to init and update the submodules.

Use the code below to clone ThickMustache and get the Mustache Submodule:

	git clone --recursive git://github.com/mardix/ThickMustache.git

Or

	git clone git://github.com/mardix/ThickMustache.git
	git submodules update --init



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

	{{%include !/my/other/path/file.html}} 


	include a file reference name, which was loaded with ThickMustache::addTemplate($name,$src)

 	{{%include @TemplateName}} : 


**Raw**: Mustache tags between {{%raw}}{{/raw}} will not be parsed. 


         {{%raw}}
               {{name}} {{value}}
         {{/raw}}

