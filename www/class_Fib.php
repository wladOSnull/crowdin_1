<?php ###declaration class Fib
	class Fib
	{
		protected $limit = 0;
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

    public function get_in_file()
		{
			$files = fopen($this->way, 'a');
			fwrite($files, "Fibonacci number::\r\n");

			foreach($this->mas as $key => $value)
				fwrite($files, ($key+1).") ".$value."\r\n");

			fclose($files);
		}

		public function demonstration()
		{
			$this->run();
			$this->show();
			$this->get_in_file();
		}
	}
?>
