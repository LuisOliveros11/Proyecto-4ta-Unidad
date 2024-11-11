<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $authController = new AuthController();
    $authController->login($email, $pwd);
};

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
}
?>