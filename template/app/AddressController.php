<?php
session_start();

if (isset($_POST['addAddress'])) {
    if (
        strlen($_POST['first_name']) > 0 &&
        strlen($_POST['last_name']) > 0 &&
        strlen($_POST['street_and_use_number']) > 0 &&
        strlen($_POST['postal_code']) > 0 &&
        strlen($_POST['city']) > 0 &&
        strlen($_POST['province']) > 0 &&
        strlen($_POST['phone_number']) > 0 &&
        strlen($_POST['is_billing_address']) > 0 &&
        strlen($_POST['client_id']) > 0
    ) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $street_and_use_number = $_POST['street_and_use_number'];
        $postal_code = $_POST['postal_code'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $phone_number = $_POST['phone_number'];
        $is_billing_address = $_POST['is_billing_address'];
        $client_id = $_POST['client_id'];

        $addressController = new AddressController();
        $addressController->crearDireccion($first_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $is_billing_address, $client_id);
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

if (isset($_POST['editAddress'])) {
    if (
        strlen($_POST['first_name']) > 0 &&
        strlen($_POST['last_name']) > 0 &&
        strlen($_POST['street_and_use_number']) > 0 &&
        strlen($_POST['postal_code']) > 0 &&
        strlen($_POST['city']) > 0 &&
        strlen($_POST['province']) > 0 &&
        strlen($_POST['phone_number']) > 0 &&
        strlen($_POST['is_billing_address']) > 0 &&
        strlen($_POST['client_id']) > 0
    ) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $street_and_use_number = $_POST['street_and_use_number'];
        $postal_code = $_POST['postal_code'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $phone_number = $_POST['phone_number'];
        $is_billing_address = $_POST['is_billing_address'];
        $client_id = $_POST['client_id'];
        $id = $_POST['id'];

        $addressController = new AddressController();
        $addressController->editarDireccion($first_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $is_billing_address, $client_id, $id);
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class AddressController
{

    public function crearDireccion($first_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $is_billing_address, $client_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('first_name' => $first_name, 'last_name' => $last_name, 'street_and_use_number' => $street_and_use_number, 'postal_code' => $postal_code, 'city' => $city, 'province' => $province, 'phone_number' => $phone_number, 'is_billing_address' => $is_billing_address, 'client_id' => $client_id),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            header("Location: ../home");
        } else {
            echo "Error al crear direccion";
        }
    }

    public function editarDireccion($first_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $is_billing_address, $client_id, $id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => "first_name=$first_name&last_name=$last_name&street_and_use_number=$street_and_use_number&postal_code=$postal_code&city=$city&province=$province&phone_number=$phone_number&is_billing_address=$is_billing_address&client_id=$client_id&id=$id",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            "Authorization: Bearer " . $_SESSION['data']->token
        ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 4) {
            header("Location: ../home");
        } else {
            echo "Error al editar direccion";
        }
    }
    public function obtenerDireccion($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/'.$id,
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
            echo "Error al obtener direccion";
        }
    }

    public function eliminarDireccion($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/'.$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'DELETE',
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $_SESSION['data']->token,
            'Cookie: XSRF-TOKEN=eyJpdiI6Ii9kTi9JZm9TL0FURDZmNmE0WnZzVVE9PSIsInZhbHVlIjoidC9RcXd1cHJrNmNURGlncnN5OG5nYmxWZmNxUmZhUzJ2K2xLaEZ1YzZLdGpLaE9MMEhQVXgvM1BGbUIzSUVJTk1lM0dpczBJWUJpckxha3gyZjVzaFdNTzdCVUVBV3c1UGZtV2pQK2FXb21XbWhLSWNrREVKaVBCcVRtRVpPLzUiLCJtYWMiOiI5MTY2MDU4OTc4ODBjNGNjNmZmYmQ0ZDMxNDAzN2E2ZjFlODNhM2I4MjlkYjE3YjRkYTdjZTM3M2MxYTk2MjE4IiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6ImpPc0JNUmVNQ0hmR21CRndYOFlCb3c9PSIsInZhbHVlIjoibXVaa2RDaEY0STVENEJQYkpUbC9TK3FIMExMd1hwYjZJcm5JVnpVZTcyZVNSdXRrR1NFRWljK3RnWnp6am9RUndwR2l6cFoxUFY5UkdpR2J3SnJObWtFTnhDUGd4d2hxVU42NldESVgzN25LK0JHVEpxZDF3L291cThGQU5TT28iLCJtYWMiOiJiZjM2MmZhZWU0MGYzMWNkNDk4ZDAwYjUwYmYwZTA0N2VmZDY2MWMyYjA2NzY0NTE5MzlmNjcxZjQwZTk3OWQ4IiwidGFnIjoiIn0%3D'
          ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if (isset($response->message) && $response->code === 2) {
            header("Location: ../home");
        } else {
            echo "Error al eliminar direccion";
        }
    }
}

?>