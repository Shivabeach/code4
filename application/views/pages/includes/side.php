<article>
<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name') . nbs(3), anchor("Pages/entry", " Enter ");
    echo "<hr>";
}?>

</article>
<article>
<h4 class="centered">Quick Facts</h4>
<ul>
  <li><i class="icon-hand-right"></i> 176 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 19,550 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 16,831 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 2326 Photos</li>
  <li><i class="icon-hand-right"></i> 585 4th to 8th Cousins</li>
</ul>
</article>
<a href="http://van-horn.us/pages/army" style="display: none;">zeal</a>
<!-- <article>
<div id="size"></div>
</article> -->
<article>
<?php
$date = new DateTime;
$ancestor = (new DateTime)->setDate(1640,01,01)->setTime(00,00,00);
$timeago = $date->diff($ancestor);
?>
</article>
<article>
  <h4 class="not-bold">Our first Ancestors of the 4 families in America</h4>
  <p class="small">William Read<br>
    Birth 1605 • Canterbury, Kent, England<br>
    Death 13 JUN 1669 • Weymouth, Norfolk, Massachusetts, United States <br>
    8th great grandfather
  </p>
  <hr>
  <p class="small">Matthys Corneliussen(VanHorn)<br>
    Birth 1640 • Jutland Denmark<br/>
    Death 1703 • Monmouth County, New Jersey, USA<br>
    7th great grandfather <br>
    <?php echo $timeago->format('Matthys lived %y Years ago');?>
  </p>
  <hr>
  <p class="small">Christian Clay <br>
      Birth 1725 • Berlin, Germany <br>
      Death 1820 • New Jersey <br>
      4th great grandfather
  </p>
  <hr>
  <p class="small">John Bostwick <br>
    Birth 18/10/1638 • Tarporley, Cheshire, England <br>
    Death 11 DEC 1688 • Stratford, Fairfield, Connecticut, USA <br>
    8th great grandfather <br>
    2nd settler of New Milford Connecticut
  </p>
</article>
