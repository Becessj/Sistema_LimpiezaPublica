<?php
    require '../../model/model_responsable.php';
    $MU = new Modelo_Responsable(); //Instanciamos
    $consulta = $MU->Listar_Responsable();
    if($consulta){
        echo json_encode($consulta);
    }else{
        echo '{
            "sEcho": 1,
            "iTotalRecords": "0",
            "iTotalDisplayRecords": "0",
            "aaData": []
        }';
    }





?>
