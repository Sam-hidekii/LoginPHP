<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'fern_sam_');
define('SENHA', 'S@mantha27');
define('DB', 'fern_sam');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');