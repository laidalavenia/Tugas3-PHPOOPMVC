<?php
function view($page, $data=[]) {
    include 'view/'.$page.'.php';
}

function fetchDataToTable($data) {
    $i = 0;
    $j = 1;
    if (count($data) > 0) {
        while ($i < count($data['id'])) {
            echo "<tr>";
            echo "<td>" . $j . "</td>";
            for ($k= 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $uid = $data['id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="show?id=$uid" type="button" class="btn btn-primary mx-1">Tampilkan</a>
                    <a href="edit?id=$uid" type="button" class="btn btn-warning mx-1">Ubah</a>
                    <a href="rem?id=$uid" type="button" class="btn btn-danger mx-1">Hapus</a>
                </td>
            EOD;
            echo "</tr>";
            $i++;
            $j++;
        }
    }
}

function titleheader($string, $type, $classValues='') {
    echo 
    "<$type" . " class=\"$classValues\"" . ">" . 
        $string . 
    "</$type>";
}
?>