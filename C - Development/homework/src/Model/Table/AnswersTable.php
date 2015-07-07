<?php
namespace App\Model\Table;

use App\Model\Entity\Answer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Answers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $As
 * @property \Cake\ORM\Association\BelongsTo $Homeworks
 */
class AnswersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('answers');
        $this->displayField('a_id');
        $this->primaryKey('a_id');
        $this->belongsTo('Homeworks', [
            'foreignKey' => 'h_id',
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');
            
        $validator
            ->add('submission_time', 'valid', ['rule' => 'datetime'])
            ->requirePresence('submission_time', 'create')
            ->notEmpty('submission_time');
            
        $validator
            ->allowEmpty('answer');

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
        $rules->add($rules->existsIn(['a_id'], 'Aswers'));
        $rules->add($rules->existsIn(['h_id'], 'Homeworks'));
        return $rules;
    }
}
