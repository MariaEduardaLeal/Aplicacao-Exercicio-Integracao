<?php

$conexao = pg_connect("host=alunosfpb.postgresql.dbaas.com.br port=5432 dbname=alunosfpb user=alunosfpb password=Alunos@2023") or
//conecta a um banco de dados chamado "flavia" na máquina "ovelha" com um usuário e senha
die ("Não foi possível conectar ao servidor PostGreSQL");
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
echo "Conexão efetuada com sucesso!!";
?>

