<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <fieldset><legend>City Entry Form</legend>
      <?php echo validation_errors(); ?>
<?php $attr = [
  'id' => 'ajax',
  "class" => "pure-form pure-form-stacked"
];
 echo form_open("/Forms/cities", $attr)?>

<p>
<label for="borncity"> Born city </label>
<input type="text" name="borncity" id="borncity" />
<p/>

<p>
<label for="state1"> state1 </label>
<input type="text" name="state1" id="state1" />
<p/>
<p>
<label for="deathcity"> death city </label>
<input type="text" name="deathcity" id="deathcity" />
<p/>


<p>
<label for="state"> state </label>
<input type="text" name="state" id="state" />
<p/>

<p>
<label for="country"> country </label>
<input type="text" name="country" id="country" />
<p/>

<p>
<label for="family"> family </label>
<input type="text" name="family" id="family" />
<p/>
<p>
<label for="year"> Year </label>
<input type="text" name="year" id="year" />
<p/>

<div class="pure-controls">
  <?php
  echo '<button type="submit" class="pure-button pure-button-active">Submit</button>';
  echo '<button type="reset" class="pure-button pure-button-active">Reset</button>';
  echo form_close();
  ?>
</div>
</div>
<div class="flex-small">
    <section class="wrapper">

        <?php
        if($this->session->userdata('name') == true){
            echo "Hello " .  $this->session->userdata('name');
        }?>
      
      <article>
        Results
        </p>
        <hr>
        <div id="display"></div>
      </article>
      <article>
        <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
      </article>
    </section>
  </div>
</div>
