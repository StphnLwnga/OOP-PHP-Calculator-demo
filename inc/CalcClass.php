<?php

	class Calc {
		
		public $num1;
		public $num2;
		public $calc;
		
		public function __construct($num1, $num2, $calc) {
			$this->num1 = $num1;
			$this->num2 = $num2;
			$this->calc = $calc;
		}
		
		public function calcMethod() {
			switch($this->calc) {
				case 'add':
					$answer = $this->num1 + $this->num2;
					break;
				case 'sub':
					$answer = $this->num1 - $this->num2;
					break;
				case 'mul':
					$answer = $this->num1 * $this->num2;
					break;
				case 'div':
					$answer = $this->num1 / $this->num2;
					break;
				default:
					$answer = "Error!";
					break;
			}
			return $answer;
		}
		
	}

?>
