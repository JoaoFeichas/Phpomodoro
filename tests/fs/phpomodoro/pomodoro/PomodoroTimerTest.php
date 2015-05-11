<?php
/**
 * Created by PhpStorm.
 * User: joaofeichas
 * Date: 29/04/15
 * Time: 10:29
 */

namespace fs\phpodomo\pomodoro;

use PHPUnit_Framework_TestCase as PHPUnit;

require "../../../../vendor/autoload.php";

class PomodoroTimerTest extends PHPUnit
{
	public function testPomodoroTimerCounter()
	{
		$pomodoroTimer = new PomodoroTimer();

		$this->assertEquals(25, $pomodoroTimer->getPomodoros(), null, 0.00001);
	}
}
