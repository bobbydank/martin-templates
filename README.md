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
Simply copy of the contents of each file to the where the include statement is located.

Links for viewing
-----------------

Blog: http://martin.dev2.barn3s.com/blog.php \
Careers: http://martin.dev2.barn3s.com/careers.php \
Catalogs: http://martin.dev2.barn3s.com/catalogs.php \
Company: http://martin.dev2.barn3s.com/company.php \
Contact: http://martin.dev2.barn3s.com/contact.php \
Custom Products: http://martin.dev2.barn3s.com/custom-products.php \
Forgings: http://martin.dev2.barn3s.com/forging.php \
Gear Interchange: http://martin.dev2.barn3s.com/gear-interchange.php \
Home: http://martin.dev2.barn3s.com/ \
Locations: http://martin.dev2.barn3s.com/locations.php \
Power Transmission Gears: http://martin.dev2.barn3s.com/power-transmission-gears.php \
Power Transmission: http://martin.dev2.barn3s.com/power-transmission.php \
Product Detail: http://martin.dev2.barn3s.com/product-detail.php \
Product Search: http://martin.dev2.barn3s.com/product-search.php \
Request A Quote - Gears: http://martin.dev2.barn3s.com/request-quote-gears.php \
Request A Quote: http://martin.dev2.barn3s.com/request-quote.php \
Resources: http://martin.dev2.barn3s.com/resources.php \
Training: http://martin.dev2.barn3s.com/training.php 