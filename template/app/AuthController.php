<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $authController = new AuthController();
    $authController->login($email, $pwd);
}
;

if (isset($_POST['recuperarPwd'])) {
    $email = $_POST['email'];

    $authController = new AuthController();
    $authController->recuperarContrasena($email);
}
;

if (isset($_POST['logout'])) {
    $email = $_SESSION['data']->email;

    $authController = new AuthController();
    $authController->logout($email);
}
;

class AuthController
{
    public function login($email, $pwd)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $email, 'password' => $pwd),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->data) && is_object($response->data)) {
            $_SESSION['data'] = $response->data;
            header("Location: ../home");
        } else {
            echo "Error. Credenciales Incorrectas";
        }
    }

    public function recuperarContrasena($email)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/forgot-password',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $email),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);
        if (isset($response->data) && $response->code === 4) {
            header("Location: ../index.php");
        } else {
            echo "Error. Ingresa un correo valido";
        }
    }

    public function logout($email)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/logout',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $email),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);
        
        if(isset($response->message) && $response->code === 2){
            session_unset();
            session_destroy();
            header("Location: ../index.php");
        }else{
            echo "Error al cerrar sesión";
        }
    }
}
?>