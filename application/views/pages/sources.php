<body id="sources">
  <header class="m-main">
    <h1 class="m-main--head"><?php echo $head ;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
      <article class="ancestry">
        <h2>Reading and Data Sources</h2>
        <p>This is the backup sources, and reading sources for data on the site</p>
      </article>

      <article class="wrap">
        <div class="col-12">
          <h3>Historical</h3>
          <ul>
            <?php
              foreach($history as $row)
              {
                echo "<li>" . $row->family, nbs(5), anchor($row->url, $row->name) . "</li>";
              }

            ?>


          </ul>
        </div>
        <div class="col-12">
          <h3>DNA Sources</h3>
          <ul>
            <?php
              foreach($dna as $row)
              {
                echo "<li>" . $row->family, nbs(5), anchor($row->url, $row->name) . "</li>";
              }

            ?>


          </ul>
        </div>
      </article>


    </div>
  <div class="flex-small">
    <section class="wrapper">
        <?php include(APPPATH . "/views/pages/includes/side.php");?>
    </section>
  </div>
</div>
