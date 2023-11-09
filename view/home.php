<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">.</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            fetchDataToTable(Students::select());
        ?>
    </tbody>
</table>
<div class="d-flex flex-row">
    <form action="<?= BASEURL ?>?action=purge" method="post">
        <button class="btn btn-secondary">Hapus Semua Data</button>
    </form>
    <form action="<?= BASEURL ?>?action=restore" method="post" class="mx-1">
        <button class="btn btn-dark">Kembalikan Semua Data</button>
    </form>
</div>