<?php
/**
 * Created by PhpStorm.
 * User: joaofeichas
 * Date: 29/04/15
 * Time: 15:21
 */

namespace fs\phpodomo\pomodoro;


class PomodoroTimer
{
	/** Valor padrão do período de trabalho, default = 25 min */
	const DEFAULT_POMODORO = 25;

	/** Valor padrão do período de intervalo, default = 5 min */
	const DEFAULT_BREAK = 5;

	/** Valor padrão do período de intervalo longo, default = 15 min */
	const DEFAULT_LONG_BREAK = 15;

	/** Valor padrão do contador de pomodoros para um intervalo longo, default = 4 pomodoros */
	const DEFUALT_LONG_BREAK_COUNTER = 4;

	/**
	 * Tempo de duração do período de trabalho
	 * Por padrão '25 min';
	 * @var int $pomodoros
	 */
	private $pomodoros = self::DEFAULT_POMODORO;

	/**
	 * @return int
	 */
	public function getPomodoros()
	{
		return $this->pomodoros;
	}

	/**
	 * @param int $pomodoros
	 */
	public function setPomodoros($pomodoros)
	{
		$this->pomodoros = $pomodoros;
	}
}