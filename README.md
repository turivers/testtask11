Symfony Test Task
=================

Requirements
------------

  * PHP 7.1.3 or higher;

Installation
------------
```bash
$ git clone https://github.com/turivers/testtask11.git
$ composer install
```

Usage
-----

Examples:

Input
```bash
$ php bin/console user:developer
```

Output
```bash
- code writing
- code testing
- communication with manager
```

Input Commands
```bash
$ php bin/console can:developer writeCode
true
```

Output
```bash
true
```

show users skills
user
    user:designer
    user:developer
    user:manager
    user:tester

Check users skills
can
    can:designer writeCode | testCode | commWithPM | createTasks
    can:developer
    can:manager
    can:tester
