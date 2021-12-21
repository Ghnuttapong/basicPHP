<?php 
    class funcPHP {
        
        public function __construct() {
            require_once('connect/connect.php');
            $this->dbcon = $conn;
        }

        public function insert_user ($uname, $pass) {
            
            $data = array($uname, $pass);

            $sql = "INSERT INTO tb_users(username, password) VALUES ( ?,? )";
            $stmt = $this->dbcon->prepare($sql);
            $result = $stmt->execute($data);
            if ($result) {
                $msg = array(
                    "Msg" => "Success",
                    
                    "Code" => 200
                );
                echo json_encode($msg);
                http_response_code(200);
            } else {
                http_response_code(405);
            }
        }

    }

?>