<body id="post-entry">
  <header class="m-main">
     <h1 class="heading"><?php echo $head;?></h1>
   </header>
<div class="container">
  <div class="flex-large">
    <fieldset><legend>Post Entry Form</legend>
      <?php echo validation_errors(); ?>
    <?php
    $attr1 = [
      "id"    => "ajax",
      "class" => "pure-form pure-form-stacked"
    ];
    echo form_open("Forms/enterPosts", $attr1);
    ?>

    <label for="title">Title</label>
    <?php $attr2 = [
      "id"          => "title",
      "name"        => "title",
      "maxlength"   => "100",
      "style"       => "width: 50%",
      "placeholder" => "Title",
      'value'       => set_value('title')
    ];

    echo form_input($attr2);?>

    <label for="content">Content</label>
    <?php $attr2 = [
      "id"        => "content",
      "name"      => "content",
      'placeholder' => 'Content',
      'value' => set_value('content')
    ];

    echo form_textarea($attr2);
    ?>
    <label for="slug">Slug</label>
    <?php
      $attr6 = [
        'name'        => 'slug',
        'id'          => 'slug',
        'placeholder' => 'Slug',
        'value'       => set_value('slug'),
        'class'       => 'slug1'
      ];
      echo form_textarea($attr6);
    ?>

    <label for="date">Date</label>
    <?php $attr3 = [
      "id"    => "date",
      "name"  => "date",
      "class" => "datestamp",
      'value' => set_value('date')
    ];

    echo form_input($attr3); ?>

    <label for="status">Status</label>
    <?php $attr5 = [
      ''        => 'Pick a status',
      'publish' => 'Publish',
      'draft'   => 'Draft'
    ];

    echo form_dropdown('status', $attr5);?>


    <label for="parent">Parent</label>
    <?php $attr4 = [
      ""        => "Pick A Family",
      "VanHorn" => "VanHorn",
      "Bostick" => "Bostick",
      "main"    => "main",
      "general" => "General"
    ];

    echo form_dropdown('parent', $attr4);?>

    <div class="pure-controls">
      <?php
      echo '<button type="submit" class="pure-button pure-button-active">Submit</button>';
      echo '<button type="reset" class="pure-button pure-button-active">Reset</button>';
      echo form_close();?>
    </div>
    </fieldset>
  </div>
  <div class="flex-small">
    <section class="wrapper">
      <article>
        <?php
        if($this->session->userdata('name') == true){
            echo "Hello " .  $this->session->userdata('name');
        }?>
      </article>
      <article>
        Results
        <div id="display"></div>
      </article>
      <article>
        <span>Chars Count: </span> <span id=feedback> </span>
        <br>
        Total word Count : <span id="display_count">0</span>
      </article>
      <article>
        <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
      </article>
    </section>
  </div>
</div>
