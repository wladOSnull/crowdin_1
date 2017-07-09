<?php ###declaration template class
	abstract class Sequence
	{
		protected $limit;
		protected $mas = array();
		protected $way;

		function __construct($arg1, $arg2)
		{
			$this->limit = $arg1;
			$this->way = $arg2;
		}

		abstract public function run();
		
		public function show()
		{
			echo get_class($this).":: <br/>";

			foreach($this->mas as $value)
				echo $value.", ";

			echo "<br/>";
		}

		public function fwrite_line()
		{
			$files = fopen($this->way, 'a');
			fwrite($files, get_class($this)." number::\r\n");

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
			fwrite($files, get_class($this)." number::\r\n");
			
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
			
			fwrite($files, "\r\n");
			fclose($files);
		}

		public function demonstration()
		{
			$this->run();
			$this->show();
			$this->fwrite_line();
			$this->fwrite_table();
		}
	}
?>
