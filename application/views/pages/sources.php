<body id="sources">
 <header class="m-main">
    <h1 class="heading"><?php echo $head ;?></h></h1>
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


    </div>
  <div class="flex-small">
    <section class="wrapper">
        <?php include(APPPATH . "/views/pages/includes/side.php");?>
    </section>
  </div>
</div>
