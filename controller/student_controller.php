<?php
require_once 'controller/controllers.php';

class StudentController extends Controller implements CustomFunctions {

    static function index() {
        view('home', ['header' => titleheader('Database Mahasiswa', 'h1', 'text-center mb-3')]);
    }

    static function show($data) {
        view('subview/show', [
            'student' => Students::joinRoles("AND s.id = " . $data),
            'header' => titleheader('Rincian Data Mahasiswa', 'h1', 'text-center mb-3')
        ]);
    }

    static function add() {
        view('subview/add', ['header' => titleheader('Menambah Data Mahasiswa', 'h1', 'text-center mb-3')]);
    }

    static function save() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_fk = $_POST['role_fk'];
        // var_dump($_POST);
        if (Students::insert(intval($id), $name, $email, intval($role_fk))) {
            // header('Location: /mvc-dynamic');
            header('Location: '.BASEURL);
        };
        view('subview/add', ['header' => titleheader('Menambah Data Mahasiswa Gagal', 'h1', 'text-center mb-3')]);
    }
    
    static function edit($data) {
        view('subview/edit', [
            'student' => Students::joinRoles("AND s.id = " . $data),
            'roles' => Roles::select(),
            'header' => titleheader('Mengubah Data Mahasiswa', 'h1', 'text-center mb-3')
        ]);
    }
    
    static function update($data) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_fk = $_POST['role_fk'];
        //var_dump($_POST);
        $result = Students::updateById(intval($data), $name, $email, intval($role_fk));
        if ($result === 'changed') {
            // echo "<script>alert('Data berhasil dirubah'); window.location.href='/mvc-dynamic'; </script>";
            echo "<script>alert('Data berhasil dirubah'); window.location.href=".BASEURL."; </script>";
            exit();
        }
        else if ($result === 'unchanged') {
            // echo "<script>alert('Data tidak ada yang dirubah'); window.location.href='/mvc-dynamic'; </script>";
            echo "<script>alert('Data tidak ada yang dirubah'); window.location.href=".BASEURL."; </script>";
            exit();
            
        } else {
            view('subview/temp', ['header' => titleheader('Mengubah Data Mahasiswa Gagal', 'h1', 'text-center mb-3')]);
        }
    }

    static function remove($data) {
        if (Students::deleteById($data)) {
            // header('Location: /mvc-dynamic');
            header('Location: '.BASEURL);
        }
        else {
            echo "<script>alert('Data tidak ditemukan!'); window.location='/';</script>";
        }
    }
    
    static function purge() {
        if (Students::delete()) {
            StudentController::index();
            titleheader('Terhapuskan!', 'h3', 'text-center mb-3');
        }
        else {
            view('home', ['header' => titleheader('Gagal Mengembalikan Data', 'h1', 'text-center mb-3')]);
        }
    }

    static function restore() {
        if (Students::fresh()) {
            StudentController::index();
            titleheader('Terkembalikan!', 'h3', 'text-center mb-3');
        }
        else {
            view('home', ['header' => titleheader('Gagal Mengembalikan Data', 'h1', 'text-center mb-3')]);
        }
    }
}