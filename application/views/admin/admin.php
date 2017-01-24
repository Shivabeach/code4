<body id="topdog">
 <header class="m-main">
    <h1 class="heading"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <article>
      <h3>Display of visitors to the site</h3>
      <p>
        This displays the last 20 visitors to the site
      </p>
      <!-- table here -->
      <!-- var regex = /\w+.(com|co\.kr|be)/ig; -->
      <?php
      foreach($visitor as $row)
      {
        $subject = $row->addr;
        $pattern = '/\w+.(com|net|co\.kr|be|uk|de|edu|us)/';
        preg_match("/(?:.[a-z]+.[a-z]+.)\w+.(com|net|co\.kr|be|de|ua|ru|br|uk|cn|link|org|sc|pl)/", $subject, $matches);
        $addr = $matches[0];
        $date = unix_to_human($row->date);
        $this->table->add_row(
          $date,
          $row->ip,
          $row->visits,
          $row->agent,
          $addr,
          $row->page,
          $row->region . " " . $row->country
        );
      }
      echo $this->table->generate();
       ?>
    </article>
  </div>

<div class="flex-small">
  <section class="wrapper">

      <?php
      if($this->session->userdata('name') == true){
          echo "Hello " .  $this->session->userdata('name');
      }?>

    <article>
      <?php
      $attr = [
        'id'     => 'ajax1',
        'method' => 'get'
      ];
      echo form_open("forms/abuseip", $attr);
      $attr1 = [
        'id'          => 'ip',
        'name'        => 'ip',
        'placeholder' => 'IP'
      ];
      echo form_input($attr1);
      echo form_submit("Submit", "Submit");
      ?>
    </article>
    <article>
    <div id="display"></div>
    </article>
      <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
    </article>
  </section>
</div>
</div>
