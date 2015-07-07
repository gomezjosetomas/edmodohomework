<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssignedToFixture
 *
 */
class AssignedToFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'assigned_to';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'h_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'username' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'username' => ['type' => 'index', 'columns' => ['username'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['h_id', 'username'], 'length' => []],
            'assigned_to_ibfk_1' => ['type' => 'foreign', 'columns' => ['h_id'], 'references' => ['homeworks', 'h_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'assigned_to_ibfk_2' => ['type' => 'foreign', 'columns' => ['username'], 'references' => ['users', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'h_id' => 1,
            'username' => '1a7cef49-9078-4895-97bf-75b1aca9c1b3'
        ],
    ];
}
