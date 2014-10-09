<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TPesanan', 'doctrine');

/**
 * BaseTPesanan
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $status_pesanan
 * @property integer $kode_pesanan
 * @property string $kode_unit
 * @property integer $kode_konsumen
 * @property integer $kode_sales
 * @property date $tanggal_pesan
 * @property integer $list_price
 * @property integer $discount
 * @property integer $harga_kontrak
 * @property integer $kode_sumber_info
 * @property integer $kode_pembiayaan
 * @property integer $kode_tujuan_pembelian
 * @property integer $kode_event
 * @property date $tanggal_jatuh_tempo
 * @property integer $status_pembayaran
 * 
 * @method integer  getStatusPesanan()         Returns the current record's "status_pesanan" value
 * @method integer  getKodePesanan()           Returns the current record's "kode_pesanan" value
 * @method string   getKodeUnit()              Returns the current record's "kode_unit" value
 * @method integer  getKodeKonsumen()          Returns the current record's "kode_konsumen" value
 * @method integer  getKodeSales()             Returns the current record's "kode_sales" value
 * @method date     getTanggalPesan()          Returns the current record's "tanggal_pesan" value
 * @method integer  getListPrice()             Returns the current record's "list_price" value
 * @method integer  getDiscount()              Returns the current record's "discount" value
 * @method integer  getHargaKontrak()          Returns the current record's "harga_kontrak" value
 * @method integer  getKodeSumberInfo()        Returns the current record's "kode_sumber_info" value
 * @method integer  getKodePembiayaan()        Returns the current record's "kode_pembiayaan" value
 * @method integer  getKodeTujuanPembelian()   Returns the current record's "kode_tujuan_pembelian" value
 * @method integer  getKodeEvent()             Returns the current record's "kode_event" value
 * @method date     getTanggalJatuhTempo()     Returns the current record's "tanggal_jatuh_tempo" value
 * @method integer  getStatusPembayaran()      Returns the current record's "status_pembayaran" value
 * @method TPesanan setStatusPesanan()         Sets the current record's "status_pesanan" value
 * @method TPesanan setKodePesanan()           Sets the current record's "kode_pesanan" value
 * @method TPesanan setKodeUnit()              Sets the current record's "kode_unit" value
 * @method TPesanan setKodeKonsumen()          Sets the current record's "kode_konsumen" value
 * @method TPesanan setKodeSales()             Sets the current record's "kode_sales" value
 * @method TPesanan setTanggalPesan()          Sets the current record's "tanggal_pesan" value
 * @method TPesanan setListPrice()             Sets the current record's "list_price" value
 * @method TPesanan setDiscount()              Sets the current record's "discount" value
 * @method TPesanan setHargaKontrak()          Sets the current record's "harga_kontrak" value
 * @method TPesanan setKodeSumberInfo()        Sets the current record's "kode_sumber_info" value
 * @method TPesanan setKodePembiayaan()        Sets the current record's "kode_pembiayaan" value
 * @method TPesanan setKodeTujuanPembelian()   Sets the current record's "kode_tujuan_pembelian" value
 * @method TPesanan setKodeEvent()             Sets the current record's "kode_event" value
 * @method TPesanan setTanggalJatuhTempo()     Sets the current record's "tanggal_jatuh_tempo" value
 * @method TPesanan setStatusPembayaran()      Sets the current record's "status_pembayaran" value
 * 
 * @package    properti
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTPesanan extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('t_pesanan');
        $this->hasColumn('status_pesanan', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_pesanan', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_unit', 'string', 7, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 7,
             ));
        $this->hasColumn('kode_konsumen', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_sales', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tanggal_pesan', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('list_price', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('discount', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('harga_kontrak', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_sumber_info', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_pembiayaan', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_tujuan_pembelian', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kode_event', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tanggal_jatuh_tempo', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status_pembayaran', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}