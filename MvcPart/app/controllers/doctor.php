<?php
	class Doctor extends Controller
	{

		public function index($doctorUserName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] =  $doctorUserName;
			$info['type'] = 'doctor';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = '
				<li>
				<a href="/doctor/' . $doctorUserName . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
				</li>
				<li>
					<a class="header_button" href="/schedules/' . $doctorUserName . '">Schedules</a>
				</li>
				<li>
					<a class="header_button" href="/files/' . $doctorUserName . '">Patients Files</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/patient/' . $doctorUserName . '">Invite Patient</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/doctor/' . $doctorUserName . '">Invite Doctor</a>
				</li>
				<li>
					<a class="header_button" href="/chat/' . $doctorUserName . '">Chat</a>
				</li>
				<li class="login">
					<a href="/login">Log In</a>
				</li>
				';


			if($doctorUserName)
            {
				$doctor_exist = $user->isDefined($doctorUserName);

				if ($doctor_exist)
				{
					$this->view('user/index',  $info);
					// $result = $cabinet->getData($cabinetId);
				}
				else
				{
					header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
				}
            }
            else
			{
				header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
			}

		}
		
	}

?>