<?php

    include "config.php";

    if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $user_id = $_POST['user_id'];
        $lastname = $_POST['lastname'];
        $departament = $_POST['departament'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $sql ="UPDATE `employee` SET `firstname`='$firstname',`lastname`='$lastname',`departament`='$departament',`email`='$email',`contact`='$contact' WHERE 'id'='$user_id'";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Record update successfully.";

        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }


    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "SELECT * FROM 'employee' WHERE 'id'='$user_id'";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $departament = $row['departament'];
                $email = $row['email'];
                $contact = $row['contact'];
                $id = $row['id'];
    
            }

    ?>
        <h1>Invite a doctor</h1>
        <form action="" method="POST" class="inviteDoctor__form">
         
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="First Name" required>
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Last Name" required>

            <label>Department</label>
            <input type="text" name="departament" value="<?php echo $departament; ?>"  placeholder="Department" required>

            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>

            <label>Contact</label>
            <input type="text" name="contact" value="<?php echo $contact; ?>"  placeholder="Contact" required>


            <button type="submit" name="submit">Submit</button>

        </form>

    <?php
        }else{
            header('Location: view.php');
        }

    }


?>