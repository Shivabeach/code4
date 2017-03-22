<footer id="bottom">
    <article class="footwrapper">
      <div class="m-nav-grid">

        <h4 class="m-nav-grid--title">VanHorn Family</h4>

        <ul class="m-nav-grid--center">

          <li class="m-nav-grid--listpad">
 <?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/vandna','VanHorn DNA', 'title="DNA"');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/vanlinage','VanHorn Linages');?></li>

          <li class="m-nav-grid--listpad"><a href="#">Stories</a></li>

        </ul>

      </div>


      <div class="m-nav-grid">
        <h4 class="m-nav-grid--title">Bostick Family</h4>
        <ul class="m-nav-grid--center">
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/bosdna','Bostick DNA');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/boslinage','Bostick Linages');?></li>
          <li class="m-nav-grid--listpad"><a href="#">Stories</a></li>
        </ul>
      </div>


      <div class="m-nav-grid">
        <h4 class="m-nav-grid--title">General Links</h4>
        <ul class="m-nav-grid--center">
          <li class="m-nav-grid--listpad"><?php echo anchor("", "Home"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/map", "Ancestoral Map"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("checkin", "Log In"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/notes", "Family Notes"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/relatives", "Family Connections"); ?>
          </li>
        </ul>
        <a href="http://van-horn.us/pages/army"><span style="display: none;">zeal</span></a>
      </div>

      <div class="m-nav-grid box20">
        <p class="small">&copy; <?php
           $fromYear = 2008;
           $thisYear = (int)date('Y');
           echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
         </p>
         <p>
           Mail to: <a href="mailto:&#98;&#114;&#97;&#100;&#64;&#118;&#97;&#110;&#45;&#104;&#111;&#114;&#110;&#46;&#117;&#115;">&#98;&#114;&#97;&#100;&#64;&#118;&#97;&#110;&#45;&#104;&#111;&#114;&#110;&#46;&#117;&#115;</a>
         </p>
         <p>Page loaded in {elapsed_time} seconds</p>
      </div>
      <span id="men"></span>
      </article>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/js/functions.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/count.min.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/vert/vertical-tabs.js');?>"></script>
</body>
</html>
