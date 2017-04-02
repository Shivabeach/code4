<body id="reading">
  <header class="m-main">
    <h1 class="m-main--head"><?php echo $head;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
      <article class="ancestry">
        <h2>Reading and Data Sources</h2>
        <p>This is the backup sources, and reading sources for data on the site</p>
      </article>
      <article>
        <fieldset>
          <legend>Form to fill reading and data sources</legend>
          <?php
          echo validation_errors();
          $data1 = [
            "id" => "ajax"
          ];
          echo form_open("forms/sources", $data1);
          $attr = [
            '' => 'Pick One',
            'VanHorn' => 'VanHorn',
            'Bostick' => 'Bostick',
            'Reed'    => 'Reed',
            'Sholes'  => 'Sholes',
            'Hunt'    => 'Hunt',
            'General' => "General"
          ];
          echo form_dropdown('family', $attr);
          $attr1 = [
            'name'        => 'name',
            'placeholder' => 'Enter Name',
            'value'       => set_value('name')
          ];
          echo form_input( $attr1);
          $attr2 = [
            'name'        => 'url',
            'placeholder' => 'URL'
          ];
          echo form_input($attr2);
          $attr3 = [
            ''           => 'Pick One',
            'DNA'        => 'DNA',
            'Read'       => 'Read',
            'DNA Source' => 'DNA Source',
            "Family"     => 'Family',
            'History'    => 'History'
          ];
          echo form_dropdown('type', $attr3);

          echo '<button type="submit">Submit</button>';
          echo '<button type="reset">Reset</button>';
          echo form_close();
          ?>
        </fieldset>
        <div id="display"></div>
      </article>

    </div>
  <div class="flex-small">
    <section class="wrapper">
        <?php include(APPPATH . "/views/pages/includes/side.php");?>
    </section>
  </div>
</div>
