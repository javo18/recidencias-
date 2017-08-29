<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diarys Model
 *
 * @method \App\Model\Entity\Diary get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diary newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diary[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diary|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diary patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diary[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diary findOrCreate($search, callable $callback = null, $options = [])
 */
class DiarysTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('diarys');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->integer('id_groups')
            ->requirePresence('id_groups', 'create')
            ->notEmpty('id_groups');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('user')
            ->requirePresence('user', 'create')
            ->notEmpty('user');

        return $validator;
    }
}
