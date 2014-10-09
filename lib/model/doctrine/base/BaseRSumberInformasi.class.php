<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RSumberInformasi', 'doctrine');

/**
 * BaseRSumberInformasi
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $kode_sumber_informasi
 * @property string $sumber_informasi
 * 
 * @method integer          getKodeSumberInformasi()   Returns the current record's "kode_sumber_informasi" value
 * @method string           getSumberInformasi()       Returns the current record's "sumber_informasi" value
 * @method RSumberInformasi setKodeSumberInformasi()   Sets the current record's "kode_sumber_informasi" value
 * @method RSumberInformasi setSumberInformasi()       Sets the current record's "sumber_informasi" value
 * 
 * @package    properti
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRSumberInformasi extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('r_sumber_informasi');
        $this->hasColumn('kode_sumber_informasi', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('sumber_informasi', 'string', null, array(
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