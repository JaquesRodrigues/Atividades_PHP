<?php

include './others/ansiCodes.php';
include './others/professores.php';
include './others/alunos.php';

$livros = ['O Silêncio dos Inocentes', 'O Código Da Vinci', 'Cinquenta Tons de Cinza'];

$Profs = [$Robinson->get_id(), $Jamal->get_id(), $Abella->get_id()];
$Alunos = [$Manoel->get_id(), $James->get_id(), $Jessica->get_id()];

// echo $Robinson->get_id();

echo ANSI_GREEN."SEJA BEM-VINDO(A) AO SISTEMA DE LIVROS DA BIBLIOTECA".ANSI_CLOSE.PHP_EOL;
$lerId = readline(ANSI_BOLD.ANSI_BLUE."-----------DIGITE A SUA ID-->".ANSI_CLOSE.PHP_EOL);

if ($lerId == $Profs[0]) {
    $nome = $Robinson->get_name();
}elseif ($lerId == $Profs[1]) {
    $nome = $Jamal->get_name();
}elseif ($lerId == $Profs[2]) {
    $nome = $Abella->get_name();
}


foreach ($Profs as $prof) {
    if ($lerId == $prof) {
        $count = 1;
        echo ANSI_CYAN.ANSI_BOLD."OLA PREFESSOR(A) $nome QUAL LIVRO DESEJA ALUGAR?.\n".ANSI_CLOSE;
        foreach ($livros as $livro) {
            echo ANSI_BLUE.ANSI_UNDERLINE."$count - $livro\n".ANSI_CLOSE;
            $count++;
        }
        $validarLivro = false;
        while ($validarLivro == false) {
            $livroSelec = readline(ANSI_BLUE.ANSI_BOLD."DIGITE APENAS O NÚMERO-> ".ANSI_CLOSE);
            if ($livroSelec == 1) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
            if ($livroSelec == 2) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
            if ($livroSelec == 3) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
        }
        echo ANSI_BLUE.ANSI_BACKGROUND_WHITE.ANSI_BOLD."OBRIGADO POR ALUGAR UM LIVRO 💜.\n".ANSI_CLOSE;
        echo ANSI_YELLOW."SEU RECIBO---------------------------------\nNOME DO LIVRO: $livroSelec\nQUEM ALUGOU: $nome\nTEMPO DE DEVOLUÇÃO DO LIVRO: 10 DIAS".ANSI_CLOSE;
        return;
    }
}

if ($lerId == $Alunos[0]) {
    $nome = $Manoel->get_name();
}elseif ($lerId == $Alunos[1]) {
    $nome = $James->get_name();
}elseif ($lerId == $Alunos[2]) {
    $nome = $Jessica->get_name();
}


foreach ($Alunos as $aluno) {
    if ($lerId == $aluno) {
        $count = 1;
        echo ANSI_YELLOW.ANSI_BOLD."OLA ALUNO(A) $nome QUAL LIVRO DESEJA ALUGAR?\n".ANSI_CLOSE;
        foreach ($livros as $livro) {
            echo ANSI_BLUE.ANSI_UNDERLINE."$count - $livro\n".ANSI_CLOSE;
            $count++;
        }
        $validarLivro = false;
        while ($validarLivro == false) {
            $livroSelec = readline("DIGITE APENAS O NÚMERO-> ");
            if ($livroSelec == 1) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
            if ($livroSelec == 2) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
            if ($livroSelec == 3) {
                $livroSelec = $livros[0];
                echo ANSI_BLUE.ANSI_UNDERLINE."VOCÊ SELECIONOU O LIVRO \"$livroSelec\"\n".ANSI_CLOSE;
                $validarLivro = true;
            }
        }
        echo ANSI_BLUE.ANSI_BACKGROUND_WHITE.ANSI_BOLD."OBRIGADO POR ALUGAR UM LIVRO 💜.\n".ANSI_CLOSE;
        echo ANSI_YELLOW."SEU RECIBO---------------------------------\nNOME DO LIVRO: $livroSelec\nQUEM ALUGOU: $nome\nTEMPO DE DEVOLUÇÃO DO LIVRO: 3 DIAS".ANSI_CLOSE;
        return;
    }
}


echo ANSI_BACKGROUND_RED.ANSI_BLACK.ANSI_BOLD.ANSI_UNDERLINE."ID INVALIDA".ANSI_CLOSE;
?>
