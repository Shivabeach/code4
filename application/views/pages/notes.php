<body id="notes">
  
  <header class="m-main">
    <h1 class="heading"> <?php echo $head ;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
      <article class="ancestry">
        <h2>Collections</h2>
        <p>This page is a collection of things that really dont fit any place else, or are not quite enough to make a story of.</p>
      </article>
      <article class="ancestry">
        <dl>
          <dt class="bold">The Hunt Family</dt>
            <dd>We know that Dad's mom was the daughter of George Hunt(b. 1865) and Alice Clay. However, the Hunt line stops at that point. We know nothing of the Hunts, including where they were from. I am going to assume it was England, but as we have no knowledge of them, I cant use them here. The Clay family line stops at 1725.  So for the purpose of linage, I use the Hillyer family as Dad's mothers ancestry. <br>
              Out of interest here, Amzy Clay's mother's name was Rorick, a family I am working on right now.
            </dd>
          <dt class="bold">Lucy A. Thompson</dt>
            <dd>Until very recently we knew next to nothing about Ms Thompson. A very similar case as the Hunt's family presented. <br>
              Ms Thompson is our great Grandmother, the mother of Mom's father Andrew Bostick. We knew she was born 29/04/1842 in New York. She passed away on April 8th, 1893 in Millington after having 10 children. <br>
              I had no history of her until I was researching some census documents and came across her fathers name. I entered that into Ancestry and that got me her mothers name. Her father was Sherman Bradley Thompson, and her mother was Sarah Ann (Unknown). Her grandfather was John Thompson 1778 - 1850. Her mother and father both come from Windham Vermont. Her Thompson grandfather was from New Hampshire. Lucy's Grandmother was Lavina W Pierce. She was from Vermont. Lavina's father(Lucys Great Grandfather) was Sherman Pierce, born 1770 in Connecticutt, and died in 1854.

            </dd>
          <dt class="bold">Graduates</dt>
            <dd>Sir William Browne - Graduate of Cambridge University Approx. 1580</dd>
            <dd>Anthony Stoddard(1559 - 1637) - Oxford University</dd>
          <dt></dt>
            <dd></dd>
          <dt></dt>
            <dd></dd>

        </dl>
      </article>
    </div>
    <div class="flex-small">
      <section class="wrapper">
          <?php include(APPPATH . "/views/pages/includes/side.php");  ?>


      </section>
    </div>
  </div>
  <?php
    $this->benchmark->mark('code_end');
   ?>
