<?php
session_start();

if (isset($_POST['add'])) {
  if (
    strlen($_POST['name']) > 0 &&
    strlen($_POST['lastname']) > 0 &&
    strlen($_POST['email']) > 0 &&
    strlen($_POST['numero']) > 0 &&
    strlen($_POST['created_by']) > 0 &&
    strlen($_POST['role']) > 0 &&
    strlen($_POST['pwd']) > 0 &&
    isset($_FILES["imagen"])
  ) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $created_by = $_POST['created_by'];
    $role = $_POST['role'];
    $pwd = $_POST['pwd'];

    $imagenNombreTemp = $_FILES["imagen"]["tmp_name"];
    $imagenNombre = $_FILES["imagen"]["name"];
    $imagenRutaLocal = "/htdocs/Proyecto-4ta-Unidad/template/assets/images/$imagenNombre";

    if (move_uploaded_file($imagenNombreTemp, $imagenRutaLocal)) {
      $addUserController = new UserController();
      $addUserController->addUser($name, $lastname, $email, $numero, $created_by, $role, $pwd, $imagenRutaLocal);
    } else {
      echo "Error. Ingresa una imagen valida";
    }
  } else {
    echo "No se permiten campos vacios.";
  }
}
;

if (isset($_POST["editar"])) {
  if (
    strlen($_POST['name']) > 0 &&
    strlen($_POST['lastname']) > 0 &&
    strlen($_POST['email']) > 0 &&
    strlen($_POST['numero']) > 0 &&
    strlen($_POST['created_by']) > 0 &&
    strlen($_POST['role']) > 0 &&
    strlen($_POST['pwd']) > 0
  ) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $created_by = $_POST['created_by'];
    $role = $_POST['role'];
    $pwd = $_POST['pwd'];
    $id = $_POST["id"];
    $editUserController = new UserController();
    $editUserController->editUser($name, $lastname, $email, $numero, $created_by, $role, $pwd, $id);
  }
}

class UserController
{
  public function addUser($name, $lastname, $email, $numero, $created_by, $role, $pwd, $imagenRutaLocal)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('name' => $name, 'lastname' => $lastname, 'email' => $email, 'phone_number' => $numero, 'created_by' => $created_by, 'role' => $role, 'password' => $pwd, 'profile_photo_file' => new CURLFILE($imagenRutaLocal)),
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer " . $_SESSION['data']->token
      ),
    ));

    $response = curl_exec($curl);
    $response = json_decode($response);

    curl_close($curl);

    if ($response->code === 4) {
      header("Location: ../home");
    } else {
      echo "Error. No se añadio al usuario";
    }
  }

  public function editUser($name, $lastname, $email, $numero, $created_by, $role, $pwd, $id)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'PUT',
      CURLOPT_POSTFIELDS => "name=$name&lastname=$lastname&email=$email&phone_number=$numero&created_by=$created_by&role=$role&password=$pwd&id=$id",
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        "Authorization: Bearer " . $_SESSION['data']->token
      ),
    ));

      $response = curl_exec($curl);
      $response = json_decode($response);

      curl_close($curl);

      if ($response->code === 4) {
        header("Location: ../userlist.php");
      } else {
        echo "Error. No se editó al usuario";
      }
  }

  public function obtenerUsuarios()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
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

  public function obtenerDetallesUsuarioEspecifico()
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/' . $_SESSION['data']->id,
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

  public function eliminarUsuario($id)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/' . $id,
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
      echo "Error al eliminar usuario";
    }

  }
}
?>