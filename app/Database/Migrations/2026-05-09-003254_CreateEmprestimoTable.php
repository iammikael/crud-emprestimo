<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmprestimoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'num_emprest' => [ 
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'dados_estab_req' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'dados_estab_atend' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'patrimonio' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'data_emprest' => [
                'type' => 'DATE',
            ],
            'dados_devolucao' => [
                'type' => 'DATE',
            ],
        ]);
            $this->forge->addkey('num_emprest',true);
            $this->forge->CreateTable('emprestimo');
    }

    public function down()
    {
            $this->forge->dropTable('emprestimo');
    }
}
