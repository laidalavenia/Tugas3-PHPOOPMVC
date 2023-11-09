<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';

abstract class Controller {
    abstract static function index(); // SHOW ALL
    abstract static function show($data); // SHOW SPECIFIC
    abstract static function add(); // ADD DATA FORM
    abstract static function save(); // SAVE DATA
    abstract static function edit($data); // EDIT SPECIFIC
    abstract static function update($data); // UPDATE DATA
    abstract static function remove($data);
}

interface CustomFunctions {
    static function purge();
    static function restore();
}

// class StudentController extends Controller{
//     static function index(){
//         $students = Students::select();
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     } // SHOW ALL
//     static function show($data){
//         $students = Students::selectById($data);
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     } // SHOW SPECIFIC
//     static function add($id, $name, $email, $role_fk){
//         $students = Students::insert($id, $name, $email, $role_fk);
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     } // ADD DATA FORM
//     static function save(){

//     } // SAVE DATA
//     static function edit($id, $name, $email, $role_fk){
//         $students = Students::updateById($id, $name, $email, $role_fk);
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     } // EDIT SPECIFIC
//     static function update($clause){
//         $students = Students::updateWhere($clause); //masih belum
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     } // UPDATE DATA
//     static function remove($data){
//         $students = Students::deleteById($data); //masih belum
//         var_dump($students);


//         if ($students) {
//             var_dump($students);
//         } else {
//             echo "Gagal mengambil data.";
//         }
//     }
// }



// class StudentController extends Controller {

//     // Implementasi untuk menampilkan semua data mahasiswa
//     static function index() {
//         // $student = Students::select();
//         // var_dump($student);


//         // if ($student) {
//         //     var_dump($student);
//         // } else {
//         //     echo "Gagal mengambil data.";
//         // }


//         // $students = Students::select(); // Memanggil metode selectAll dari StudentController
//         // foreach ($students as $student) {
//         //     echo "ID: {$student['id']}, Name: {$student['name']}, Email: {$student['email']}, Role FK: {$student['role_fk']}<br>";
//         // }
//     }

//     // Implementasi untuk menampilkan data mahasiswa berdasarkan ID
//     static function show($id) {
//         // $student = Students::show($id);
//         // var_dump($student);


//         // if ($student) {
//         //     var_dump($student);
//         // } else {
//         //     echo "Gagal mengambil data.";
//         // }


//         // $student = Students::show($id); // Memanggil metode selectById dari StudentController
//         // echo "ID: {$student['id']}, Name: {$student['name']}, Email: {$student['email']}, Role FK: {$student['role_fk']}<br>";
//     }

//     // Implementasi untuk menampilkan formulir tambah data mahasiswa
//     static function add() {
//         echo "Tampilkan formulir tambah data mahasiswa<br>";
//     }

//     // Implementasi untuk menyimpan data mahasiswa baru
//     static function save($name, $email, $role_fk) {
//         Students::save($name, $email, $role_fk); // Memanggil metode insert dari StudentController
//         echo "Data mahasiswa berhasil disimpan<br>";
//     }

//     // Implementasi untuk menampilkan formulir edit data mahasiswa
//     static function edit($id) {
//         $student = Students::edit($id); // Memanggil metode selectById dari StudentController
//         echo "Tampilkan formulir edit data mahasiswa untuk ID: {$student['id']}<br>";
//     }

//     // Implementasi untuk menyimpan data mahasiswa yang sudah diedit
//     static function update($id, $name, $email, $role_fk) {
//         Students::update($id, $name, $email, $role_fk); // Memanggil metode updateById dari StudentController
//         echo "Data mahasiswa berhasil diperbarui<br>";
//     }

//     // Implementasi untuk menghapus data mahasiswa berdasarkan ID
//     static function remove($id) {
//         Students::deleteById($id); // Memanggil metode deleteById dari StudentController
//         echo "Data mahasiswa berhasil dihapus<br>";
//     }
// }
