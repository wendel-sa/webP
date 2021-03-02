<?php
    
    class Usuario {
        public function login($email, $senha){
            global $db;

            $sql = "SELECT * FROM alunos WHERE email= :email AND senha= :senha";
            $sql = $db->prepare($sql);
            $sql-> bindValue("email", $email);
            $sql-> bindValue("senha", $senha);
            $sql->execute();

            //acesso do usuario
            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                //echo $dado['id'] 
                $_SESSION['idUser'] = $dado['id'];
                return true; 

            }else{
                return false;
            }
        }
    }
?>