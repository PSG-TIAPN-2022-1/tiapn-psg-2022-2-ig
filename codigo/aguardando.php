<?php 
include 'inc/config.php';
if(isset($_SESSION['logado'])){ header("Location:index"); exit(); }




$g_cpf = $_GET['cpf'];

$q_busca = $pdo->query("SELECT * FROM painel_usuarios WHERE usr_cpf = '".$g_cpf."'")->fetch(PDO::FETCH_ASSOC);;
$str_email = $q_busca['usr_email'];
//$data_of = date('d/m/Y H:i:s',  strtotime($q_busca['usr_data']));

//$data = '2019-09-23 12:30:00';
$duracao = '00:10:00';
$v = explode(':', $duracao);
$data_fim = date('Y-m-d H:i:s', strtotime("{$q_busca['usr_data']} + {$v[0]} hours {$v[1]} minutes {$v[2]} seconds"));

$data_agora = date('Y-m-d H:i:s');

/*if($data_agora > $data_fim){
    echo "tempo agora excedeu tempo limite";
}else{
    echo "dentro do tempo";
}

echo "<br>";
echo $data_agora;
echo "<br>";
echo $data_fim;*/
?>
<br><br>
Assinatura: <?= $q_busca['usr_assinatura'];?>
<Br>
Status: <?= $q_busca['usr_status'];?>
<br>
Data cadastro: <?= $q_busca['usr_data'];?>
<br>
Data limite: <?= $data_fim;?>
<hr>

<h1>Clique no botão abaixo para concluir seu registro:</h1>
<form method="POST">
<?php 

if(isset($_POST['concluir'])){

if($data_agora > $data_fim){
    echo "Tempo excedido para validação.";
}else{
mkdir(__DIR__.'/uploads/'.$g_cpf.'/', 0777, true);

    echo "<button class='btn btn-success'>Cadastro ativo!</button>";
    echo '<meta http-equiv="refresh" content="2; url=index" />';

    $muda = $pdo->query("UPDATE painel_usuarios SET usr_status = 'ativo'");

}
}

?>
<input type="submit" value="Concluir" name="concluir">

</form>

<p>Valido por 10 minutos.</p>
