<div class="container mt-5">

<div class="col-xl-12">
<input type="text" class="input-pesquisa col-xl-12">
</div>

<div style="background-color: transparent; border: none;" class="card col-xl-12 mt-5">

<?php 
$stmt = $pdo->prepare("SELECT * FROM painel_documentos WHERE usr_status = 'ativo' ORDER BY usr_id DESC");
$stmt->execute();
while($query = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<p style="float: right">
<button type="button" class="btn btn-warning btn-mid col-xl-12 align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $query['usr_id'];?>">
<span style="color: #BEF9EE; float: left;" class="m-3"><?= $query['usr_documento'];?></span>
<span style="color: #BEF9EE; float: right;" class="m-3"><i class="fas fa-download"></i> </span>
</button>
</p>
<?php } ?>
</div>

<?php 
$stmt = $pdo->prepare("SELECT * FROM painel_documentos WHERE usr_status = 'ativo' ORDER BY usr_id DESC");
$stmt->execute();
while($query = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<div class="modal fade" id="exampleModal<?= $query['usr_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog ">
<div class="modal-content modal-dia">
<div class="modal-header">
<h1 class="modal-title fs-5 cor-azu"> <?= $query['usr_documento'];?></h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<p class="cor-azu"><b>Responsável:</b> <?= $query['usr_responsavel'];?></p>
<p class="cor-azu"><b>Representado:</b><?= $query['usr_responsavel'];?></p>
<p class="cor-azu"><b>Responsável:</b></p>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-info text-white" style="background-color: #367599; border-radius: 16px; border: none;">Salvar alterações</button>
</div>
</div>
</div>
</div>
<?php } ?>



</div>


</div>