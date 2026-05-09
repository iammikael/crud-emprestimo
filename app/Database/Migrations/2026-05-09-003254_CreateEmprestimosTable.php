<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmprestimosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'num_emprest' => [ 
                'type'           => 'INT',
                'constraint'     => 7,
            ],
            'dados_estab_req_id' => [
                'type'       => 'INT',
            ],
            'dados_estab_atend_id' => [
                'type'       => 'INT',
            ],
            'patrimonio_id' => [
                'type'       => 'INT',
            ],
            'data_emprest' => [
                'type' => 'DATE',
            ],
            'dados_devolucao' => [
                'type' => 'DATE',
            ],
        ]);
            $this->forge->addkey('num_emprest',true);
            $this->forge->CreateTable('emprestimos');
    }

    public function down()
    {
            $this->forge->dropTable('emprestimos');
    }
}
