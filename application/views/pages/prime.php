  <body>
    <header>
      <h1>Visuals</h1>
    </header>
    <div class="container">
      <div class="flex-large">
        <article class="ancestry">
          <h2 class="ancestryTitle item">Family History</h2>
          <div class="ancestryContent item">
            <p> Where we are from in the last 500 years or so!
        <blockquote>
          <ul>
            <li>65% of our ancestry comes from Great Britain, with outliers from Scotland, France and the Netherlands</li>
            <li>14% is from Western Europe. Germany, France, Netherlands, Austria and Switzerland.</li>
            <li>10% Comes from Scandinavia. Sweden, Norway, Denmark and just a wee bit of Finland</li>
            <li>6% comes from Ireland</li>
            <li>2% Comes from Spain and the local Mediterranean areas</li>
            <li>2% comes from the Caucasus areas. That would be Turkey, Iran, Iraq, Turkmenistan, and Afghanistan.</li>
          </ul>
        </blockquote>

        <p>You may well ask how can there be bleed over from one area to the other. It is a good question. Remember, those of our English ancestors also had Scottish, French and Dutch ancestors themselves. We pick that up in our DNA. Our Caucasus DNA is slightly deeper and more on Mom's side than Dad's. Remember the path out of Africa passed through the middle east on their way to Europe, Mediterranean, Russia and beyond.</p>
        <p>Our deep ancestry is shown on the VanHorn and Bostick headings on the menu.</p>
          </div>
          <h6 class="ancestryDate">2/20/2016</h6>
        </article>
            <?php foreach($mainContent as $row):?>
              <article class="ancestry">
                <h2 class="ancestryTitle item"><?php echo $row->title;?></h2>
                <div class="ancestryContent item"><?php echo $this->typography->auto_typography($row->content);?> </div>
                <h6 class="ancestryDate"><?php echo $row->date;?></h6>
            </article>
          <?php endforeach;?>
      </div>
      <div class="flex-small">
        <?php include(APPPATH . "/views/nav/nav.php");?>
      </div>
  </div>
