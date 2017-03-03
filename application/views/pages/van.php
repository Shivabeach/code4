<body id="van">
  <header class="m-main">
    <h1 class="heading"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex1">
    <?php $this->load->view("nav/navigate");?>
  </div>
  <div class="flex-large">
    <?php foreach($mainContent as $row):?>
      <?php $content = htmlspecialchars_decode($row->content);?>
      <?php $slug    = htmlspecialchars_decode($row->slug);?>
      <div class="ancestry--container">
        <article class="ancestry">
          <h3 class="ancestry--ancestryTitle item"><?php echo $row->title;?></h3>
          <?php echo $slug; ?>
          <button class="grab">Read</button>
          <div class="ancestry--ancestryContent item"><?php echo $this->typography->auto_typography($content);?></div>
          <h6 class="ancestry--ancestryDate"><?php echo "Creation " . html_escape($row->date), nbs(5), "Last Updated " . html_escape($row->last_date);?></h6>
          
        </article>
      </div>
    <?php endforeach;?>
      <?php echo $this->pagination->create_links();?>
  </div>
  <!-- right hand side -->
  <div class="flex-small">
    <section class="wrapper">
      <article>
        <?php $this->load->file(APPPATH . "/views/pages/includes/side.php");?>
      </article>
    </section>
  </div>
</div>
