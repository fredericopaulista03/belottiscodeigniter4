<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContatosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'nome'      => ['type' => 'VARCHAR', 'constraint' => 150],
            'email'     => ['type' => 'VARCHAR', 'constraint' => 150],
            'telefone'  => ['type' => 'VARCHAR', 'constraint' => 50],
            'empresa'   => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'assunto'   => ['type' => 'VARCHAR', 'constraint' => 150],
            'mensagem'  => ['type' => 'TEXT'],
            'aceite'    => ['type' => 'TINYINT', 'default' => 0],
            'created_at'=> ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contatos');
    }

    public function down()
    {
        //
    }
}