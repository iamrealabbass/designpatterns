<?php


//interface for signup user
interface ValidateInterface
{
    //function for validate user
	public function isValid(array $data);
}

interface UserInterface
{
    //function for create a user and insert data to database
	public function createuser(array $data);
}

//validate class
class Validate implements ValidateInterface
{
	public function isValid(array $data)
	{
		return true;
	}
}

//create user calss
class User implements UserInterface
{
	public function create(array $data)
	{
		return true;
	}
}




// siginup facade hide details from client
class SignUpFacade
{

	private $validate;
	private $user;


	public function __construct(ValidateInterface $validate, UserInterface $user)
	{
		$this->validate = $validate;
		$this->user = $user;
	}

	public function signUpUser($userName, $userPass, $userMail)
	{
        //check validation
		if ($this->validate->isValid(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail])) {
            //create user
			$this->user->create(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail]);
	
		}
	}

}