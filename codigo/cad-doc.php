<?php 
include 'inc/config.php';
include 'inc/session.php';

// consultas trazendo do painel_usuarios
$consulta = $pdo->query("SELECT * FROM painel_usuarios WHERE usr_email = '".$_SESSION['email'] ."'")->fetch(PDO::FETCH_ASSOC);
$g_cpf = $consulta['usr_cpf'];
$g_email = $consulta['usr_email'];
$g_responsavel = $consulta['usr_nome'];
//echo $g_cpf;
?>

<form method="POST" enctype="multipart/form-data">
<?php 
if(isset($_POST['enviar'])){

$ip =  $_SERVER['REMOTE_ADDR'];
//$documento = $_POST['documento'];
$cpf_post = $_POST['cpf_post'];
$nome_post = $_POST['nome_post'];
$email_post = $_POST['email_post'];

$arquivo = $_FILES['docs'];
for($cont =0; $cont < count($arquivo['name']); $cont++){
$diretorio = "uploads/$g_cpf/";
$nome_arquivo = $arquivo['name'][$cont];
$destino = $diretorio . $arquivo['name'][$cont];

if(move_uploaded_file($arquivo['tmp_name'][$cont], $destino)){
$query_doc = $pdo->query("INSERT INTO painel_uploads VALUES (null,'".$nome_arquivo."','".$g_cpf."','".$cpf_post."','ativo')");
}
else{
echo "Erro";
}

$data = date('Y-m-d');

$insere_reg = $pdo->query("INSERT INTO painel_documentos VALUES(null,'".$g_cpf."','".$ip."','".$g_responsavel."','".$g_email."','".$nome_post."','".$email_post."','".$nome_arquivo."','".$data."','ativo')");


}
}

?>

<label>CPF para quem será enviado -></label>
<input type="text" name="cpf_post">
<br><br>


<label>Nome de quem será enviado -></label>
<input type="text" name="nome_post">
<br><br>


<label>Email de quem será enviado -></label>
<input type="text" name="email_post">
<br><br>

<label>Documentos para enviar -></label>
<input type="file" name="docs[]" multiple="multiple">
<br><br>




<button type="submit" name="enviar">Enviar</button>

</form>


