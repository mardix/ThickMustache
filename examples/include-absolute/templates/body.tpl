
Page #1. include a file from another directory using the abolute path

Path: ../include-embeded/templates/page4.tpl

This is done by adding the bang "!" before the file path

ie: {{%raw}}{{%include !../include-embeded/templates/page4.tpl}} {{/raw}}


THE PAGE BELOW HAS BEEN INCLUDED VIA ABSOLUTE PATH

{{%include !../include-embeded/templates/page4.tpl}} 

