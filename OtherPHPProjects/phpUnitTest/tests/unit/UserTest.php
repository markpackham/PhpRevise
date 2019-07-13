<?php

use App\Model\User;

class UserTest extends \PHPUnit\Framework\TestCase {

	protected $user;

	//This saves us having to do $user = new \App\Models\User; every time
	//The setUp function is specific to PHP Unit & is called before every test
	public function setUp() {
		$this->user = new \App\Models\User;
	}

	//to run a unit test you function must begin with "test"
	//HOWEVER @test in a doc block means you don't need to start the function with "test"
	/** @test */
	public function that_we_can_get_the_first_name() {
		//In every test we need a FRESH "user" model unless you use the setUp function
		//$user = new \App\Models\User;

		$this->user->setFirstName( 'Billy' );

		//assertEquals is one of the most common things you'll use when testing
		//assertCount & assertTrue are also common
		$this->assertEquals( $this->user->getFirstName(), 'Billy' );
	}


	public function testThatWeCanGetTheLastName() {
		$user = new \App\Models\User;

		$user->setLastName( 'Smith' );

		$this->assertEquals( $user->getLastName(), 'Smith' );
	}

	public function testFullNameIsReturned() {
		$user = new \App\Models\User;
		$user->setFirstName( 'Billy' );
		$user->setLastName( 'Smith' );

		$this->assertEquals( $user->getFullName(), 'Billy Smith' );
	}

	//see if we have trimmed out the blank spaces
	public function testFirstAndLastNameAreTrimmed() {
		$user = new \App\Models\User;
		$user->setFirstName( '     Billy  ' );
		$user->setLastName( '          Smith ' );

		$this->assertEquals( $user->getFirstName(), 'Billy' );
		$this->assertEquals( $user->getLastName(), 'Smith' );

	}

	public function testEmailAddressCanBeSet() {
		$user = new \App\Models\User;
		$user->setEmail( 'billy@codecourse.com' );

		$this->assertEquals( $user->getEmail(), 'billy@codecourse.com' );
	}

	public function testEmailVariablesContainCorrectValues() {
		$user = new \App\Models\User;
		$user->setFirstName( 'Billy' );
		$user->setLastName( 'Smith' );
		$user->setEmail( 'billy@codecourse.com' );

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey( 'full_name', $emailVariables );
		$this->assertArrayHasKey( 'email', $emailVariables );

		$this->assertEquals( $emailVariables['full_name'], 'Billy Smith' );
		$this->assertEquals( $emailVariables['email'], 'billy@codecourse.com' );

	}

}