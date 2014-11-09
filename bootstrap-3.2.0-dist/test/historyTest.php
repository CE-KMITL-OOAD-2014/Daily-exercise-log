<?php
class historyTest extends testCase{
	$his = new history();
	$his->setHistoryName("Bridge Leg Extension");
	$his->setTime("30 minute");
	$his->setDate("31/10/2557");

	$this->assertEqual("Bridge Leg Extension",$his->getHistoryName());
	$this->assertEqual("30 minute",$his->getTime());
	$this->assertEqual("31/10/2557",$his->getDate());

}

?>