<?php
require_once 'item.php';

use MyBusiness\Item;

$item = new Item('Astro Pet', 299.99, 'A robotic pet that helps combat loneliness and teaches children about pet care.');
echo $item->getItemData();
?>