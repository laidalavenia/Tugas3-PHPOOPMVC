<?php
require_once 'controller/controllers.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';

class StudentController extends Controller{
   static function index(){
       $students = Students::select();
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   } // SHOW ALL
   static function show($data){
       $students = Students::selectById($data);
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   } // SHOW SPECIFIC
   static function add($id, $name, $email, $role_fk){
       $students = Students::insert($id, $name, $email, $role_fk);
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   } // ADD DATA FORM
   static function save(){

   } // SAVE DATA
   static function edit($id, $name, $email, $role_fk){
       $students = Students::updateById($id, $name, $email, $role_fk);
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   } // EDIT SPECIFIC
   static function update($clause){
       $students = Students::updateWhere($clause); //masih belum
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   } // UPDATE DATA
   static function remove($data){
       $students = Students::deleteById($data); //masih belum
       var_dump($students);


       if ($students) {
           var_dump($students);
       } else {
           echo "Gagal mengambil data.";
       }
   }
}