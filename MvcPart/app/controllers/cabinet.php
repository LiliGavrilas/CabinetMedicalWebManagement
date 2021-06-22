<?php
	class Cabinet extends Controller
	{

		public function index($cabinetUserName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] =  $cabinetUserName;
			$info['type'] = 'cabinet';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = str_replace("GENERIC_USERNAME",$cabinetUserName,GENERAL_CABINET_BAR);
 			if($cabinetUserName)
            {
				$user_exist = $user->isDefined($cabinetUserName);
				if ($user_exist)
				{
					$cabinet_exist = $user->isCabinet($cabinetUserName);
					if ($cabinet_exist)
					{
						$this->view('user/index', $info);
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
			else
			{
				header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
			}

		}
		

	}

?>
