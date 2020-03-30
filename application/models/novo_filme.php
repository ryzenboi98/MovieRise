<?php
    class novo_filme extends CI_Model
    {
        function get_id($id)
        {
            echo $id;
            echo "<br/>";
            echo "boiiiiiiiiiiiiiiiiiii";

            return $id;
        }

        function inserir_filme()
        {
            chmod("./assets/Imagens_bd/", 0755);
		
            $target_dir = "./assets/Imagens_bd/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if $uploadOk is set to 0 by an error
            
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $data['titulo'] = $this->input->post('titulo');
            $data['descricao'] = $this->input->post('descricao');
            $data['foto'] = basename($_FILES["fileToUpload"]["name"]);;



            $this->db->insert('filmes',$data);
        }

    }
?>