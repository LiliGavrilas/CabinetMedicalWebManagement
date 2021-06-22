<?php
	class Patient extends Controller
	{

		public function index($patientUserName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$patient = $this->model('patientModel');
			$info['username'] =  $patientUserName;
			$info['type'] = 'patient';
			$info['generalbar'] = '';

			if(!$patientUserName)
            {
			    header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
            }
            else
            {
                $this->view('user/index' , $info);
            }

		}
	}

?>