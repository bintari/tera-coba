<?= $this->extend('layout');?>
<?php $this->section('content');?>

<h1>Halaman Siswa</h1>
<?php 
foreach($kelas as $value){
    echo $value.'<br>';}?>
    <?php $this->endSection();?>