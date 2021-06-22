<?php
	class AddUser extends Controller
	{

		# User A (Cabinet/Doctor) add a new user B
		#A cabinet is allowed to add doctors and patients. 
		#A doctor is allowed to add only patients. 
		public function index($userTypeB = '' , $userNameA = '')
		{
			
			// print_r($userType.$userName);
			$user = $this->model('userModel');
			$info['username'] = $userNameA;
			$info['type'] = "";
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = '
				<li>
				<a href="/doctor/' . $userNameA . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
				</li>
				<li>
					<a class="header_button" href="/schedules/' . $userNameA . '">Schedules</a>
				</li>
				<li>
					<a class="header_button" href="/files/' . $userNameA . '">Patients Files</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/patient/' . $userNameA . '">Invite Patient</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/doctor/' . $userNameA . '">Invite Doctor</a>
				</li>
				<li>
					<a class="header_button" href="/chat/' . $userNameA . '">Chat</a>
				</li>
				<li class="login">
					<a href="/login">Log In</a>
				</li>
				';

	
			if($userNameA)
			{
				$userTypeA = $user->getUserType($userNameA);
				$info['type'] = $userTypeA;
				if($userTypeA == "cabinet" && ($userTypeB == "doctor" || $userTypeB == "patient"))
				{
					if ($userTypeB == "doctor")
						$this->view('adduser/doctor' , $info);
					if ($userTypeB == "patient")
						$this->view('adduser/patient' , $info);
				}

				if($userTypeA == "doctor" && $userTypeB == "patient")
				{
					$this->view('adduser/patient' , $info);
				}
			}
			
		}

	}

?>