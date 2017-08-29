<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Record $record
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numero Records') ?></th>
            <td><?= h($record->numero_records) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $record->has('team') ? $this->Html->link($record->team->nombre_equipo, ['controller' => 'Teams', 'action' => 'view', $record->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $record->has('player') ? $this->Html->link($record->player->id, ['controller' => 'Players', 'action' => 'view', $record->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Records') ?></th>
            <td><?= h($record->fecha_records) ?></td>
        </tr>
    </table>
</div>
