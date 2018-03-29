<?php

namespace test\Khalyomede;

use Khalyomede\SyslogLevel;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use InvalidArgumentException;

class SyslogLevelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SyslogLevel::class);
    }

    function it_should_prevent_finding_syslog_from_empty_string() {
    	$this->shouldThrow('InvalidArgumentException')->during('fromString', ['']);
    }

    function it_should_prevent_finding_a_non_existing_syslog() {
    	$this->shouldThrow('Khalyomede\SyslogNotFoundException')->during('fromString', ['foo']);
    }
}
