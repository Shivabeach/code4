  <footer>
      <div class="nav-grid box1">
        <h6 class="centered">VanHorn Family</h6>
        <ul>
          <li class="line"><?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>
          <li class="line"><a href="#">DNA</a></li>
          <li class="line"><a href="#">Linages</a></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid box2">
        <h6 class="centered">Bostick Family</h6>
        <ul>
          <li class="line"><?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="line"><a href="#">DNA</a></li>
          <li class="line"><a href="#">Linages</a></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid box3">
        <h6 class="centered">General Links</h6>
        <ul>
          <li class="line"><?php echo anchor("Pages/entry", "Entry"); ?></li>
          <li class="line"><a href="#">Linages</a></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>

      <div class="nav-grid box5">
        <p class="small">&copy; <?php
           $fromYear = 2008;
           $thisYear = (int)date('Y');
           echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
         </p>
      </div>

  </footer>
  <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/functions.js');?>"></script>
</body>
</html>
