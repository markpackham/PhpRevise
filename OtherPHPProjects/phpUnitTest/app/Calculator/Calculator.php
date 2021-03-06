<?php

namespace App\Calculator;

class Calculator {

	protected $operations = [];


	public function setOperation( OperationInterface $operation ) {
		$this->operations[] = $operation;
	}

	public function setOperations( array $operations ) {

		/*
		foreach ( $operations as $index => $operation ) {
			if ( ! $operation instanceof OperationInterface ) {
				unset( $operations[ $index ] );
			}
		}
		*/

		$filteredOperations = array_filter( $operations,
			function ( $operation ) {
				//this will return a true or a false
				return $operation instanceof OperationInterface;
			} );

		$this->operations = array_merge( $this->operations,
			$filteredOperations );
	}

	public function getOperations() {
		return $this->operations;
	}

	public function calculate() {

		if ( count( $this->operations ) > 1 ) {

			return array_map( function ( $operation ) {

				return $operation->calculate();

			}, $this->operations );
		}

		return $this->operations[0]->calculate();
	}

}