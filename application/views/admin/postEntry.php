<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <fieldset><legend>Post Entry Form</legend>
      <?php echo validation_errors(); ?>
      <div id="display" class="error"></div>
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
      'value'       => s$row->title
    ];

    echo form_input($attr2);?>

    <label for="content">Content</label>
    <?php $attr2 = [
      "id"        => "content",
      "name"      => "content",
      'value' => $row->content
    ];

    echo form_textarea($attr2);
    ?>

    <label for="date">Date</label>
    <?php $attr3 = [
      "id"    => "date",
      "name"  => "date",
      "type"  => "date",
      "class" => "datestamp",
      "class" => "pure-form pure-input-1-2",
      'value' => $row->date
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
      "general" => "General",
      'value'   => $row->parent
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
    <p>
      File list.
    </p>
  </div>
</div>
