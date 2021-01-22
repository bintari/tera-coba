<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Pembayaran extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'retribusi_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tera_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unique' 		 => true,
			],
			'no_order'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nomilal'       => [
				'type'           => 'INT',
			],

			'denda'       => [
				'type'           => 'INTEGER',
				'constraint'     => '255',
			],
			'tanggal_retribusi'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d H:i:s')
			],
			'status_pembayaran'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_retribusi_tarif'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_retribusi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_tera'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_tempat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_tarif_retribusi_bayar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],

			'verif_by' => [
				'type' => 'INT',
				'constraint'     => 11,
				'unsigned'		 => TRUE,
				'null'			 => true
			],


			'user_created'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d H:i:s')
			],
			'user_updated'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d H:i:s')
			],
		]);
		$this->forge->addKey('retribusi_id', true);
		$this->forge->createTable('retribusi');
	}


	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('retribusi');
	}
}
