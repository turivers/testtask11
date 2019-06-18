# testtask11

 can
  can:designer            designer check skill
  can:developer           developer check skill
  can:manager             manager check skill
  can:tester              tester check skill
 config
  config:dump-reference   Dumps the default configuration for an extension
 debug
  debug:autowiring        Lists classes/interfaces you can use for autowiring
  debug:config            Dumps the current configuration for an extension
  debug:container         Displays current services for an application
  debug:event-dispatcher  Displays configured listeners for an application
  debug:router            Displays current routes for an application
 lint
  lint:yaml               Lints a file and outputs encountered errors
 router
  router:match            Helps debug routes by simulating a path info match
 user
  user:designer           show designer skills
  user:developer          show developer skills
  user:manager            show manager skills
  user:tester             show tester skills


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
