<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengujian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengujian'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tera_id' => [
				'type' => 'INT',
				'constraint'     => 11,
				'unsigned'          => TRUE,
			],
			'jenis_uttp'       => [
				'type' => 'INT',
				'constraint'     => 11,
			],
			'merek'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'kapasitas'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'buatan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'pemilik'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'penguji'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'tanggal_pengujian'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d H:i:s')
			],
			'tanggal_pengujian_ulang'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d H:i:s')
			],
			'no_polisi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'metode'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			'no_kode_plat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'     => 0,
			],
			
		]);
		$this->forge->addKey('id_pengujian', true);
		$this->forge->createTable('pengujian');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pengujian');
	}
}
