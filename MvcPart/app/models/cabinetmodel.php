<?php

class CabinetModel extends Controller
{
    public  $id;
    public  $type;
    public  $user_name;
    //SELECT * from users as u INNER JOIN cabinets as c ON u.id_user=c.id_user;

    // function __construct()
    // {

    // }
    
    public function isDefined($username)
    {
        $sql = "SELECT COUNT(user_name) FROM users where user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);

        // print_r("</br>Suntem in CabinetModel isDefined and results:");
        // print_r($results);
        
        if ($results['COUNT(user_name)'] > 0)
        {
            $this->user_name = $username;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getUserId($username)
    {
        $sql_getId= "SELECT id_user FROM users WHERE user_name = :username";
        $query_getId = $this->conn->prepare($sql_getId);
        $query_getId->execute(array(":username" => $username));
        $result = $query_getId->fetch(PDO::FETCH_ASSOC);
        $id_user = $result['id_user'];
        $this->id =  $id_user;
        $this->user_name = $username;
        return $id_user;
    }


    public function isCabinet($username)
    {

        $id_user = $this->getUserId($username);

        $sql_isCabinet = "SELECT COUNT(id_user) FROM cabinets WHERE id_user = " . $id_user;
        $query_isCabinet = $this->conn->prepare($sql_isCabinet);
        $query_isCabinet->execute();
        $result = $query_isCabinet->fetch(PDO::FETCH_ASSOC);
        $cabinetCount = $result['COUNT(id_user)'];

        if($cabinetCount > 0)
            return true;
        return false;

    }
    
    public function getData($username)
    {
        $sql = "SELECT * from users as u INNER JOIN cabinets as c ON u.id_user=c.id_user WHERE user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);
        print_r("</br>Suntem in CabinetModel getData and results:");
        print_r($results);
        return $results;
    }
    
}
// print_r("Suntem in CabinetModel");
?>