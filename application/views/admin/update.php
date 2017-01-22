<fieldset><legend>Post Status Update</legend>
  <?php echo validation_errors(); ?>
<?php
foreach($records as $row){
$attr1 = [
  "id"    => "ajax",
  "class" => "pure-form pure-form-stacked"
];
echo form_open("Forms/upPosts", $attr1);
$id = [
  'name'     => 'id',
  'value'    => $row->id,
  'readonly' => true
];
echo form_input($id);?>
<label for="title">Title</label>
<?php $attr2 = [
  "id"          => "title",
  "name"        => "title",
  "maxlength"   => "100",
  "style"       => "width: 50%",
  "placeholder" => "Title",
  'value'       => $row->title
];

echo form_input($attr2);?>

<label for="content">Content</label>
<?php $attr2 = [
  "id"          => "content",
  "name"        => "content",
  'placeholder' => 'Content',
  'value'       => htmlspecialchars_decode($row->content)
];

echo form_textarea($attr2);?>

<label for="slug">Slug</label>
<?php
$attr6 = [
  'id'          => 'slug',
  'name'        => 'slug',
  'placeholder' => 'Slug',
  'value'       =>  $row->slug,
  'class'       => 'slug1'
];
echo form_textarea($attr6);?>
<label for="status">Status</label>
<?php $attr5 = [
  ''        => 'Pick a status',
  'publish' => 'Publish',
  'draft'   => 'Draft'
];
echo form_dropdown('status', $attr5, array('value' => $row->status));?>

<label for="parent">Parent</label>
<?php $attr4 = [
  ""        => "Pick A Family",
  "VanHorn" => "VanHorn",
  "Bostick" => "Bostick",
  "main"    => "main",
  "general" => "General"
];

echo form_dropdown('parent', $attr4, array('value' => $row->parent));?>

<label for="Last_date">Date</label>
<?php $attr3 = [
  "id"    => "last_date",
  "name"  => "last_date",
  "type"  => "date",
  "class" => "datestamp",
  "class" => "pure-form pure-input-1-2"
];

echo form_input($attr3);
}

?>
<div class="pure-controls">
  <?php
  echo '<button type="submit" class="pure-button pure-button-active">Submit</button>';
  echo '<button type="reset" class="pure-button pure-button-active">Reset</button>';
  echo form_close();?>
</div>
</fieldset>
