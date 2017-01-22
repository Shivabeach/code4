<h3>Bosticks</h3>
<p>The Bostick connections and where they lived</p>
<?php
foreach($bos as $row){
$this->table->add_row(
    $row->State,
    $row->Total
  );
}
  echo $this->table->generate();
?>
