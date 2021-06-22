<?php


	#Core mvc:
	#Sparge url-ul pentru a extrage ce controller trebuie sa folosim , cu ce metoda si cu ce parametrii
	#default controle home cu metoda index
	class App
	{

		#protected $controller = 'login';
		protected $controller = 'home'; # temporar nu punem partea de logare. Facem intai functionalitatile
		protected $method = 'index';
		protected $params = [];
		
		public function __construct()
		{
			$url = $this->parseURL();

			
			#extragem controllerul
			// print_r( $url);
			if(isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php'))
			{
				$this->controller = $url[0];
				unset($url[0]);
				// print_r("extragem controllerul");
			}
			#construim un obiect de tip controller
			require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller;
			
			#extragem metoda
			if(isset($url[1]) && method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
			
			
			
			#apelam metoda din controller
			$this->params = $url ? array_values($url) : [];
			var_dump($this->controller);
			var_dump($this->method);
			var_dump($this->params);
			// print_r($url);
			call_user_func_array([$this->controller , $this->method ] , $this->params);
		}

		public function parseURL()
		{
			if(isset($_GET['url']))
			{
				return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)); 
			}
		}
	}
 
?>