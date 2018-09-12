<?php
require_once 'vendor/autoload.php';

      use Monolog\Logger;
      use Inpsyde\LogzIoMonolog\Handler\LogzIoHandler;

      // create a log channel
      $log = new Logger('name');
      $log->pushHandler(new LogzIoHandler('UfKqCazQjUYnBNcJqSryIRyDIjExjwIZ'));

      // add records to the log
      $log->warning('From-monotest');
      $log->error('from_monotest');
