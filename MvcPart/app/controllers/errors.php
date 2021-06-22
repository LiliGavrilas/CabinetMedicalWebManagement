<?php
	class Errors extends Controller
	{

		public function error403(  $curenturl = "")
		{
			print_r("Error on url:");
			print_r($_SERVER['HTTP_REFERER']);

			$this->view('errors/403');
            
		}
		public function error404(  $curenturl = "")
		{
			print_r("Error on url:");
			print_r($_SERVER['REQUEST_URI']);
			$this->view('errors/404');
            
		}
		
		

	}

?>