<?php ###declaration class Mer
	class Mer
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
			for($i = 1; $i < $this->limit; $i++)
			{
				$this->mas[] = (pow(2, $i) - 1);
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
			fwrite($files, "Mersen number::\r\n");

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
