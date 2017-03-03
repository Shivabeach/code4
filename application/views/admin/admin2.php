<body id="ad2">
 <header class="m-main">
    <h1 class="heading"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <article>
      <h3>Posts</h3>
    </article>
	<article>
        <?php foreach($getlist as $row)
        {
            $id = "forms/fill_form/$row->id";
            $this->table->add_row(
            anchor($id, $row->id),
            $row->title,
            $row->date,
            $row->parent,
            $row->status
            );
        }
        echo $this->table->generate();
        ?>

  </article>
  </div>

	<div class="flex-small">
	  <section class="wrapper">
		<article>
	      <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
	    </article>
	  </section>
	 </div>
 </div>
