<?php

class User {

private $userId;
private $firstName;
private $lastName;
private $email;
private $birthday;






/**
 * Get the value of userId
 */ 
public function getUserId()
{
return $this->userId;
}

/**
 * Set the value of userId
 *
 * @return  self
 */ 
public function setUserId($userId)
{
$this->userId = $userId;

return $this;
}
}