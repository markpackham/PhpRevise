<?php

namespace App\Models;

class User {

	/*since we have setters & getters we could get away with making them
	 * protected rather than public
	 */
	public $first_name;
	public $last_name;
	public $email;


	public function setFirstName( $firstName ) {
		$this->first_name = trim( $firstName );
	}

	public function getFirstName() {
		return $this->first_name;
	}

	public function setLastName( $lastName ) {
		$this->last_name = trim( $lastName );
	}

	public function getLastName() {
		return $this->last_name;
	}

	public function getFullName() {
		//hard coded solution to make sure it passes correctly
		//return 'Billy Smith';

		//another basic test to check that we pass before we create a cooler function
		//return $this->first_name . ' ' . $this->last_name;

		//keep refactoring till we have the function we want that still passes the test
		return "$this->first_name $this->last_name";

	}

	public function setEmail( $email ) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getEmailVariables() {
		return [
			'full_name' => $this->getFullName(),
			'email'     => $this->getEmail(),
		];
	}

}