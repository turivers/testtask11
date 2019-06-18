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

Input Commands
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
```

Output
```bash
true
```

Show users skills
```bash
$ php bin/console user:developer
$ php bin/console user:designer
$ php bin/console user:manager
$ php bin/console user:tester
```

Check users skills
```bash
$ php bin/console can:designer writeCode | testCode | commWithPM | createTasks
$ php bin/console can:developer
$ php bin/console can:manager
$ php bin/console can:tester
```
