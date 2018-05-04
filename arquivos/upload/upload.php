<form method="POST" enctype="multipart/form-data"> <!--Diz que vai receber o conteúdo do arquivo (binário) e não o nome (string)-->
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>
<?php
    //Quando subimos um arquivo, é enviado por pacotes (pois pode ser grande) para uma pasta temporária. 
    //Quando acaba, movemos o arquivo para o destino físico final
    if($_SERVER["REQUEST_METHOD"] === "POST"){ //Verifica qual o método utilizado
        $file = $_FILES["fileUpload"]; //Superglobal que pega os arquivos enviados de um formulário ($_POST é para string)
        
        if($file["error"]){ //Verifica se houve um erro
            throw new Exception("Error: " . $file["error"]); //Lança uma exceção com a msg do erro
            
        }

        $dirUp = "up";
        
        if(!is_dir($dirUp)){ //Criando um diretório para os uploads
            mkdir($dirUp); //Quem criou tem permissão de escrita
        }

        if(move_uploaded_file($file["tmp_name"], $dirUp . DIRECTORY_SEPARATOR . $file["name"])){
            echo "Upload realizado com sucesso!";
        }else{
            throw new Exception("Não foi possível realizar o upload!");
        }

    }

?>