<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013 Zachary Doll */

echo '<div class="Box Leaderboard">';
echo '<h4>' . T($this->Title) . '</h4>';
echo '<ul class="PanelInfo">';
foreach($this->Data as $Leader) {
 
  // Don't show users that have 0 or negative points
  if($Leader->Points <= 0) {
    break;
  }
  echo Wrap(
          UserPhoto($Leader) . ' ' .
          UserAnchor($Leader) . ' ' .
          Wrap(
                  Wrap(Plural($Leader->Points, '%s Point', '%s Points'), 'span', array('class' => 'Count')),
                  'span',
                  array('class' => 'Aside')),
        'li');
}
echo '</ul>';
echo '</div>';