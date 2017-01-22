<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <h3>Register or log in</h3>
     <?php echo $this->session->userdata('name');?>
     <?php //echo $_SESSION['username']; ?>
    <fieldset>
      <legend>Login</legend>
      <?php echo validation_errors('<li class="error">', '</li>');

      $attr = [
        'id'      => 'ajax3',
        "class"   => "pure-form pure-form-stacked"
      ];
      echo form_open("/checkin/legal", $attr)?>
<p>
  <?php
  $attr4 = [
    'style'       => 'width: 50%',
    'id'          => 'name',
    'name'        => 'name',
    'placeholder' => 'Name',
    'value'       => set_value('name')
  ];
   ?>
<label for="name"> Name </label>
<?php echo form_input($attr4);?>
<p/>

<p>
  <?php
  $attr1 = [
    'style'       => 'width: 50%',
    'id'          => 'pass',
    'name'        => 'pass',
    'type'        => 'password',
    'placeholder' => 'Password',
    'value'       => set_value('pass')
];
   ?>
<label for="pass"> password </label>
<?php echo form_input($attr1);?>
<!-- <span id="passstrength"></span> -->
<p/>

<!-- <p>
 <?php
  $attr2 = [
    'style' => 'width: 50%',
    'id' => 'password2',
    'name' => 'password2'
];
   ?>
<label for="password2"> password2 </label> <br />
<?php echo form_input($attr2);?>
<p/> -->

<p>
  <?php
  $attr3 = [
    'style'       => 'width: 50%',
    'id'          => 'emails',
    'name'        => 'email',
    'type'        => 'email',
    'placeholder' => 'Email',
    'value'       => set_value('email')
];
   ?>
<label for="email"> email </label>
<?php echo form_input($attr3);?>
<p/>
<?php
$attr10 = [
  'id' => 'milky',
  'name' => 'milky',
  'type' => 'color'
];
?>
<p>
  <label for="Milky"> Milky White </label>
  <?php echo form_input($attr10);?>
</p>

<div class="pure-controls">
  <?php
  echo '<button type="submit" class="pure-button pure-button-active">Submit</button>';
  echo '<button type="reset" class="pure-button pure-button-active">Reset</button>';
  echo form_close();
  ?>
    </fieldset>
  </div>
  <div class="flex-small">
    <section class="wrapper">
      <article>
      <?php
      if($this->session->userdata('name') == true){
          echo "Hello " .  $this->session->userdata('name'). nbs(3), anchor("Pages/entry", " Enter ");
      }else {
        echo "";
      }?>
    </article>

      <?php
        $this->load->file(APPPATH . "/views/pages/includes/side.php");
      ?>
    <article>
      <div id="display"></div>
    </article>
  </section>
  </div>
</div>
