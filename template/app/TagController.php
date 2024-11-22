<?php
session_start();
if (isset($_POST['add'])) {
    if (
        strlen($_POST['name']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['slug']) > 0
    ) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];

        $addTagController = new TagController();
        $addTagController->addTag($name, $description, $slug);

    } else {
        echo "No se permiten campos vacios.";
    }
}
;

if (isset($_POST['editar'])) {
    if (
        strlen($_POST['name']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['slug']) > 0
    ) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];
        $id = $_POST['id'];

        $editTagController = new TagController();
        $editTagController->editTag($name, $description, $slug, $id);

    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class TagController
{
    public function addTag($name, $description, $slug)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name, 'description' => $description, 'slug' =>  $slug),
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
            echo "Error. No se añadio la etiqueta";
        }
    }

    public function editTag($name, $description, $slug, $id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => "name=$name&description=$description&slug=$slug&id=$id",
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/x-www-form-urlencoded',
              "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if ($response->code === 4) {
            header("Location: ../home");
        } else {
            echo "Error. No se edito la etiqueta";
        }
    }

    public function obtenerEtiquetas()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
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
            echo "Error al obtener etiquetas";
        }
    }

    public function obtenerEtiquetaEspecifica($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags/'.$id,
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
            echo "Error al obtener la etiqueta";
        }
    }

    public function eliminarEtiqueta($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags/'.$id,
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

        if ($response->code === 2) {
            header("Location: ../home");
        } else {
            echo "Error. No se eliminó la etiqueta";
        }
    }
}

?>