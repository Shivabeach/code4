<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
  <?php include("update.php");?>
  </div>
  <div class="flex-small">
    <section class="wrapper">
      <article>
        <?php
        if($this->session->userdata('name') == true){
            echo "Hello " .  $this->session->userdata('name');
        }else {
          echo "no session";
        }?>
      </article>
      <article>
        <div id="display"></div>
      </article>
      <article>
        <span>Chars Count: </span> <span id=feedback> </span>
        <hr>
        Total word Count : <span id="display_count">0</span>
        <hr>
      </article>
      <article>
        <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
      </article>
    </section>
  </div>
</div>
