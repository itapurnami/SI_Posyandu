<?php
    //Cara memanggil basic auth pada header
    //Saya setting username = user , password = password

    if ($_SERVER["PHP_AUTH_USER"] == "user" && $_SERVER["PHP_AUTH_PW"] == "password") {

        //Disini koding untuk komunikasi data dengan database
        $conn = mysqli_connect("localhost","root","","db_project2");
        {
            $nama_anak = $_REQUEST["nama_anak"];
            $id_ibu = $_REQUEST["id_ibu"];
            $tempat_lahir_anak = $_REQUEST["tempat_lahir_anak"];
            $tgl_lahir = $_REQUEST["tgl_lahir"];
            $alamat = $_REQUEST["alamat"];
            $foto = $_REQUEST["foto"];
            $status = $_REQUEST["status"];
            $query = "INSERT INTO db_project2 (nama_anak,id_ibu,tempat_lahir_anak,tgl_lahir,alamat,foto,status)
            VALUES('nama_anak','id_ibu','tempat_lahir_anak','tgl_lahir','alamat',foto','status')";
            $result = $conn->query($query);
            // result data
            if($result){
                $data["message"] = "data saved successfully";
                $data["status"] = "Ok";
                echo json_encode($data);
            }else{
                $data["message"] = "data not saved successfully";
                $data["status"] = "Error";
                echo json_encode($data);
            }
            // close connection
            $conn->close();

        }else{
                $data["message"] = "Request method not supported";
                $data["status"] = "Error";
                echo json_encode($data);
        }
        } else {
            //Respon jika username dan password salah
            echo "Request is not authenticated";
    }

?>