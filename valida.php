<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];   
    $senha = $_POST["senha"];
    $pin = $_POST['pin'];
    
    
    // elimina os erros mais comuns na digita��o de e-mails
    $email = str_replace (" ", "", $email);
    $email = str_replace ("/", "", $email);
    $email = str_replace ("@.", "@", $email);
    $email = str_replace (".@", "@", $email);
    $email = str_replace (",", ".", $email);
    $email = str_replace (";", ".", $email);

    $erro=0;

    echo $email." ";


    
        if(empty($nome))
        {
            $erro=1;
            
        }
    
        // verifica email
        elseif (strlen($email)<8 || substr_count($email, "@")!=1  || substr_count($email, ".")==0)
        {
            $erro=1;
            
        }
        // verifica senha
        elseif(strlen($senha)<5 || strlen($senha)>15)
        {
            $erro=1;
            
        }
    
        elseif (strstr ($senha, ' ')!=FALSE)
        {
            $erro=1;
            
        }
        elseif(strlen($pin)<4 || strlen($pin)>6)
        {
            $erro=1;
            
        }
    
        elseif (strstr ($pin, ' ')!=FALSE)
        {
            $erro=1;
            
        }

    
    // se ocorreu erro, exibe a mensagem de erro
    if($erro)
    {
        echo "<html><body>";       

        echo "não tente burlar o sistema, acesse como usuario";
        echo "<p align=center><a href='javascript:history.back()'>Voltar</a></p>";
        echo "</body></html>";
    }
    else
    {
        // tratar os dados aqui (ex: gravar no banco de dados)
        echo "<html><body>";
        
        echo "<p align=center>Seu login foi realizado com sucesso!</p>";
        echo "</body></html>";
    }
        





    

    
    
   
?>