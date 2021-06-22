
<?php
	class Home extends Controller
	{

		public function index($userName = "")
		{

                  //TO DO: 
                  //aici ar trebuii sa avem 
                  //          daca nu suntem logati o pagina cu select login(as cabinet/doctor/patient)
                  //          daca suntem logati -> verficam ce timp de user avem incarcat -> redirect la pagina lui home (cabinet/username sau doctor/username sau patient/username) 
                  // temporar punem un cabine din db :
                  // $userId = "cabinet_ana";

                  $user = $this->model('UserModel');
                  // print_r("Home index ", $userName);
                  if($userName)
                  {
                        $user_exist = $user->isDefined($userName);
                        $this->user_name = $userName;
                        if ($user_exist)
                        {
                              $user_type = $user->getUserType($userName);
                              switch ($user_type) 
                              {
                                    case "cabinet":
                                          // $this->view('cabinet/index' ,  ['id' => $userName]);
                                          $this->type = "cabinet";
                                          header('Location: ' . URL . 'cabinet/'. $userName);
                                          break;
                                    case "doctor":
                                          // $this->view('doctor/index' ,  ['username' => $userName]);
                                          $this->type = "doctor";
                                          header('Location: ' . URL . 'doctor/'. $userName);
                                          break;
                                    case "patient":
                                          // $this->view('patient/index' ,  ['username' => $userName]);
                                          $this->type = "patient";
                                          header('Location: ' . URL . 'patient/'. $userName);
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