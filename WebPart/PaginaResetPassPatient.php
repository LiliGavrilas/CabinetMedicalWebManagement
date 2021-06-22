<?php

    $db = mysqli_connect("localhost","root","","cabinetmanagement");
    if(isset($_POST['submit'])){
        if(mysqli_query($db,"UPDATE users_patients SET password='$_POST[password]' WHERE email='$_POST[email]'"))
        {
            ?>
            <script type ="text/javascript">
                alert("Password update successfully")
                window.location = "index_patient.html";
            </script>
            <?php
            

        }
    }

?>