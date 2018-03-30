<?php 

namespace Zhouwuxiang\HellorfApi;

class ApiServer 
{	
	/**
	 * [$client_id 客户端ID]
	 * @var [type]
	 */
	private $client_id;

	/**
	 * [$client_secret 客户端秘钥]
	 * @var [type]
	 */
	private $client_secret;

	/**
	 * [__construct description]
	 * This is a cool function
	 * @author zhouwuxiang
	 * @DateTime 2018-03-30
	 * @param    [type]     $client_id     [description]
	 * @param    [type]     $client_secret [description]
	 */
	public function __construct($client_id, $client_secret)
	{
		$this->client_id = $client_id;

		$this->client_secret = $client_secret;
	}

	public function purchaseRecords()
	{
		return true;
	}

	private function makeSign()
	{

	}
}