<?php
namespace App\Code;
class Account
{
	private $account;
	public function setAccount($account = [])
	{
		$this->account = $account;
		return $this;
	}
	public function execute()
	{
		if($this->account == null)
		{
			return false;
		}
		return true;
	}
	public function getUser()
	{
		return $this->account['user'];
	}
	public function getEmail()
	{
		return $this->account['email'];
	}
	public function getToken()
	{
		return $this->account['token'];
	}
}