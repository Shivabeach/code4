<body>
 <header class="m-main">
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex1">
    <?php $this->load->view("nav/navigate");?>
  </div>
  <div class="flex-large">
    <div class="box box1">@orangep  </div>
    <div class="box box2">@articleblue</div>
    <div class="box box3">@cream</div>
    <div class="box box4">@ltgreen</div>
    <div class="box box5">@shadegreen</div>
    <div class="box box6">@greenp</div>
    <div class="box box7">@limep</div>
  </div>
  <div class="flex-small">
    <section class="wrapper">
      <?php include(APPPATH . "/views/pages/includes/side.php"); ?>
    </section>
  </div>
</div>
