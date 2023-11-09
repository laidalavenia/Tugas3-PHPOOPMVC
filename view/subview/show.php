<div class="d-flex justify-content-center pt-3">
    <?php
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
                <input type="text" class="form-control" id="nameInput" value="<?= $student['name'][0]; ?>" name="name" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="emailInput" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emailInput" value="<?= $student['email'][0]; ?>" name="email" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="roleInput" class="col-sm-2 col-form-label">Role: </label>
            <div class="col-4">
                <input type="text" class="form-control" id="roleInput" value="<?= $student['role_name'][0]; ?>" name="role_name" disabled>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="edit?id=<?= $student['id'][0]; ?>" type="button" class="btn btn-warning px-5">Edit</a>
        </div>
    </div>
    <?php
        } else {
            titleheader('Data kosong!', 'h3', 'mt-5 pt-5');
        }
    ?>
</div>