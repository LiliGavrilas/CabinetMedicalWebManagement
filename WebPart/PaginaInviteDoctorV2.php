<?php
include "config.php";

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $departament = $_POST['departament'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
    
        $sql = "INSERT INTO `employee`(`firstname`, `lastname`, `departament`, `email`, `contact`) VALUES ('$firstname','$lastname','$departament','$email','$contact')";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "New record created successfully.";

        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/PaginaInviteDoctorV2.css">
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="./images/favicon.jpg" />
    <title>Cabinet Medical Web Management</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a class="logo" href="./PaginaGeneralaCabinetV2.html">

                    <span class="header_icon_logo"> <i class="fas fa-clinic-medical"></i> </span>
                    <img class="logo" src="./images/CMED.jpg" alt="Cmed logo">
                    <!-- <span class="header_icon"> <i class="fas fa-calendar-plus"></i> </span>
        <span class="header_text">Logo</span> -->
                </a>
            </li>

            <li>
                <a class="header_button" href="./PaginaScheduleCabinetV2.html">
                    <span class="header_icon"> <i class="fas fa-calendar-plus"></i> </span>
                    <span class="header_text">Schedules</span>
                </a>
            </li>

            <li>
                <a class="header_button" href="./PaginaFilesCabinetV2.html">
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
                        <a class="header_button" href="./PaginaCabinetInvitePatientV2.html">
                            <span class="header_icon"> <i class="fas fa-user-injured"></i> </span>
                            <span class="header_text">Patient</span>
                        </a>
                    </li>
                    <li>
                        <a class="header_button" href="./PaginaInviteDoctorV2.html">
                            <span class="header_icon"> <i class="fas fa-user-md"></i> </span>
                            <span class="header_text">Doctor</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="header_button" href="./PaginaChatCabinetV2.html">
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
                        <a class="header_button" href="./PaginaResetPassCabinetV2.html">
                            <span class="header_icon"> <i class="fas fa-key"></i> </span>
                            <span class="header_text">Reset password</span>
                        </a>
                    </li>
                    <li>
                        <a class="header_button" href="./index_cabinet.html">
                            <span class="header_icon"> <i class="fas fa-sign-out-alt"></i> </span>
                            <span class="header_text">Log out</span>
                        </a>
                    </li>
                </ul>

            </li>

        </ul>
    </header>



    <main>

        <div class="inviteDoctor">

            <form action="" method="POST" class="inviteDoctor__form">
                
                <h1>Invite a doctor</h1>

                <label>First Name</label>
                <input type="text" name="firstname" placeholder="First Name" required>

                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name" required>

                <label>Department</label>
                <input type="text" name="departament" placeholder="Department" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>

                <label>Contact</label>
                <input type="text" name="contact" placeholder="Contact" required>


                <button type="submit" name="submit">Submit</button>

            </form>
        </div>

    </main>



    <footer>
        <p>Cabinet Medical Web Management</p>
    </footer>


</body>

</html>