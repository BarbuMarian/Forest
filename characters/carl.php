<?php 


require_once 'characters.php';



class Carl extends forest\Characters 
{
	public function dragonPower(){

			$chance = rand(1,100);

			if($chance <= 10){
				return $this->getPower() *2; 
			}else{
				return $this->getPower(); 
			}
	}

	public function magicShield(){

		$chance = rand(1,100);

		if($chance <= 20){
			return $this->getDefend() *2; 
		}else{
			return $this->getDefend(); 
		}
	}



}


?>