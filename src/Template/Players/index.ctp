<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Player[]|\Cake\Collection\CollectionInterface $players
  */
?>

        <li class="heading"><?= __('Actions') ?></li>
        <button input style="background-color: #000000"> <p><?= $this->Html->link(__('nuevo jugador'), ['action' => 'add']) ?></p></button>
        <button input style="background-color: #000000"> <p><?= $this->Html->link(__('lista de equipos'), ['controller' => 'Teams', 'action' => 'index']) ?></p></button>
        <button input style="background-color: #000000"> <p><?= $this->Html->link(__('nuevo equipo'), ['controller' => 'Teams', 'action' => 'add']) ?></p></button>
  
<div class="players index large-9 medium-8 columns content">
    <h3><?= __('Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_jugador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_jugador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->id) ?></td>
                <td><?= h($player->nombre_jugador) ?></td>
                <td><?= h($player->apellido_jugador) ?></td>
                <td><?= $player->has('team') ? $this->Html->link($player->team->nombre_equipo, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
