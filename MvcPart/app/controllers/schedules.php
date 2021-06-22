<?php
	class Schedules extends Controller
	{


		public function index($userName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] = $userName;
			$info['departments'] = '';
			$info['doctors'] = '';
			$info['generalbar'] = '';
			$info['type'] = '';

			if($userName)
			{
				$user_exist = $user->isDefined($userName);
				if ($user_exist)
				{
					$user_type = $user->getUserType($userName);
					
					switch ($user_type) 
					{
						  case "cabinet":
								$cabinet_departments = $user->getDepartments($userName);
								$cabinet_doctors = $user->getDoctors($userName);
								$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_CABINET_BAR);

								foreach($cabinet_departments as $department)
								{
									$info['departments'] = $info['departments'] . '<option value ="' . $department . '"> ' . $department . ' </option>';
								}
								foreach($cabinet_doctors as $doctor)
								{
									$info['doctors'] = $info['doctors'] . '<option value ="' . $doctor['department'] . '_' . $doctor['first_name'] . '_' . $doctor['last_name'] . '"> ' . $doctor['department'] . ' ' . $doctor['first_name'] . ' ' . $doctor['last_name'] . ' </option>';
								}
								$this->view('schedules/index' , $info);
								break;

						  case "doctor":
								$info['generalbar'] = '
												<li>
												<a href="/doctor/' . $userName . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
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
													<a class="header_button" href="/chat/' . $userName . '">Chat</a>
												</li>
												<li class="login">
													<a href="/login">Log In</a>
												</li>
												';
								
								$this->view('schedules/index' , $info);
								break;
						  case "patient":
										$info['generalbar'] = '
										<li>
										<a href="/patient/' . $userName . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
										</li>
										<li>
											<a class="header_button" href="/schedules/' . $userName . '">Schedules</a>
										</li>
										<li>
											<a class="header_button" href="/files/' . $userName . '">Patients Files</a>
										</li>
										<li>
											<a class="header_button" href="/chat/' . $userName . '">Chat</a>
										</li>
										<li class="login">
											<a href="/login">Log In</a>
										</li>
										';
							
								$this->view('schedules/index' , $info);
								break;
					}
				}
				else
				{	
					header('Location: ' . URL . 'errors/error404' . $_SERVER['REQUEST_URI']);
				}
			}
			else
			{	
				header('Location: ' . URL . 'errors/error403' . $_SERVER['REQUEST_URI']);
			}
		}
	}

?>