<?php

	class User {

		public $email;
		public $name;

		public function __construct($name, $email) {
			$this->email = $email;
			$this->name  = $name;
		}

		public function login() {
			//echo "the user logged in";
			echo $this->name . 'logged in';
		}
	}

	// $userOne = new User();

	// $userOne->login();
	// echo $userOne->email;

	$userTwo = new User('yoshi', 'yoshi@netninja.com');
	// echo $userTwo->name;
	// echo $userTwo->email;

	$userTwo->login();

?>