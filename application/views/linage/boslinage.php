<body id="boslinage">
<header class="m-main">
    <h1 class="heading"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex1">
    <?php $this->load->view("nav/navigate");?>
  </div>
  <div class="flex-large">
    <article id="tabs">
    <ul>
      <li><a href="#tabs-1">Reeds</a></li>
      <li><a href="#tabs-2">Bosticks</a></li>
      <li><a href="#tabs-3">William Stark</a></li>
      <li><a href="#tabs-4">Ephraim Wheeler</a></li>
      <li><a href="#tabs-5">Robert Pease</a></li>
      <li><a href="#tabs-6">Jonathon C. Sholes</a></li>
    </ul>
      <!-- vertical plugin https://github.com/tjvantoll/jquery-ui-vertical-tabs -->
  <article id="tabs-1">
    <h3>The Reeds</h3>
      <?php include("reed.html");?>
  </article>
  <article id="tabs-2">
    <h3>The Bosticks</h3>
      <?php include("bostick.html");?>
  </article>
  <article id="tabs-3">
    <h3>William Dulluttur Stark</h3>
    <?php include("WilliamStark.html");?>
  </article>
  <article id="tabs-4">
    <h3>Ephraim Wheeler</h3>
    <?php include("wheeler.html");?>
  </article>
  <article id="tabs-5">
    <h3>Robert Pease</h3>
    <?php include("robertpease.html");?>
  </article>
  <article id="tabs-6">
    <h3>Jonathon C. Sholes</h3>
    <?php include("JonathonSholes.html");?>
  </article>



</article>
<!-- end of tabs -->
  </div>
  <!-- right hand side -->
  <div class="flex-small">
    <section class="wrapper">

      <?php $this->load->file(APPPATH . "/views/pages/includes/side.php");?>
      <!-- use article here -->
    </section>
  </div>
</div>
