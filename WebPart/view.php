<?php

    include "config.php";
    $sql="SELECT * FROM  employee";

    $result = $conn->query($sql);

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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

    <div class="container">
        <h2>Doctors</h2>
        <table class="table"> 
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Departamen</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc())
                        {
                ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['departament']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>

                <?php      
                          }

                    }
                ?>
                
                   
            </tbody>

        </table>
    </div>
</main>

<footer>
        <p>Cabinet Medical Web Management</p>
    </footer>


</body>

</html>