<?php
session_start();
echo $_SESSION['pekerja']['id_pekerja'];
echo $_SESSION['pekerja']['nama'];
echo $_SESSION['admin']['id_pekerja'];
echo $_SESSION['admin']['nama'];
?>