<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html><html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    $meta = array(
        array(
                'name'    => 'robots',
                'content' => 'no-cache'
        ),
        array(
                'name'    => 'description',
                'content' => 'VanHorn Bostick Family Linage. The story of the four families from Norway, England and the transistion from Europe to America'
        ),
        array(
                'name'    => 'keywords',
                'content' => 'DNA, Ancestry, England, Germany, Norway, history, names, cousin, great-grandfather, mother, father, relatives, New Jersey, arrival, sailing ships, Sweden, hapalogs, haplogroup, STR, allele, SNP, ancestors, YSEQ'
        ),
        array(
                'name'    => 'author',
                'content' => 'Brad VanHorn'
        ),
        array(
                'name'    => 'generator',
                'content' => 'Atom'
        )
    );
    echo meta($meta);
    ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>" media="screen">    
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/vert/vertical-tabs.css');?>">
  </head>
