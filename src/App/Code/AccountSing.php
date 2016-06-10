<?php
namespace App\Code;
use App\Code\Account;
use App\Code\AccountSingInterface;
class AccountSing implements AccountSingInterface
{
	
	public static $account;

	private function __construct()
	{
	}
	public static function getInstance()
	{
		if (static::$account == null) {
			static::$account = new Account();
		}
		return static::$account;
	}
}