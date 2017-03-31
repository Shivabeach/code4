<body id="post-entry">
  <header class="m-main">
     <h1 class="heading"><?php echo $head;?></h1>
   </header>
<div class="container">
  <div class="flex-large">
    <fieldset><legend>Family Cemetary Form</legend>
      <?php echo validation_errors(); ?>
      <?php
      $attr1 = [
        "id"    => "ajax"
      ];
      echo form_open("Forms/bury", $attr1);
      ?>

      <label for="name">Name</label>
      <?php
      $attr4 = [
        'name'        => 'name',
        'maxlength'   => '100',
        'style'       => 'width:50%',
        'placeholder' => "Name"
      ];?>
      <?php echo form_input($attr4);?>

      <label for="birth">Birth</label>
      <?php
      $attr5 = [
        'name'        => 'birth',
        'maxlength'   => '5',
        'style'       => 'width:50%',
        'type'        => 'number',
        'placeholder' => "Birth Date"
      ];?>
      <?php echo form_input($attr5);?>

      <label for="death">Death Date</label>
      <?php
      $attr10 = [
        'name'        => 'death',
        'maxlength'   => '5',
        'style'       => 'width:50%',
        'placeholder' => "Death Date",
        'type'        => 'number'
      ]?>
      <?php echo form_input($attr10);?>

      <label for="buried">Buried</label>
      <?php
        $attr6 = [
          'name'      => 'buried',
          'maxlength' => '100',
          'style'     => 'width:50%',
          'placeholder' => 'Cemetary'
        ];?>
      <?php echo form_input($attr6);?>

      <label for="state">City and State</label>
      <?php
        $attr7 = [
          'name'        => 'state',
          'id'          => 'state',
          'maxlength'   => '100',
          'placeholder' => "City and state",
          'style'       => 'width:50%'
        ];?>
      <?php echo form_input($attr7);?>

      <label for="city">City</label>
      <?php
       $attr8 = [
          'name'        => 'city',
          'maxlength'   => '50',
          'style'       => 'width:50%',
          'placeholder' => 'City'
        ];?>
        <?php echo form_input($attr8);?>
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
