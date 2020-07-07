<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_items_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
        /*CREATE TABLE `items` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ItemCode` varchar(25) DEFAULT NULL COMMENT 'Input',
  `Description` longtext NOT NULL COMMENT 'TextArea',
  `ItemWeight` varchar(15) DEFAULT NULL COMMENT 'Input',
  `Department` int NOT NULL DEFAULT '0' COMMENT 'Option|department|ID|name',
  `Category` int NOT NULL DEFAULT '0' COMMENT 'Option|category|ID|name',
  `Brand` varchar(5) DEFAULT NULL COMMENT 'Option|brand|ID|Brand',
  `InActive` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `WebItem` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `PriceA` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PriceB` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PriceC` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `WDeposit` double(10,2) NOT NULL DEFAULT '0.00',
  `ItemCost` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `Arrival_Date` varchar(20) DEFAULT NULL COMMENT 'Date',
  `Date_Arrived` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SupplierActive_1` int NOT NULL DEFAULT '0',
  `Supplier1` varchar(15) NOT NULL COMMENT 'Option|supplier|ID|Supplier',
  `DateLine1` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Currency1` varchar(10) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `OfferedCost1` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PcsPerCarton` varchar(15) DEFAULT NULL COMMENT 'Input',
  `POQty1` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `SupplierActive_2` int NOT NULL DEFAULT '0',
  `Supplier2` varchar(15) NOT NULL COMMENT 'Option|supplier|ID|Supplier',
  `DateLine2` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Currency2` varchar(10) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `OfferedCost2` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `POQty2` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `RetailPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PreorderPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `Deposit` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `MemberA` varchar(25) DEFAULT NULL COMMENT 'Input',
  `MemberB` varchar(25) DEFAULT NULL COMMENT 'Input',
  `SalesStart_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `sale_type` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `SalesEnd_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SPOfferPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `SP_StartDate` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SP_EndDate` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Date_Created` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Last_Received` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Last_Sold` varchar(10) DEFAULT NULL COMMENT 'Date',
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Location` longtext COMMENT 'TextArea',
  `Services` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `RWareHouse1` varchar(15) DEFAULT NULL COMMENT 'Option|warehouse|WHCode|WareHouse',
  `RWareHouse2` varchar(15) DEFAULT NULL COMMENT 'Option|warehouse|WHCode|WareHouse',
  `Summary` longtext NOT NULL COMMENT 'TextArea',
  `Specs` longtext NOT NULL COMMENT 'TextArea',
  `BackStory` longtext NOT NULL COMMENT 'TextArea',
  `Reward` double NOT NULL DEFAULT '0' COMMENT 'Option|rewards|Rewards|Rewards',
  `Release_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `RemQty` int NOT NULL DEFAULT '0',
  `BarcodeNo` varchar(25) DEFAULT NULL,
  `Currency` varchar(5) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `Expiry_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Recommended` int NOT NULL DEFAULT '0',
  `Inventory_Qty` int NOT NULL DEFAULT '0',
  `GroupsID` int NOT NULL,
  `ItemClicks` int NOT NULL DEFAULT '0',
  `ShipBy` varchar(25) NOT NULL,
  `Temp` int NOT NULL DEFAULT '0',
  `images` longtext,
  `featured` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`,`featured`),
  KEY `ItemCode` (`ItemCode`)
) ENGINE=MyISAM AUTO_INCREMENT=12805 DEFAULT CHARSET=utf8;
*/
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
            ),
            'Description' => array(
                'type' => 'longtext',
            ), 'ItemWeight' => array(
                'type' => 'varchar',
                'constraint' => 15,
                'unsigned' => TRUE,
            ), 'Department' => array(
                'type' => 'int',
                'constraint' => 100,
                'default' => 0,
            ), 'Category' => array(
                'type' => 'varchar',
                'constraint' => 100,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ), 'ItemCode' => array(
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => TRUE,
            ),

        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('items', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('items', TRUE);
    }
}
/* End of file '003_create_items_table' */
/* Location: .//Users/evilboss/Projects/toyntoys/ci3-adminlte-boilerplate/application/migrations/003_create_items_table.php */
