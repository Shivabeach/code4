<body id="post-entry">
  <header class="m-main">
     <h1 class="heading"><?php echo $head;?></h1>
   </header>
<div class="container">
  <div class="flex-large">
    <fieldset><legend>Family Entry Form</legend>
      <?php echo validation_errors(); ?>
      <?php
      $attr1 = [
        "id"    => "ajax"
      ];
      echo form_open("Forms/family", $attr1);
      ?>
      <!-- form -->
      <!-- male female family relationship relative level year branch2 country  comment -->
      <label for="family">Family</label>
      <?php
      $attr2 = [
      '' => 'Pick one',
      'Bostick' => 'Bostick',
      'VanHorn' => 'VanHorn'
      ];
      echo form_dropdown("family", $attr2);?>


      <label for="male">Male</label>
      <?php
      $attr4 = [
        'name'      => 'male',
        'maxlength' => '100',
        'style'     => 'width:50%'
      ];?>
      <?php echo form_input($attr4);?>

      <label for="female">Female</label>
      <?php
      $attr5 = [
        'name'      => 'female',
        'maxlength' => '100',
        'style'     => 'width:50%'
      ];?>
      <?php echo form_input($attr5);?>

      <label for="branch2">2nd Branch</label>
      <?php
      $attr10 = [
        'name'        => 'branch2',
        'maxlength'   => '100',
        'style'       => 'width:50%',
        'placeholder' => "Other family branch start"
      ]?>
      <?php echo form_input($attr10);?>

      <label for="relationship">Relationship</label>
      <?php
        $attr6 = [
          'name'      => 'relationship',
          'maxlength' => '100',
          'style'     => 'width:50%'
        ];?>
      <?php echo form_input($attr6);?> <span>8th Great Grandfather</span>

      <label for="relative">Relative From Ancestry</label>
      <?php
        $attr7 = [
          'name'        => 'relative',
          'id'          => 'relative',
          'maxlength'   => '100',
          'placeholder' => "Ancestry Relative",
          'style'       => 'width:50%'
        ];?>
      <?php echo form_input($attr7);?>

      <label for="level">Cousin Level</label>
      <?php
       $attr8 = [
          'name'      => 'level',
          'maxlength' => '2',
          'type'      => 'number',
          'style'     => 'width:50%'
        ];?>
        <?php echo form_input($attr8);?> <span><u>3</u>rd cousin</span>

        <label for="Year">Year Born</label>
        <?php
         $attr9 = [
            'name'      => 'year',
            'maxlength' => '4',
            'type'      => 'number',
            'style'     => 'width:50%'
          ];?>
        <?php echo form_input($attr9);?>

        <label for="country">Country of Birth</label>
        <?php
         $attr11 = [
            'name'      => 'country',
            'maxlength' => '100',
            'type'      => 'text',
            'id'        => 'country',
            'style'     => 'width:50%'
          ];?>
        <?php echo form_input($attr11);?>

        <label for="comment">Comment</label>
        <?php
         $attr12 = [
           'name' => 'comment',
           'id'   => 'comment'
         ];?>
        <?php echo form_textarea($attr12);?>

      <?php
        echo '<button type="submit">Submit</button>';
        echo '<button type="reset">Reset</button>';
        echo form_close();?>
      </fieldset>
      <article>
        Results
        <div id="display"></div>
      </article>
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
          <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
        </article>
      </section>
    </div>
  </div>
