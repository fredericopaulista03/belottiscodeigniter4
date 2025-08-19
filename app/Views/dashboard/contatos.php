<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo " Vagas Disponíveis"; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('css'); ?>

<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.css" rel="stylesheet"
    integrity="sha384-Ccfn4Q+lSKOnc8aSEmH6a7E86lIPrWNrlksJJtb0Qwehi6Fh15cBiKczAAR1N/df" crossorigin="anonymous">

<?php echo $this->endSection(); ?>
<?php echo $this->section('content'); ?>

<h1>Contatos Recebidos</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
        <th>Data</th>
    </tr>
    <?php foreach($contatos as $c): ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['nome'] ?></td>
        <td><?= $c['email'] ?></td>
        <td><?= $c['mensagem'] ?></td>
        <td><?= $c['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php echo $this->endSection(); ?>

<?php echo $this->section('js'); ?>

<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.js"
    integrity="sha384-2ftx+0uRJCp41Pvj+ereTHIGMU9w/u1uTH6Pr1l5fHn66JJgc8Xs6r1zCtF7+qb6" crossorigin="anonymous">
</script>
<script>
$('#table').DataTable({
    order: [],
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        paginate: {
            first: "<<",
            previous: "<",
            next: ">",
            last: ">>"
        },
        // Outras traduções (opcional)
        search: "Pesquisar:",
        zeroRecords: "Nenhum registro encontrado",
        info: "Mostrando _START_ a _END_ de _TOTAL_ registros"
    }
});
</script>
<?php echo $this->endSection(); ?>