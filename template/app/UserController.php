<?php


class UserController{
    public function obtenerUsuarios(){
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

      if(isset($response->message) && $response->code === 4){
          return $response->data;
      }else{
          echo "Error al obtener detalles";
      } 
    }

    public function obtenerDetallesUsuarioEspecifico(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$_SESSION['data']->id,
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

        if(isset($response->message) && $response->code === 4){
            return $response->data;
        }else{
            echo "Error al obtener detalles";
        }        
    }

    public function eliminarUsuario($id){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$id,
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

      if(isset($response->message) && $response->code === 2){
          header("Location: ../home");
      }else{
          echo "Error al eliminar usuario";
      } 

    }
}
?>