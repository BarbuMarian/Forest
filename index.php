<?php 

require_once "characters\carl.php";
require_once "characters\beast.php";

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    
		<link rel="stylesheet" href="css/style.css">

    <title>Magic Forest</title>
  </head>
  <body>
		
	
	<h1>Battle in magic Forest</h1>

		<?php 
		
		$generatorHero = "Carl";
		$generatorLifeHero =  rand(65,95);
		$generatorPowerHero =  rand(60,70);
		$generatorDefendHero =  rand(40,50);
		$generatorSpeedHero =  rand(40,50);
		$generatorLuckHero =  rand(10,30);
		
		$generatorBeast = "Beast";
		$generatorLifeBeast =  rand(55,80);
		$generatorPowerHeroBeast =  rand(50,80);
		$generatorDefendHeroBeast =  rand(35,55);
		$generatorSpeedHeroBeast =  rand(40,60);
		$generatorLuckHeroBeast =  rand(25,40);

		echo "<h2>Initial Stats:</h2>";

		$carl = new  Carl($generatorHero,$generatorLifeHero,$generatorPowerHero,$generatorDefendHero,$generatorSpeedHero,$generatorLuckHero);
		echo "Hero's name is  " . $carl->getName();
		echo "<br>";
		echo 'this is life ' . $carl->getLife();
		echo "<br>";
		echo 'this is power ' . $carl->getPower();
		echo "<br>";
		echo 'this is defend ' . $carl->getDefend();
		echo "<br>";
		echo 'this is speed ' . $carl->getSpeed();
		echo "<br>";
		echo 'this is luck ' . $carl->getLuck();
		echo "<hr>";


		$beast = new Beast($generatorBeast,$generatorLifeBeast,$generatorPowerHeroBeast,$generatorDefendHeroBeast,$generatorSpeedHeroBeast,$generatorLuckHeroBeast);

		echo "Beast's name is  " . $beast->getName();
		echo "<br>";
		echo 'this is life ' .  $beast->getLife();
		echo "<br>";
		echo 'this is power ' . $beast->getPower();
		echo "<br>";
		echo 'this is defend ' .  $beast->getDefend();
		echo "<br>";
		echo 'this is speed ' . $beast->getSpeed();
		echo "<br>";
		echo 'this is luck ' . $beast->getLuck();
		echo "<br>";
		echo "<hr>";

	if($carl->getSpeed() > $beast->getSpeed() ){
		$firstA = $carl;
		$defensive = $beast;

	}
	else if($carl->getSpeed() == $beast->getSpeed() ){
		$firstA = $carl->getLuck() > $beast->getLuck() ? $carl : $beast ;
		$defensive = $carl->getLuck() > $beast->getLuck() ? $beast : $carl;
	}
	else{
		$firstA = $beast;
		$defensive = $carl;

	}

	echo '<h3>This is round 1</h3>' ;

	echo '<br>';
	echo 'First attacker is: '	. $firstA->getName() ;
	echo '<br>';
	echo 'Defender is: ' . $defensive->getName() ;
	echo '<br>';

	if($firstA->getName() == $carl->getName()){
		$powerBefore = $carl->getPower();

		$carl->setPower($carl->dragonPower());
		$powerAfter = $carl->getPower();

		if($powerBefore != 	$powerAfter){
			echo 'dragonPower has been activated';
			echo '<br>';
		}
	}else if($defensive->getName() == $carl->getName()){
		$powerBefore = $carl->getDefend();

		$carl->setDefend($carl->magicShield());
		$powerAfter = $carl->getDefend();

		if($powerBefore != 	$powerAfter){
			echo 'magicShield has been activated';
			echo '<br>';
		}

	}





	$damage = 	$firstA->getPower() - $defensive->getDefend();
	echo '<br>';


	$chanceMiss = rand(1,100);
	$luck =  $defensive->getLuck();

	if($chanceMiss < $luck){
		echo 'Chance missed, next turn';
	}else{
		if ($damage > 0 && $damage < 100){
			echo '<br>';
			echo $firstA->getName() . " has dealt to " . $defensive->getName() . ' damage in value of  ' . $damage;
			echo '<br>';
			echo 	 $defensive->getLife() . ' life before attack ';
			echo '<br>';
			$lifeRemain= $defensive->getLife() - $damage;
			echo 	 $lifeRemain . ' life after attack '; 
			$defensive->setLife($lifeRemain); 

		}
	}
	$role = $firstA;
	$firstA = $defensive;
	$defensive = $role;
	$i = 2;
	echo '<hr>';

	// from here start round 2 and while

	while($carl->getLife() > 0 && $beast->getLife() > 0 && $i <= 20 ){
		$carl->setPower(rand(60,70));
		$carl->setDefend(rand(40,50));
		$carl->setSpeed(rand(40,50));
		$carl->setLuck(rand(10,30));

		$beast->setPower(rand(50,80));
		$beast->setDefend(rand(35,55));
		$beast->setSpeed(rand(40,60));
		$beast->setLuck(rand(25,40));

		echo '<h3>This is round ' . $i . '</h3>';
		

		if($firstA->getName() == $carl->getName()){
			$powerBefore = $carl->getPower();

			$carl->setPower($carl->dragonPower());
			$powerAfter = $carl->getPower();


			if($powerBefore != 	$powerAfter){
				echo '<p>dragonPower has been activated </p>';
				echo '<p> Power after dragonPower is : ' . 	$powerAfter . ' </p>';

			}

		}else if($defensive->getName() == $carl->getName()){
			$powerBefore = $carl->getDefend();

			$carl->setDefend($carl->magicShield());
			$powerAfter = $carl->getDefend();

			if($powerBefore != 	$powerAfter){
				echo '<p>magicShield has been activated </p>';
				echo '<p> Defend after magicShield is : ' . 	$powerAfter . ' </p>';

			}
	
		}

		$damage = 	$firstA->getPower() - $defensive->getDefend();

	
	
		$chanceMiss = rand(1,100);
		$luck =  $defensive->getLuck();
	
		if($chanceMiss < $luck){
			echo '<p>Chance missed, next turn</p>';
		}else{
			if ($damage > 0 && $damage < 100){

				echo $firstA->getName() . " has dealt to " . $defensive->getName() . ' damage in value of  ' . $damage;
				echo '<br>';
				echo 	 $defensive->getLife() . ' life before attack ';
				echo '<br>';
				$lifeRemain= $defensive->getLife() - $damage;
				echo 	 $lifeRemain . ' life after attack '; 
				$defensive->setLife($lifeRemain); 

				if($lifeRemain < 0 ){
					echo '<p> Game over: ' . $firstA->getName() . ' won </p>';
				}
				
			}

		}


		$role = $firstA;
		$firstA = $defensive;
		$defensive = $role;

		echo '<hr>';
		$i++;
	}


	
		?>

    

  </body>
</html>