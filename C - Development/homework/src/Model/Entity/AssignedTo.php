<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssignedTo Entity.
 */
class AssignedTo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'homework' => true,
    ];
}
