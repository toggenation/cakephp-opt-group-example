<?php

use Cake\View\View;

/**
 *  @var View $this
 */

?>
<?= $this->Form->select(
    'optGroup',
    $optGroup,
    [
        'name' => 'athletes[_ids]',
        'id' => 'athletes-id',
        'empty' => '(please select)',
        'multiple' => true,
    ]
); ?>
