<?php
session_start();
if (isset($_POST['add'])) {
    if (
        strlen($_POST['name']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['slug']) > 0 &&
        strlen($_POST['category_id']) > 0
    ) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];
        $category_id = $_POST['category_id'];

        $addCategoryController = new CategoryController();
        $addCategoryController->addCategory($name, $description, $slug, $category_id);

    } else {
        echo "No se permiten campos vacios.";
    }
}
;

if (isset($_POST['editar'])) {
    if (
        strlen($_POST['name']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['slug']) > 0 &&
        strlen($_POST['category_id']) > 0
    ) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];
        $category_id = $_POST['category_id'];
        $id = $_POST['id'];

        $editCategoryController = new CategoryController();
        $editCategoryController->editCategory($id, $name, $description, $slug, $category_id);

    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class CategoryController{
    public function addCategory($name, $description, $slug, $category_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('name' => $name,'description' => $description,'slug' => $slug,'category_id' => $category_id),
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
            echo "Error. No se añadio la categoria";
        }
        
    }

    public function editCategory($id, $name, $description, $slug, $category_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => "id=$id&name=$name&description=$description&slug=$slug&category_id=$category_id",
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
            echo "Error. No se editó la categoria";
        }
        
    }

    public function obtenerCategorias(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
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
            echo "Error al obtener categorias";
        }
        
    }

    public function obtenerCategoriaEspecifica($category_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories/'.$category_id,
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
            echo "Error al obtener categoria";
        }
        
    }

    public function eliminarCategoria($category_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories/'.$category_id,
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
            echo "Error. No se eliminó la categoria";
        }
        
    }
}
?>