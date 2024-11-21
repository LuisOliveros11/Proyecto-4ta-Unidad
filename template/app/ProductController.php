<?php
session_start();

if (isset($_POST['add'])) {
    if (
        strlen($_POST['name']) > 0 &&
        strlen($_POST['slug']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['features']) > 0 &&
        strlen($_POST['brand_id']) > 0 &&
        strlen($_POST['categories']) > 0 &&
        strlen($_POST['tags']) > 0 &&
        isset($_FILES["imagen"])
    ) {
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $features = $_POST['features'];
        $brand_id = $_POST['brand_id'];
        $categories = $_POST['categories'];
        $tags = $_POST['tags'];

        $imagenNombreTemp = $_FILES["imagen"]["tmp_name"];
        $imagenNombre = $_FILES["imagen"]["name"];
        $imagenRutaLocal = "C:/xampp/htdocs/Proyecto-4ta-Unidad/template/assets/images/$imagenNombre";

        if (move_uploaded_file($imagenNombreTemp, $imagenRutaLocal)) {
            $addProductController = new ProductController();
            $addProductController->addProduct($name, $slug, $description, $features, $brand_id, $categories, $tags, $imagenRutaLocal);
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
        strlen($_POST['name']) > 0 &&
        strlen($_POST['slug']) > 0 &&
        strlen($_POST['description']) > 0 &&
        strlen($_POST['features']) > 0 &&
        strlen($_POST['brand_id']) > 0 &&
        strlen($_POST['id']) > 0 &&
        strlen($_POST['categories']) > 0 &&
        strlen($_POST['tags']) > 0
    ) {
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $features = $_POST['features'];
        $brand_id = $_POST['brand_id'];
        $id = $_POST['id'];
        $categories = $_POST['categories'];
        $tags = $_POST['tags'];
        $editProductController = new ProductController();
        $editProductController->editProduct($name, $slug, $description, $features, $brand_id, $id, $categories, $tags);
    } else {
        echo "No se permiten campos vacios.";
    }
}
;

class ProductController
{
    public function addProduct($name, $slug, $description, $features, $brand_id, $categories, $tags, $imagenRutaLocal)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name, 'slug' => $slug, 'description' => $description, 'features' => $features, 'brand_id' => $brand_id, 'cover' => new CURLFILE($imagenRutaLocal), 'categories' => $categories, 'tags' => $tags),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if ($response->code === 4) {
            header("Location: ../products.php");
        } else {
            echo "Error. No se añadio al producto";
        }
    }

    public function editProduct($name, $slug, $description, $features, $brand_id, $id, $categories, $tags)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => "name=$name&slug=$slug&description=$description&features=$features&brand_id=$brand_id&id=$id&categories=$categories&tags=$tags",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: Bearer " . $_SESSION['data']->token
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        curl_close($curl);

        if ($response->code === 4) {
            header("Location: ../productsDetails.php");
        } else {
            echo "Error. No se editó al producto";
        }
    }
    public function deleteProduct($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/' . $id,
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
            header("Location: ../products.php");
        } else {
            echo "Error. No se eliminó al producto";
        }
    }

    public function obtenerProductos()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
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
            echo "Error al obtener productos";
        }
    }

    public function obtenerProductoSlug($slug)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/slug/' . $slug,
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
            echo "Error al obtener producto";
        }
    }
}
?>