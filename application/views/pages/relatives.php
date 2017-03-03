<body id="relates">
 <header class="m-main">
    <h1 class="heading"><?php echo $head ;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
    <article class="ancestry">
      <p>This page involves itself with "known family connections". That is to say that everyone on this page has a direct known connection to our family and another family on the Ancestry website. Of the 163 or so connections we have, we will show where these people came from, their relations to us and the time frame in which they lived by their birth date. The localities given are not the birth localities, but where the individual lived at the time of our families connections.</p>
    </article>
    <article class="flex3">
    <div class="box">
      <h3>VanHorns</h3>
      <p>The VanHorn connections, and where they lived</p>
      <?php
      foreach($van as $row){
      $this->table->add_row(
        $row->country,
        $row->Total
      );
      }
      echo $this->table->generate();
      ?>
    </div>
    <div class="box">
      <h3>Bosticks</h3>
      <p>The Bostick connections, and where they lived</p>
      <?php
      foreach($bos as $row){
      $this->table->add_row(
          $row->country,
          $row->Total
        );
      } 
        echo $this->table->generate();
      ?>
    </div>
    </article>
    <article class="flex3">
      <div class="box">
        <h3>VanHorn Relations</h3>
        <p>These two charts indicate how far back we go to connect to our relatives. The 7th Great Grandfather is about 350 years ago(1640-1685). The 6th Great Grandfather is around 315 years ago(1680-1710). Consider the vast number of relatives we have from a 7th GG.</p>
        <?php
        foreach($vangrand as $row){
        $this->table->add_row(
            $row->relationship,
            $row->Total
          );
        }
          echo $this->table->generate();
         ?>
      </div>
      <div class="box">
        <h3>Bostick Relations</h3>
        <?php
        foreach($bosgrand as $row){
        $this->table->add_row(
            $row->relationship,
            $row->Total
          );
        }
          echo $this->table->generate();
         ?>
      </div>
    </article>
    </div>
    <div class="flex-small">
      <section class="wrapper">
          <?php include(APPPATH . "/views/pages/includes/side.php");  ?>
      </section>
    </div>
  </div>
