<?php

class DoctorModel extends Controller
{
    // public $id;
    //SELECT * from users as u INNER JOIN doctors as d ON u.id_user=d.id_user;

    public function isDefined($user_name)
    {
        $sql = "SELECT COUNT(user_name) FROM users where user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $user_name));
        $results = $query->fetch(PDO::FETCH_ASSOC);

        // print_r("</br>Suntem in DoctorModel isDefined and results:");
        // print_r($results);
        
        if ($results['COUNT(user_name)'] > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}
// print_r("Suntem in DoctorModel");
?>