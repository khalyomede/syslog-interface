# Syslog interface

Standard proposal for Syslog protocol across any classes.

## Summary

- [Problem solved with this standard](#problem-solved-with-this-standard)
- [Examples of uses](#examples-of-uses)
- [Methods definitions](#methods-definitions)
- [MIT Licence](#mit-licence)

## Problem solved with this standard

This interface aim to bring a common strategy for various implementer of syslog solutions. It is based on [PSR-3 Log standard](https://www.php-fig.org/psr/psr-3/) and provide a overlay to it by following the [Syslog Protocol RFC 5424](https://tools.ietf.org/html/rfc5424).

## Examples of uses

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
public function alert(string $message, array $context = []);
```

### Critical

Log a message with a critical severity level.

```php
public function critical(string $message, array $context = []);
```
## Date

Force the date for the next log.

```php
public function date(DateTime $date);
```

## debug

Log a message with a debug severity log.

```php
public function debug(string $message, array $context = []);
```

## device

Set the originated device (mobile device, webcam, web server, ...) that generated the log.

```php
public function device(string $device);
```

## emergency

Log a message with an emergency severity level.

```php

```

## error



```php

```

## facility



```php

```

## host



```php

```

## identifier



```php

```

## info



```php

```

## log



```php

```

## notice



```php

```

## port



```php

```

## processus



```php

```

## warning



```php

```


## MIT Licence

Syslog interface

Copyright © 2018 Khalyomede

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the oftware, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN CTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.