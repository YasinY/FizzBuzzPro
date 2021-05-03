# FizzBuzz
## This project is about displaying different outputs for numeric values - every product of 3 should output "Fizz", every product of 5 "Buzz", and the product of both "FizzBuzz" (3 + 5).
It uses PSR-4 Autoloading for simple namespaces, in case further development is being done on this.
It also is fully unit tested.


To run this project, please ensure you have PHP 7.3+ and composer installed.

If that's not the case, please refer to the following Downloads (most commonly used OS):  
PHP:
- MacOS: https://www.php.net/manual/de/install.macosx.php
- Windows: https://www.php.net/manual/de/install.windows.php

Composer:
- MacOS: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
- Windows: https://getcomposer.org/doc/00-intro.md#installation-windows

Once you have successfully configured composer and PHP, simply clone this repository, navigate to it through the Terminal/Command Prompt and enter the following commands:
```
composer install --ignore-platform-reqs
```
Your Terminal/Command Prompt should look like this:  
![image](https://user-images.githubusercontent.com/10624021/115324944-12a10280-a18b-11eb-9a9c-e04cf8d18386.png)


Now that you have all necessary dependencies/autoload maps configured, execute the following command to run this project:
```
php index.php
```

Expected output when running php:  
![phpstorm64_JUkFaLL6Xj](https://user-images.githubusercontent.com/10624021/115323089-a7a1fc80-a187-11eb-9f47-430736b5548d.png)


Congratulations, you've successfuly ran the program! :)


To run Tests, enter the following command *from the base of this directory!*
__Please make sure you've installed composer as mentioned above!__  
Windows: ```"./vendor/bin/phpunit" tests```  
MAC: ```./vendor/bin/phpunit tests```

Expected output:  
![phpstorm64_vqiikqJBQT](https://user-images.githubusercontent.com/10624021/115323010-80e3c600-a187-11eb-8550-865e5535a170.png)


Exit codes:  
1 - Not permitted Modulo by Zero