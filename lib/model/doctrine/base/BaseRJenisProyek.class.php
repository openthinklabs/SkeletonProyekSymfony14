<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RJenisProyek', 'doctrine');

/**
 * BaseRJenisProyek
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $kode_jenis_proyek
 * @property string $jenis_proyek
 * 
 * @method integer      getKodeJenisProyek()   Returns the current record's "kode_jenis_proyek" value
 * @method string       getJenisProyek()       Returns the current record's "jenis_proyek" value
 * @method RJenisProyek setKodeJenisProyek()   Sets the current record's "kode_jenis_proyek" value
 * @method RJenisProyek setJenisProyek()       Sets the current record's "jenis_proyek" value
 * 
 * @package    properti
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRJenisProyek extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('r_jenis_proyek');
        $this->hasColumn('kode_jenis_proyek', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('jenis_proyek', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}