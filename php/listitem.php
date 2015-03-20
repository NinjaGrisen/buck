<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `bucketlist`
//

// `bucketlist`.`listitem`
$listitem = array(
  array('ItemID' => '1','CategoryID' => '1','UserId' => '1','Title' => 'First item.','Desc' => 'First item.','Image' => '','Checked' => '0','Rank' => '7','Private' => '1'),
  array('ItemID' => '1','CategoryID' => '1','UserId' => '1','Title' => 'First item.','Desc' => 'First item.','Image' => '','Checked' => '0','Rank' => '7','Private' => '1'),
  array('ItemID' => '1','CategoryID' => '1','UserId' => '1','Title' => 'First item.','Desc' => 'First item.','Image' => '','Checked' => '0','Rank' => '7','Private' => '1'),
  array('ItemID' => '2','CategoryID' => '2','UserId' => '1','Title' => 'Going jumping!','Desc' => 'Go jump from a cliff!','Image' => '','Checked' => '1','Rank' => '1','Private' => '1'),
  array('ItemID' => '3','CategoryID' => '3','UserId' => '1','Title' => 'Help in a war!','Desc' => 'Help fight the evil!','Image' => '','Checked' => '0','Rank' => '2','Private' => '1'),
  array('ItemID' => '4','CategoryID' => '3','UserId' => '1','Title' => 'Have a drink!','Desc' => 'Drink something good.','Image' => '','Checked' => '1','Rank' => '3','Private' => '1'),
  array('ItemID' => '5','CategoryID' => '4','UserId' => '1','Title' => 'Go travel!','Desc' => 'Travel to a foreign country!','Image' => '','Checked' => '0','Rank' => '4','Private' => '1')
);

echo json_encode($listitem);
