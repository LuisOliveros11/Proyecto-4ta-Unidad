<?php
session_start();

if (isset($_POST['addClient'])) {
    if (
        strlen($_POST['client_name']) > 0 &&
        strlen($_POST['client_email']) > 0 &&
        strlen($_POST['pwd']) > 0 &&
        strlen($_POST['client_phone']) > 0 &&
        strlen($_POST['client_subscription']) > 0 &&
        strlen($_POST['client_level']) > 0
    ) {
        $client_name = $_POST['client_name'];
        $client_email = $_POST['client_email'];
        $pwd = $_POST['pwd'];
        $client_phone = $_POST['client_phone'];
        $client_subscription = $_POST['client_subscription'];
        $client_level = $_POST['client_level'];

        $clientController = new ClientController();
        $clientController->crearCliente($client_name, $client_email, $pwd, $client_phone, $client_subscription, $client_level);
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

if (isset($_POST['editarCliente'])) {
    if (
        strlen($_POST['client_name']) > 0 &&
        strlen($_POST['client_email']) > 0 &&
        strlen($_POST['pwd']) > 0 &&
        strlen($_POST['client_phone']) > 0 &&
        strlen($_POST['client_subscription']) > 0 &&
        strlen($_POST['client_level']) > 0
    ) {
        $client_name = $_POST['client_name'];
        $client_email = $_POST['client_email'];
        $pwd = $_POST['pwd'];
        $client_phone = $_POST['client_phone'];
        $client_subscription = $_POST['client_subscription'];
        $client_level = $_POST['client_level'];
        $id = $_POST['id'];

        $clientController = new ClientController();
        $clientController->editarCliente($client_name, $client_email, $pwd, $client_phone, $client_subscription, $client_level, $id);
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class ClientController
{
    public function crearCliente($client_name, $client_email, $pwd, $client_phone, $client_subscription, $client_level)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $client_name, 'email' => $client_email, 'password' => $pwd, 'phone_number' => $client_phone, 'is_suscribed' => $client_subscription, 'level_id' => $client_level),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            header("Location: ../clientlist.php");
        } else {
            echo "Error al crear cliente";
        }
    }

    public function editarCliente($client_name, $client_email, $pwd, $client_phone, $client_subscription, $client_level, $id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => "name=$client_name&email=$client_email&password=$pwd&phone_number=$client_phone&is_suscribed=$client_subscription&level_id=$client_level&id=$id",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            header("Location: ../clientlist.php");
        } else {
            echo "Error al editar cliente";
        }
    }

    public function eliminarCliente($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 2) {
            header("Location: ../home");
        } else {
            echo "Error al eliminar cliente";
        }

    }

    public function obtenerClientes()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            return $response->data;
        } else {
            echo "Error al obtener detalles";
        }
    }

    public function obtenerDetallesClienteEspecifico($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            return $response->data;
        } else {
            echo "Error al obtener detalles";
        }

    }

}
?>