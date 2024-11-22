<?php
session_start();

if (isset($_POST['add'])) {
    if (
        strlen($_POST['description']) > 0 &&
        strlen($_POST['code']) > 0 &&
        strlen($_POST['weight_in_grams']) > 0 &&
        strlen($_POST['status']) > 0 &&
        strlen($_POST['stock']) > 0 &&
        strlen($_POST['stock_min']) > 0 &&
        strlen($_POST['stock_max']) > 0 &&
        strlen($_POST['product_id']) > 0 &&
        strlen($_POST['amount']) > 0 &&
        isset($_FILES["imagen"])
    ) {
        $description = $_POST['description'];
        $code = $_POST['code'];
        $weight_in_grams = $_POST['weight_in_grams'];
        $status = $_POST['status'];
        $stock = $_POST['stock'];
        $stock_min = $_POST['stock_min'];
        $stock_max = $_POST['stock_max'];
        $product_id = $_POST['product_id'];
        $amount = $_POST['amount'];

        $imagenNombreTemp = $_FILES["imagen"]["tmp_name"];
        $imagenNombre = $_FILES["imagen"]["name"];
        $imagenRutaLocal = "/htdocs/Proyecto-4ta-Unidad/template/assets/images/$imagenNombre";

        if (move_uploaded_file($imagenNombreTemp, $imagenRutaLocal)) {
            $addPresentationController = new PresentationController();
            $addPresentationController->addPresentation($description, $code, $weight_in_grams, $status, $stock, $stock_min, $stock_max, $product_id, $amount, $imagenRutaLocal);
        } else {
            echo "Error. Ingresa una imagen valida";
        }
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

if (isset($_POST['editar'])) {
    if (
        strlen($_POST['description']) > 0 &&
        strlen($_POST['code']) > 0 &&
        strlen($_POST['weight_in_grams']) > 0 &&
        strlen($_POST['status']) > 0 &&
        strlen($_POST['stock']) > 0 &&
        strlen($_POST['stock_min']) > 0 &&
        strlen($_POST['stock_max']) > 0 &&
        strlen($_POST['product_id']) > 0 &&
        strlen($_POST['id']) > 0 &&
        strlen($_POST['amount']) > 0 
    ) {
        $description = $_POST['description'];
        $code = $_POST['code'];
        $weight_in_grams = $_POST['weight_in_grams'];
        $status = $_POST['status'];
        $stock = $_POST['stock'];
        $stock_min = $_POST['stock_min'];
        $stock_max = $_POST['stock_max'];
        $product_id = $_POST['product_id'];
        $id = $_POST['id'];
        $amount = $_POST['amount'];

        $editPresentationController = new PresentationController();
        $editPresentationController->editPresentation($description, $code, $weight_in_grams, $status, $stock, $stock_min, $stock_max, $product_id, $id, $amount);

    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class PresentationController{
    public function addPresentation($description, $code, $weight_in_grams, $status, $stock, $stock_min, $stock_max, $product_id, $amount, $imagenRutaLocal){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('description' => $description,'code' => $code,'weight_in_grams' => $weight_in_grams,'status' => $status,'cover'=> new CURLFILE($imagenRutaLocal),'stock' => $stock,'stock_min' => $stock_min,'stock_max' => $stock_max,'product_id' => $product_id,'amount' => $amount),
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
            echo "Error. No se añadio al producto";
        }
    }

    public function editPresentation($description, $code, $weight_in_grams, $status, $stock, $stock_min, $stock_max, $product_id, $id, $amount){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => "description=$description&code=$code&weight_in_grams=$weight_in_grams&status=$status&stock=$stock&stock_min=$stock_min&stock_max=$stock_max&product_id=$product_id&id=$id&amount=$amount",
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
            echo "Error. No se editó al producto";
        }
    }

    public function obtenerPresentacionesPorProducto($product_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/'.$product_id,
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
            echo "Error al obtener presentaciones";
        }
    }

    public function obtenerPresentacionEspecifica($presentation_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'.$presentation_id,
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
            echo "Error al obtener presentacion";
        }
    }

    public function eliminarPresentacion($presentation_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'.$presentation_id,
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
            echo "Error. No se eliminó al producto";
        }
    }
}
?>