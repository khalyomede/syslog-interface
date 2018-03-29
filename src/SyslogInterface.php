<?php
	/*
	* Syslog interface
	*
	* Copyright © 2018 Khalyomede
	*
	* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	*
	* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	*
	* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	*/

	namespace Khalyomede;

	use DateTime;

	/**
	 * @see https://github.com/php-fig/log/blob/master/Psr/Log/LoggerInterface.php
	 * @see https://github.com/php-fig/log/blob/master/Psr/Log/LogLevel.php
	 */
	interface SyslogInterface {
		public function emergency(string $message, array $context = []): SyslogInterface;
		public function alert(string $message, array $context = []): SyslogInterface;
		public function critical(string $message, array $context = []): SyslogInterface;
		public function error(string $message, array $context = []): SyslogInterface;
		public function warning(string $message, array $context = []): SyslogInterface;
		public function notice(string $message, array $context = []): SyslogInterface;
		public function info(string $message, array $context = []): SyslogInterface;
		public function debug(string $message, array $context = []): SyslogInterface;
		public function log(string $level, string $message, array $context = []): SyslogInterface;

		public function host(string $host): SyslogInterface;
		public function port(int $port): SyslogInterface;
		public function facility(int $category): SyslogInterface;
		public function date(DateTime $date): SyslogInterface;
		public function device(string $device): SyslogInterface;
		public function processus(string $processus): SyslogInterface;
		public function identifier(string $identifier): SyslogInterface;
	}
?>