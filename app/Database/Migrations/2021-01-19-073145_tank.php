<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tank extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengujian_tank'          => [
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
			't1_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
				
			],
			't1_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			't2_muka'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			't2_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			't3_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			't3_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			't4_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
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
			't4_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'T_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'T_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'd_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'd_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'p_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'p_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'q_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'q_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			's_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			's_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'kepekaan_index_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'kepekaan_index_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'ruang_kosong_tum_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'ruang_kosong_tum_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'diameter_pipa_penyerap'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'panjang_pipa_penyerapan_muka'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],
			'panjang_pipa_penyerapan_belakang'       => [
				'type' => 'INT',
				'constraint'     => 11,
				'default'     => 0,
			],

		]);
		$this->forge->addKey('id_pengujian_tank', true);
		$this->forge->createTable('pengujian_tank');
		$this->db->enableForeignKeyChecks();
	}


	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('pengujian_tank');

	}
}
