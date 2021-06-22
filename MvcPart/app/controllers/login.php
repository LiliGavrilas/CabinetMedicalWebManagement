<?php
	class Login extends Controller
	{
		
		
		public function index()
		{
			$userdata['name'] = '';
			echo 'TO DO : index';
            $this->view('login/index', $userdata);
		}

		public function singUp()
        {
            echo 'TO DO : signup based on Oauth';
            # we could start for now with sessions
        }

        public function logIn()
        {
            echo 'TO DO : logIn based on Oauth';
        }
        public function logOut()
        {
            echo 'TO DO : logOut based on Oauth';
        }

	}

?>