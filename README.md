# Syslog interface

![PHP from Packagist](https://img.shields.io/packagist/php-v/khalyomede/syslog-interface.svg)
![Packagist](https://img.shields.io/packagist/v/khalyomede/syslog-interface.svg)
![Packagist](https://img.shields.io/packagist/l/khalyomede/syslog-interface.svg)

Standard proposal for Syslog protocol across any classes.

```php
class MyLog implements SyslogInterface {
  // ...
}
```

```php
$log = new MyLog;

$log->warning('Request invalidated for user {userid}', ['userid' => 'John']): SyslogInterface;
```

## Summary

- [Problem solved with this standard](#problem-solved-with-this-standard)
- [Installation](#installation)
- [Methods definitions](#methods-definitions)
- [MIT Licence](#mit-licence)

## Problem solved with this standard

This interface aim to bring a common strategy for various implementer of syslog solutions. It is based on [PSR-3 Log standard](https://www.php-fig.org/psr/psr-3/) (but does not implement its interface because of the lack of support for type hinting in method prototypes) and provide a overlay to it by following the [Syslog Protocol RFC 5424](https://tools.ietf.org/html/rfc5424).

## Installation

In your project folder:

```bash
composer require khalyomede/syslog-interface:1.*
```

## Methods definitions

- [`alert`](#alert)
- [`critical`](#critical)
- [`date`](#date)
- [`debug`](#debug)
- [`device`](#device)
- [`emergency`](#emergency)
- [`error`](#error)
- [`facility`](#facility)
- [`host`](#host)
- [`identifier`](#identifier)
- [`info`](#info)
- [`log`](#log)
- [`notice`](#notice)
- [`port`](#port)
- [`processus`](#processus)
- [`warning`](#warning)

### Alert

Log a message with an alert severity level.

```php
public function alert(string $message, array $context = []): SyslogInterface;
```

### Critical

Log a message with a critical severity level.

```php
public function critical(string $message, array $context = []): SyslogInterface;
```
## Date

Force the date for the next log.

```php
public function date(DateTime $date): SyslogInterface;
```

## debug

Log a message with a debug severity log.

```php
public function debug(string $message, array $context = []): SyslogInterface;
```

## device

Set the originated device (mobile device, webcam, web server, ...) that generated the log.

```php
public function device(string $device): SyslogInterface;
```

## emergency

Log a message with an emergency severity level.

```php
public function emergency(string $message, array $context = []): SyslogInterface;
```

## error

Log a messae with an error severity level.

```php
public function error(string $message, array $context = []): SyslogInterface;
```

## facility

Represents the origin process. For a list of common facilities, follow [this link](https://tools.ietf.org/html/rfc5424#section-6.2.1).

```php
public function facility(int $category): SyslogInterface;
```

## host

Represents the machine that will receive the log. 

```php
public function host(string $host): SyslogInterface;
```

## identifier

An identifier (can be a string or an integer) that represents the serie of logs.

```php
public function identifier(string $identifier): SyslogInterface;
```

## info

Log a message with an info severity level.

```php
public function info(string $message, array $context = []): SyslogInterface;
```

## log

Log the message.

```php
public function log(string $level, string $message, array $context = []): SyslogInterface;
```

## notice

Log a message with a notice severity level.

```php
public function notice(string $message, array $context = []): SyslogInterface;
```

## port

Set the port to log through.

```php
public function port(int $port): SyslogInterface;
```

## processus

Set the originated machine, device, ... that is responsible for generating the log.

```php
public function processus(string $processus): SyslogInterface;
```

## warning

Log a message with a warning severity level.

```php
public function warning(string $message, array $context = []): SyslogInterface;
```

## MIT Licence

Syslog interface

Copyright © 2018 Khalyomede

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the oftware, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN CTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.