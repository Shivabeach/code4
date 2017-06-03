<nav class="m-left-nav">
    <article>
        <h4 class="m-left-nav--heading">VanHorn Family</h4>
        <ul>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor('pages/van','VanHorn History', 'title="VanHorn"');?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor('pages/vandna','VanHorn DNA', 'title="DNA"');?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor('pages/vanlinage','VanHorn Linages');?>
            </li> 
            <li class="m-left-nav--content"><?php echo anchor('pages/vtime','VanHorn Timeline');?></li>
        </ul>
    </article>
    <article>
        <h4 class="m-left-nav--heading">Bostick Family</h4>
        <ul>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i><?php echo anchor('pages/bos','Bostick History');?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor('pages/bosdna','Bostick DNA');?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor('pages/boslinage','Bostick Linages');?>
            </li>
            <li class="m-left-nav--content"><?php echo anchor('pages/btime','Bostick Timeline');?></li>
        </ul>
    </article>
    <article>
        <h4 class="m-left-nav--heading">General Links</h4>
        <ul>
            <li class="m-left-nav--content"><i class="fa fa-home" aria-hidden="true"></i>
                <?php echo anchor("", "Home"); ?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor("checkin", "Log In"); ?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor("pages/map", "Ancestral Map"); ?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor("pages/notes", "Family Notes"); ?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor("pages/relatives", "Family Connections"); ?>
            </li>
            <li class="m-left-nav--content"><i class="fa fa-link" aria-hidden="true"></i>
                <?php echo anchor("pages/reading", "Reading Sources"); ?>
            </li>
        </ul>
        <a href="http://van-horn.us/pages/army"><span style="display: none;">zeal</span></a>
    </article>
</nav>
