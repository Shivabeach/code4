<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <?php foreach($mainContent as $row):?>
      <article class="ancestry">
        <h2 class="ancestryTitle item"><?php echo $row->title;?></h2>
        <div class="ancestryContent item"><?php echo $this->typography->auto_typography($row->content);?> </div>
        <h6 class="ancestryDate"><?php echo $row->date;?></h6>
    </article>
    <?php endforeach;?>
  </div>
  <div class="flex-small">
    <?php include(APPPATH . "/views/nav/nav.php");
    echo current_url(); ?>
  </div>
</div>
