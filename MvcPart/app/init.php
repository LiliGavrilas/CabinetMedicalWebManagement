<?php

    require_once 'core/App.php '; 
    require_once 'core/Controller.php';

    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
    define('URL', 'http://localhost/');
    // Sql config:
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'cabinetmanagement');
    define('DB_USER', 'cabinet');
    define('DB_PASS', 'cabinet');
    

    //Templates:   
    //TO DO: fill all the hrefs and needed Templates names 
    define('GENERAL_CABINET_BAR' , '
						<li>
							<a class="logo" href="/cabinet/GENERIC_USERNAME">
						
								<span class="header_icon_logo"> <i class="fas fa-clinic-medical"></i> </span>
								<img class="logo" src="/images/CMED.jpg" alt="Cmed logo">
								<!-- <span class="header_icon"> <i class="fas fa-calendar-plus"></i> </span>
									<span class="header_text">Logo</span> -->
							</a>
						</li>
						
						<li>
							<a class="header_button" href="/schedules/GENERIC_USERNAME">
								<span class="header_icon"> <i class="fas fa-calendar-plus"></i> </span>
								<span class="header_text">Schedules</span>
							</a>
						</li>
						
						<li>
							<a class="header_button" href="/files/GENERIC_USERNAME">
								<span class="header_icon"> <i class="fas fa-file-medical"></i> </span>
								<span class="header_text">Files</span>
							</a>
						</li>
						
						<li>
							<a class="header_button">
								<span class="header_icon"> <i class="fas fa-user-plus"></i> </span>
								<span class="header_text">Invite</span>
							</a>
							<ul class="header_button__login">
								<li>
									<a class="header_button" href="/adduser/patient/GENERIC_USERNAME">
										<span class="header_icon"> <i class="fas fa-user-injured"></i> </span>
										<span class="header_text">Patient</span>
									</a>
								</li>
								<li>
									<a class="header_button" href="/adduser/doctor/GENERIC_USERNAME">
										<span class="header_icon"> <i class="fas fa-user-md"></i> </span>
										<span class="header_text">Doctor</span>
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a class="header_button" href="/chat/GENERIC_USERNAME">
								<span class="header_icon"> <i class="fas fa-comments"></i> </span>
								<span class="header_text">Chat</span>
							</a>
						</li>
						
						<li>
							<a class="header_button">
								<span class="header_icon"> <i class="fas fa-user"></i> </span>
								<span class="header_text">User</span>
							</a>
							<ul class="header_button__login">
								<li>
									<a class="header_button" href="/resetpass/GENERIC_USERNAME">
										<span class="header_icon"> <i class="fas fa-key"></i> </span>
										<span class="header_text">Reset password</span>
									</a>
								</li>
								<li>
									<a class="header_button" href="/login">
										<span class="header_icon"> <i class="fas fa-sign-out-alt"></i> </span>
										<span class="header_text">Log out</span>
									</a>
								</li>
							</ul>
						
						</li>

    ');
    define('GENERAL_DOCTOR_BAR' , '');//TO DO
    define('GENERAL_PATIENT_BAR' , '');//TO DO

?>


