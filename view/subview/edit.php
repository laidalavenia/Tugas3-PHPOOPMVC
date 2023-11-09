<form class="d-flex justify-content-center pt-3" action="edit?id=<?=$_GET['id']?>&action=save" method="post">
    <?php
        $roles = $data['roles'];
        $student = $data['student'];
        if (count($student) > 0) {
    ?>
    <div class="col-sm-4">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">NIM: </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="idInput" value="<?= $student['id'][0]; ?>" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Nama: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nameInput" value="<?= $student['name'][0]; ?>" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="emailInput" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emailInput" value="<?= $student['email'][0]; ?>" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="roleInput" class="col-sm-2 col-form-label">Role: </label>
            <div class="col-sm-10">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle role-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="roleDropdown">
                        <?= $student['role_name'][0]; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        for ($i = 0; $i < count($roles['id']); $i++) {
                            ?>
                            <li>
                                <a class="dropdown-item role-item" href="#" data-role-id="<?= $roles['id'][$i]; ?>"><?= $roles['role_name'][$i]; ?></a>
                                <input type="hidden" name="role_fk" class="role-fk-hidden" value="<?= $roles['id'][$i]; ?>">
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-success px-5">Simpan</button>
        </div>
    </div>
    <?php
        } else {
            titleheader('Data kosong!', 'h3', 'mt-5 pt-5');
        }
    ?>
</form>
<script>
    $(document).on('click', '.role-item', function() {
        let roleId = this.dataset.roleId;
        $('.role-toggle').text($(this).text());
        $('.role-input').val(roleId);
        $('.role-fk-hidden').val(roleId);
        event.preventDefault();
    });
</script>