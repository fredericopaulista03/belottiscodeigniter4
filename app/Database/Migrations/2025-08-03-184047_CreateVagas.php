<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVagas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'comment' => 'Ex: Estágio Ensino Médio - São Miguel Paulista - São Paulo/SP'
            ],
            'data_publicacao' => [
                'type' => 'DATE',
                'null' => false,
                'comment' => 'Data da publicação da vaga'
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true,
                'comment' => 'Descrição detalhada da vaga'
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['rascunho', 'publicada', 'arquivada'],
                'default' => 'rascunho',
                'comment' => 'Status da vaga'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('titulo');
        $this->forge->addKey('data_publicacao');
        $this->forge->createTable('vagas');
    }

    public function down()
    {
        $this->forge->dropTable('vagas');
    }
}