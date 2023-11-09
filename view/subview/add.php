<form class="d-flex justify-content-center pt-3" action="add-data?action=save" method="post">
    <div class="col-sm-4">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">NIM: </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="idInput" name="id">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Nama: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nameInput" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="emailInput" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emailInput" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="roleInput" class="col-sm-2 col-form-label">Role: </label>
            <div class="col-sm-10">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle role-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu">
                        <?php
                            $roles = Roles::select();
                            for ($i = 0; $i < count($roles['id']); $i++) {
                                ?>
                            <a class="dropdown-item role-item" href="#" data-role-id="<?= $roles['id'][$i]; ?>"><?= $roles['role_name'][$i]; ?></a>
														<input type="hidden" name="role_fk" value="<?= $roles['id'][$i]; ?>">
                        <?php
                                echo "</li>";
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
</form>
<script>
		$(document).on('click', '.role-item', function() {
				let roleId = this.dataset.roleId;
        $('.role-toggle').text($(this).text());
        $('.role-input').val(roleId);
        event.preventDefault();
    });
</script>