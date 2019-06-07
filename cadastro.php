<!DOCTYPE html>
<html>

    <head>
        <title>A Web Page</title>
    </head>

    <body>
        <?php
            if(isset($_COOKIE["ultima_visita"]))
                $ultima_visita = $_COOKIE["ultima_visita"];
            
            setcookie("ultima_visita", date('m/d/Y h:i:s a', time()));
            ?>

            

        <form action="realizarcadastro.php" method="POST">
                
        <table style="margin: auto; margin-bottom: 50px; border-spacing: 12px; background-color: gainsboro" border="0"> 

            <tr> 
                <td colspan="1">
                    <label>Usuário</label>
                </td>
                <td colspan="3">
                    <input  style="display:table-cell; width:100%"  type="text" name="usuario">
                </td>
            </tr>

            <tr> 
                <td> 
                    <label>Senha</label>
                </td>

                <td colspan="3"">
                    <input style="display:table-cell; width:100%" type="password" name="senha">
                </td> 
            </tr>

            <tr> 
                <td colspan="1">
                    <label>Nome</label>
                </td>
                <td colspan="3">
                    <input  style="display:table-cell; width:100%"  type="text" name="nome">
                </td>
            </tr>

            <tr> 
                <td> 
                    <label>Email</label>
                </td>

                <td colspan="3"">
                    <input style="display:table-cell; width:100%" type="email" name="email">
                </td> 
            </tr>

            <tr> 
                <td colspan="1">
                    <label>Telefone</label>
                </td>
                <td colspan="3">
                    <input  style="display:table-cell; width:100%"  type="text" name="telefone">
                </td>
            </tr>

            <tr> 
                <td> 
                    <label>Idade</label>
                </td>

                <td colspan="3"">
                    <input style="display:table-cell; width:100%" type="number" name="idade">
                </td> 
            </tr>

            <tr>
                <td >
                    <input type="submit" value="Cadastrar">
                </td>
            </tr>
        </table>
        
    </form>
  
    </body>
    </html>
