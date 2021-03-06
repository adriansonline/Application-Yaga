<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013 Zachary Doll */

echo Wrap($this->Title(), 'h1');

echo $this->Form->Open();
echo $this->Form->Errors();
?>
<ul>
  <li>
    <?php
    echo $this->Form->Label('Name', 'Name');
    echo $this->Form->TextBox('Name');
    ?>
  </li>
  <li>
    <?php
    echo $this->Form->Label('Description', 'Description');
    echo $this->Form->TextBox('Description');
    ?>
  </li>
  <li>
    <?php
    echo $this->Form->Label('Role Award', 'Role');
    echo $this->Form->Dropdown('Role', $this->Data('Roles'), array('IncludeNULL' => TRUE));
    ?>
  </li>
  <li>
    <?php
    echo $this->Form->Label('Points Required', 'Level');
    echo $this->Form->TextBox('Level');
    ?>
  </li>
  <li>
    <?php
    echo $this->Form->Label('Automatically Award', 'Enabled');
    echo $this->Form->CheckBox('Enabled');
    ?>
  </li>

</ul>
<?php
echo $this->Form->Close('Save');
