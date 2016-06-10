<?php
namespace App\Code;
use App\Code\AccountSing;
class User
{
	private $user = [];
	private $token;

	public function setUser($username,$pass,$email)
	{
		$this->user = [
			"user" 	=> (string) $username,
			"pass" 	=> (string) $pass,
			"email" => (string) $email
		];
		$this->token = $this->getToken($this->user);
		return $this;
	}
	private function getToken($user)
	{
		$token = md5($user["user"].$user["pass"].$user["email"].microtime());
		return $token;
	}
	public function saveUser()
	{
		$datas = [
			"user" 	=> $this->user["user"],
			"email" => $this->user["user"],
			"token" => $this->token
		];
		$account = AccountSing::getInstance();
		$account->setAccount($datas);
		return $account->execute();
	}
}