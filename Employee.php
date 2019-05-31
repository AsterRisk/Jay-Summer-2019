<?php
	class Employee
	{
		Employee($nm, long $IDNo, $picFile, $QRC)
		{
			$this->name = $nm;
			$this->ID = $IDNo;
			$this->pic = $picFile;
			$this->QR = $QRC;
			$this->clocked = false;
		}
		
		function clock() : String
		{
			$this->clocked = !($this->clocked);
			return date("m/j/Y H:i");
		}
	}
/?>