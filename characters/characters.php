<?php 

namespace forest;

abstract class Characters{

	protected $name ;
	protected $life ;
	protected $power;
	protected $defend ;
	protected $speed ;
	protected $luck ;

	public function __construct($name, $life, $power, $defend, $speed, $luck)
	{
		$this->name = $name;
		$this->life = $life;
		$this->power = $power;
		$this->defend = $defend;
		$this->speed = $speed;
		$this->luck = $luck;
	}

	public function getName()
	{
		return $this->name;
	}
	public function getLife()
	{
		return $this->life;
	}
	public function getPower()
	{
		return $this->power;
	}
	public function getDefend()
	{
		return $this->defend;
	}
	public function getSpeed()
	{
		return $this->speed;
	}
	public function getLuck()
	{
		return $this->luck;
	}

	//set stats after first round and forward


	public function setLife($life)
	{
		$this->life = $life;

	}
	public function setPower($power)
	{
		$this->power = $power;

	}
	public function setDefend($defend)
	{
		$this->defend = $defend;

	}
	public function setSpeed($speed)
	{
		$this->speed = $speed;

	}
	public function setLuck($luck)
	{
		$this->luck = $luck;

	}





}









?>