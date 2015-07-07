<?php
namespace App\Model\Table;

use App\Model\Entity\AssignedTo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssignedTo Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Homeworks
 */
class AssignedToTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('assigned_to');
        $this->displayField('h_id');
        $this->primaryKey(['h_id', 'username']);
        $this->belongsTo('Homeworks', [
            'foreignKey' => 'h_id',
            'joinType' => 'INNER'
        ]);
		$this->belongsTo('Users', [
            'foreignKey' => 'username',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('username', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['h_id'], 'Homeworks'));
        return $rules;
    }
}
