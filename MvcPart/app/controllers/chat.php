<?php
	class Chat extends Controller
	{

		public function index($userName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$info['username'] =  $userName;
			$info['type'] = 'cabinet';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = '
				<li>
				<a href="/cabinet/' . $userName . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
				</li>
				<li>
					<a class="header_button" href="/schedules/' . $userName . '">Schedules</a>
				</li>
				<li>
					<a class="header_button" href="/files/' . $userName . '">Patients Files</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/patient/' . $userName . '">Invite Patient</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/doctor/' . $userName . '">Invite Doctor</a>
				</li>
				<li>
					<a class="header_button" href="/chat/' . $userName . '">Chat</a>
				</li>
				<li class="login">
					<a href="/login">Log In</a>
				</li>
				';
            $this->view('chat/index' , $info);
        

		}
	}

?>