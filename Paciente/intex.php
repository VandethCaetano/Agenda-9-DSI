<?php
include_once 'Paciente.php'; //INCLUDE

$a = new Paciente(); 

// SETTERS
$a->setNome("Maria Alfredo"); 
$a->setRg("00.098.765-55");
$a->setCpf("123.456.789-00");
$a->setEndereco("Avenida Brasil nº000 Jardim Nenhum Centro SP");
$a->setProfissao("Professora");


//GETTERS
echo '<p style="font-family: Arial; font-size: 24px;">Nome: ' . $a->getNome() . '<br>'; 
echo 'RG: ' . $a->getRg() . '<br>'; 
echo 'CPF: ' . $a->getCpf() . '<br>';  
echo 'Endereço: ' . $a->getEndereco() . '<br>'; 
echo 'Profissão: ' . $a->getProfissao() . '<br>'; 
?>
