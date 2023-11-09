<?php $roles = $data['roles']; ?>
<div class="dropdown-center d-flex justify-content-center">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
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
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody class="student-list">
    </tbody>
</table>
<script>
    $(document).on('click', '.role-item', function() {
        let roleId = this.dataset.roleId;
        let url = `role?id=${roleId}`;
        $('.role-input').text(roleId);

        $.ajax({
            url: url,
            type: 'GET',
            data: { role_id: roleId },
            success: function(data) {
                let studentList = $('.student-list');
                studentList.empty();
                let result = JSON.parse(data);
                for (let i = 0; i < result.id.length; i++) {
                    console.log(result.id[i]);
                    let row = `<tr>
                        <td>${i+1}</td>
                        <td>${result.id[i]}</td>
                        <td>${result.name[i]}</td>
                        <td>${result.email[i]}</td>
                        <td>${result.role_name[i]}</td>
                    </tr>`;
                    studentList.append(row);                
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });

        event.preventDefault();
    });
</script>