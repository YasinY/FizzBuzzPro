# FizzBuzz
## This project is about displaying different outputs for numeric values - every product of 3 should output "Fizz", every product of 5 "Buzz", and the product of both "FizzBuzz" (3 + 5).
It uses PSR-4 Autoloading for simple namespaces, in case further development is being done on this.
It also is fully unit tested.


To run this project, please ensure you have PHP 7.4+ and composer installed.

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
![image](https://user-images.githubusercontent.com/10624021/116837770-0cb81200-abcc-11eb-8d9a-0eb8dce85125.png)


Congratulations, you've successfuly ran the program! :)


To run Tests, enter the following command *from the base of this directory!*
__Please make sure you've installed composer as mentioned above!__  
Windows: ```"./vendor/bin/phpunit" test --coverage-text```  
MAC: ```./vendor/bin/phpunit test --coverage-text```

Expected output:  
![image](https://user-images.githubusercontent.com/10624021/116837891-7fc18880-abcc-11eb-8bb0-643c9f9f9d28.png)


Exit codes:  
1 - Not permitted Modulo by Zero
