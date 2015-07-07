<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity.
 */
class Answer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
		'a_id' => true,
        'h_id' => true,
        'username' => true,
        'submission_time' => true,
        'answer' => true,
        'homework' => true,
    ];
}
