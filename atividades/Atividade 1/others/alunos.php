<?php 
class Aluno {
    public $nomeAluno;
    public $id;

    // nome do aluno
    function set_name($name) {
        $this->nomeAluno = $name;
      }
    function get_name() {
        return $this->nomeAluno;
      }
    //   ----------------------------

    // id do aluno
    function set_id($id) {
        $this->id = $id;
      }
    function get_id() {
        return $this->id;
      }
    //   ----------------------------
}

// 1° Aluno
$Manoel = new Aluno();
$Manoel-> set_name('Manoel');
$Manoel-> set_id(456);

// 2° Aluno
$James = new Professor();
$James-> set_name('James');
$James-> set_id(654);

// 3° Aluno
$Jessica = new Professor();
$Jessica-> set_name('Jessica');
$Jessica-> set_id(546);


?>