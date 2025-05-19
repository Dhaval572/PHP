<?php
	// Function overriding practice
	class Papa
	{
		public function Intro()
		{
			echo "I am papa";
		}
	}

	class HiraBeta extends Papa
	{
		public function Intro()
		{
			echo "I am Hira beta😁";
		}
	}

	$obj = new HiraBeta();
	$obj->Intro();
?>