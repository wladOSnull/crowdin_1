<?php ###declaration class Fib
	#include 'class_Sequence.php';
	/*class Fib
	{
		protected $limit;
		protected $mas = array();
		protected $way;

		function __construct($arg1, $arg2)
		{
			$this->limit = $arg1;
			$this->way = $arg2;
		}

		public function run()
		{
			$a = $b = 1;
			$this->mas[1] = $this->mas[0] = $a;

			for($i = 2; $i < $this->limit; $i++)
			{
				$sum = $a + $b;
				$a = $b;
				$b = $sum;

				$this->mas[$i] = $sum;
			}
		}

		public function show()
		{
			echo get_class().":: <br/>";

			foreach($this->mas as $value)
				echo $value.", ";

			echo "<br/>";
		}

		public function fwrite_line()
		{
			$files = fopen($this->way, 'a');
			fwrite($files, "Fibonacci number::\r\n");

			foreach($this->mas as $key => $value)
				fwrite($files, ($key+1).") ".$value."\r\n");

			fclose($files);
		}
		
		private function max_bit_number()
		{
			$numb = end($this->mas);
			$count = 0;
			
			while($numb >= 1)
			{
				$numb /= 10;
				$count++;
			}
			
			#echo "Max bit = ".$count."<br/>";
			
			return $count;
		}
		
		private function size_tab()
		{
			$s = round(sqrt(count($this->mas)));
			
			#echo "Size = ".$s."<br/>";
			
			return $s;
		}
		
		public function fwrite_table()
		{
			$count = 0;
			$files = fopen($this->way, 'a');
			fwrite($files, "Fibonacci number::\r\n");
			
			$size = $this->size_tab();
			$fill = $this->max_bit_number() + 1;

			foreach($this->mas as $value)
			{
				$count++;
			fwrite($files, sprintf("%{$fill}s", $value));
				
				if($count == $size) 
				{
					fwrite($files, "\r\n");
					$count = 0;
				}	
			}

			fclose($files);
		}

		public function demonstration()
		{
			$this->run();
			$this->show();
			$this->fwrite_line();
			$this->fwrite_table();
		}
	}*/
	
	class Fibonacci extends Sequence
	{
		public function run()
		{
			$a = $b = 1;
			$this->mas[1] = $this->mas[0] = $a;

			for($i = 2; $i < $this->limit; $i++)
			{
				$sum = $a + $b;
				$a = $b;
				$b = $sum;

				$this->mas[$i] = $sum;
			}
		}
	}
?>
