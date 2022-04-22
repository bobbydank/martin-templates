# Martin Web Templates

Why PHP?
--------

Simple put, it is a way to keep the code clean. Every page is going to have the same footer and header. HTML doesn't have an easy way to include HTML from another file. PHP however does. In order to keep constiency, I used some php native include functions to bring the page head, header, and footer into every page. 

Does it need to stay PHP?
-------------------------

Nope. You can change the extension on the file from php to html and the files will render in a browser like normal. You will need to copy the contents of the _FILE.php to the location of the relevant place. Here is the code to look for that will need to be replaced:
```php
<?php include '_head.php'; ?>
<?php include '_header.php'; ?>
<?php include '_footer.php'; ?>
```
 code.