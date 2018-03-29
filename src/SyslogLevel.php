<?php
	namespace Khalyomede;

	use InvalidArgumentException;
	use ReflectionClass;
	use Khalyomede\SyslogNotFoundException;

	/**
	 * @see https://tools.ietf.org/html/rfc5424#section-6.2.1
	 */
	class SyslogLevel {
		const EMERGENCY = 0;
		const ALERT = 1;
		const CRITICAL = 2;
		const ERROR = 3;
		const WARNING = 4;
		const NOTICE = 5;
		const INFORMATIONAL = 6;
		const DEBUG = 7;

		/**
		 * @throws InvalidArgumentException
		 * @throws Khalyomede\SyslogNotFoundException
		 */
		public function fromString( string $severity ) {
			if( isset(trim($severity)[0]) === false ) {
				throw new InvalidArgumentException('SyslogLevel::fromString expects parameter 1 to be a non empty string');
			}

			$candidate = strtoupper($severity);

			if( defined(sprintf('static::%s', $candidate)) === false ) {
				$possibles_levels = implode(', ', array_keys((new ReflectionClass($this))->getConstants()));

				throw new SyslogNotFoundException(sprintf('SyslogLevel::fromString expects parameter 1 to be an existing syslog severity level (possibles levels: %s', $possibles_levels));
			}

			return constant(sprintf('static::%s', $candidate));
		}
	}
?>