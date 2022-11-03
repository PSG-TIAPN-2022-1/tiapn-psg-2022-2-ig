<?php 
include 'inc/config.php';
include 'inc/session.php';

// consultas trazendo do painel_usuarios
$consulta = $pdo->query("SELECT * FROM painel_usuarios WHERE usr_email = '".$_SESSION['email'] ."'")->fetch(PDO::FETCH_ASSOC);
$g_cpf = $consulta['usr_cpf'];
$g_email = $consulta['usr_email'];

?>

<form method="POST" enctype="multipart/form-data">
<?php 
if(isset($_POST['enviar'])){
$documento = $_POST['documento'];

$arquivo = $_FILES['docs'];
for($cont =0; $cont < count($arquivo['name']); $cont++){
    $diretorio = "uploads/";
    $nome_arquivo = $arquivo['name'][$cont];
    $destino = $diretorio . $arquivo['name'][$cont];
    if(move_uploaded_file($arquivo['']))
}

if(!empty($_POST['enviar'])){




}

}

?>

<label>CPF para enviar:</label>
<input type="text" name="cpf_enviar">
<br><br>


<label>ee</label>
<input type="file" name="docs[]" multiple="multiple">
<br><br>


<button type="submit" name="enviar">Enviar</button>

</form>


