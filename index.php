<!DOCTYPE html>
<html>

    <head>
        <title>A Web Page</title>
    </head>

    <body>
        <?php
            $pagina_de_login = "/login.php";
            $ultima_visita = null;
            $user_id = null;

            if(isset($_COOKIE["user_id"])){
                $user_id = $_COOKIE["user_id"];
                header("Location: ".$pagina_de_login);
                die();
            }

            if(isset($_COOKIE["ultima_visita"]))
                $ultima_visita = $_COOKIE["ultima_visita"];    
            
            setcookie("ultima_visita", date('m/d/Y h:i:s a', time()));
            ?>

            

        <form action="login.php" method="POST">
                
        <table style="margin: auto; margin-bottom: 50px; border-spacing: 12px; background-color: gainsboro" border="0"> 
            <tr> <td colspan="6"> 
                <?php if ($ultima_visita) {?>
                    <div>Bem vindo de volta!</div>
                <?php } else { ?>
                    <div>Bem vindo</div>
                <?php }  ?>
                </td>
            </tr>

            <tr > <td colspan="1" > <label>Usuário</label></td> <td colspan="3"> <input  style="display:table-cell; width:100%"  type="text" name="usuario"> </td> </tr>

            <tr> <td> <label>Senha</label></td> <td colspan="3""> <input style="display:table-cell; width:100%" type="password" name="senha"> </td> </tr>

            <tr>
                <td >
                    <input type="submit" value="Entrar">
                </td>
            </tr>
        </table>
        
    </form>
  
    </body>
    </html>
