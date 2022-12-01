# Martin Web Templates

Why PHP?
--------

It is a way to keep the code clean. Every page is going to have the same footer and header. HTML doesn't have an easy way to include HTML from another file. PHP does. In order to keep constiency, I used some PHP native include functions to bring the page head, header, and footer into every page. 

Does it need to stay PHP?
-------------------------

Nope. You can change the extension on the file from php to html and the files will render in a browser like normal. However, the php include is not work and render as text. To fix this, copy the contents of the _FILE.php to the location of the include statment.

Here is the code to look for that will need to be replaced:
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
Forgings: http://martin.dev2.barn3s.com/forgings.php \
Gear Interchange: http://martin.dev2.barn3s.com/gear-interchange.php \
Home: http://martin.dev2.barn3s.com/ \
Locations: http://martin.dev2.barn3s.com/locations.php \
Power Transmission Gears: http://martin.dev2.barn3s.com/power-transmission-gears.php \
Power Transmission: http://martin.dev2.barn3s.com/power-transmission.php \
Product Detail: http://martin.dev2.barn3s.com/product-detail.php \
Product Search: http://martin.dev2.barn3s.com/product-search.php \
Request A Quote - Gears: http://martin.dev2.barn3s.com/request-quote-gears.php \
Request A Quote: http://martin.dev2.barn3s.com/request-quote.php \
Training: http://martin.dev2.barn3s.com/training.php \
Literature & Media : http://martin.dev2.barn3s.com/literature-media.php 

### New as of 10/24

Resources: http://martin.dev2.barn3s.com/resources.php \
Account Maintenance : http://martin.dev2.barn3s.com/account-maintenance.php \
New Account Maintenance : http://martin.dev2.barn3s.com/account-maintenance-new.php \
Order Status : http://martin.dev2.barn3s.com/order-status.php \
Check Stock : http://martin.dev2.barn3s.com/check-stock.php

### New as of 11/28

Styles.css

### Changes as of 11/30

/assets/css/styles.css \
/assets/img/request-quote-button.svg \
/assets/img/shaftless-screw.jpg \
Shaftless Screw Conveyors: http://martin.dev2.barn3s.com/shaftless-screw-conveyors.php

### Changes as of 12/1

/assets/img/heroes/mining.jpg \
/assets/img/icons/hand.svg \
/assets/img/icons/laptop.svg \
/assets/css/styles.css \
Mining: http://martin.dev2.barn3s.com/mining.php \