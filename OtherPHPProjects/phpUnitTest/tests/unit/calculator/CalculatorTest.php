<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {

	/** @test */
	public function can_set_single_operation() {
		$addition = new \App\Calculator\Addition;
		$addition->setOperands( [ 5, 10 ] );

		$calculator = new \App\Calculator\Calculator;
		$calculator->setOperation( $addition );

		$this->assertCount( 1, $calculator->getOperations() );
	}

	/** @test */
	public function can_set_multiple_operations() {
		$addition1 = new \App\Calculator\Addition;
		$addition1->setOperands( [ 5, 10 ] );

		$addition2 = new \App\Calculator\Addition;
		$addition2->setOperands( [ 30, 20 ] );

		$calculator = new \App\Calculator\Calculator;
		$calculator->setOperations( [ $addition1, $addition2 ] );

	}


	/** @test */
	public function operation_ignored_if_not_instance_of_operation_interface() {
		$addition = new \App\Calculator\Addition;
		$addition->setOperands( [ 5, 10 ] );

		$calculator = new \App\Calculator\Calculator;
		$calculator->setOperations( [
			$addition,
			'this text should not be ignored',
		] );

		$this->assertCount( 1, $calculator->getOperations() );
	}

	/** @test */
	public function can_calculate_result() {
		$addition = new \App\Calculator\Addition;
		$addition->setOperands( [ 5, 10 ] );
		$calculator = new \App\Calculator\Calculator;
		$calculator->setOperation( $addition );

		$this->assertEquals( 15, $calculator->calculate() );
	}

	/** @test */
	public function calculate_method_returns_multiple_results() {
		$addition = new \App\Calculator\Addition;
		$addition->setOperands( [ 5, 10 ] ); //must equal 15

		$division = new \App\Calculator\Division;
		$division->setOperands( [ 50, 2 ] );//must equal 25

		$calculator = new \App\Calculator\Calculator;
		$calculator->setOperations( [ $addition, $division ] );

		$this->assertInternalType( 'array', $calculator->calculate() );
		//our addition of 5+10
		$this->assertEquals( 15, $calculator->calculate()[0] );
		//our division of 50/2
		$this->assertEquals( 25, $calculator->calculate()[1] );

	}

}