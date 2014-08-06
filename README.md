Simple PHP Logger

To use this class, first include Log.php into your project:
```php
require_once 'Log.php';
```

Create a new instance of the class:
```php
// default log file will be: logs/default_log.txt
$log = new Log();

// specify your own log file, and make sure it is writable by the http server
$log = new Log('logs/myproject.txt');
```
Log a message
```php
// log message (default)
$log->write('could not process request');

// log message (custom user log type)
$log->write('could not connect to database', 'database');

// log message (custom user log type)
$log->write('respond too long', 'application');
```