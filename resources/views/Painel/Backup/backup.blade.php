<?php

shell_exec('C:\xampp\mysql\bin\mysqldump -u root studiom > C:\Backup_studiom\backup_studiom.sql');

echo  "<script>alert('Backup Realizado com Sucesso!');</script>";

?>