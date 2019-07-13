<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\OperationAbstract;

class Division extends OperationAbstract implements OperationInterface {

	public function calculate() {

		if ( count( $this->operands ) === 0 ) {
			throw new NoOperandsException;
		}

		/*
		$result = 0;

		//array_reduce is cleaner than doing all of this
		foreach ( $this->operands as $index => $operand ) {
			if ( $index === 0 ) {
				$result = $operand;
				continue;
			}

			$result = $result / $operand;
		}

		return $result;
		*/

		//array_filter removes nulls & zero
		return array_reduce( array_filter( $this->operands ),
			function ( $a, $b ) {
				if ( $a !== NULL && $b !== NULL ) {
					return $a / $b;
				}

				return $b;
			}, NULL );
	}
}