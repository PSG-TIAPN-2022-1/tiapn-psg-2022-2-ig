<?php
// Busca dados da sessão
$q_busca = $pdo->query("SELECT * FROM painel_usuarios WHERE usr_email = '".$_SESSION['email']."'")->fetch(PDO::FETCH_ASSOC);;
$str_nome = $q_busca['usr_nome'];
$str_email = $q_busca['usr_email'];
$str_cpf = $q_busca['usr_cpf'];

?>