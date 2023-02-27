<!DOCTYPE html>
<html>
<body>

<?php
class Electronics {
  public $elements;
  public $prices;

  function __construct($elements) {
    $this->elements = $elements; 
  }
  function get_elements() {
    return $this->elements;
  }


}

$new = new Electronics("Television");x
echo $new->get_elements();
?>
 
</body>
</html>
