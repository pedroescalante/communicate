<?php

use PedroEscalante\Communicate\Communicate;

class CommunicateTest extends PHPUnit_Framework_TestCase 
{
	public function testCommunicateHasInstance()
	{  
		$comm = new Communicate;
		$this->assertTrue($comm->hasInstance());
	}

	public function testCommunicateHasConfig()
	{
		$comm = new Communicate;
		$this->assertNotNull('array', $comm->getConfig());
	}

	public function testSendMessage(){
		$comm = new Communicate;
		$response = $comm->sendMessage("+19374", "+17014018002", "Hi! I'm a test message");
		fwrite(STDERR, print_r($response, TRUE));
	}

} 