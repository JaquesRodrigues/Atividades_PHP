<?php 
class Professor {
    public $nomeProf;
    public $id;

    // nome do professor
    function set_name($name) {
        $this->nomeProf = $name;
      }
    function get_name() {
        return $this->nomeProf;
      }
    //   ----------------------------

    // id do professor
    function set_id($id) {
        $this->id = $id;
      }
    function get_id() {
        return $this->id;
      }
    //   ----------------------------
}

// 1° Professor
$Robinson = new Professor();
$Robinson-> set_name('Robinson');
$Robinson-> set_id(123);

// 2° Professor
$Jamal = new Professor();
$Jamal-> set_name('Jamal');
$Jamal-> set_id(321);

// 3° Professor
$Abella = new Professor();
$Abella-> set_name('Abella');
$Abella-> set_id(213);


?>