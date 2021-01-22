<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalPengujian extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'jadwal_pengujian_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'jadwal_pengujian_penguji'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unique' 		 => true,
			],
			'jadwal_pengujian_tera_id'       => [
			'type'           => 'int',
				'constraint'     => '11',

			],
			'jadwal_pengujian_tanggal'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d')
			],

			'jadwal_pengujian_created'       => [
				'type'           => 'TIMESTAMP',
				'default' => date('Y-m-d')
			],
		]);
		$this->forge->addKey('jadwal_pengujian_id', true);
		$this->forge->createTable('jadwal_pengujian');
	}


	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('jadwal_pengujian');
	}
}
