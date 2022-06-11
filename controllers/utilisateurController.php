<?php
session_start();
class utilisateurController
{
    public function login()
    {
      if(isset($_POST['login'])){
          $data = array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
          );
          $user = new utilisateur;
          $data = $user->getUser($data);
          if(password_verify($_POST['password'],$data['password'])==true)
          {
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['id'] = $data['id_user'];
            if($data['role'] == "admin")
            {
                header("location: dashboard");
            }
            else if($data['role'] == "etudiant")
            {
                header("location: AcueilleEtudiant");  
            }
        
        }


    } 
 
  }
}

?>