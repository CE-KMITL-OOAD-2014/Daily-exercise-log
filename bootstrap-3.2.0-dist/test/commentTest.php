<?php
class commentTest extends testCase{
	$opi = new comment();
	$opi->setComment("Too Easy");
	$opi->setDate("31/10/2557");

	$this->assertEqual("Too Eazy",$opi->getComment());
	$this->assertEqual("31/10/2557",$opi->getDate());

}

?>