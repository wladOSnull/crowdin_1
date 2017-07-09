<?php ###declaration class Sim
	class Sim
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
			$this->mas[0] = 2;
			$this->mas[1] = 3;

			for($i = 0; $i < $this->limit; $i++)
			{
				$flag = false;

				for($j = 2; $j < ($i/2); $j++)
				{
					if(($i%$j) != 0) $flag = true;
					else
					{
						$flag = false;
						break;
					}
				}

				if($flag) $this->mas[] = $i;
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
			fwrite($files, "Simple number::\r\n");

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
