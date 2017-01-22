<h3>VanHorns</h3>
<p>The VanHorn connections and where they lived</p>
<?php
foreach($van as $row){
$this->table->add_row(
  $row->State,
  $row->Total
);
}
echo $this->table->generate();
?>
