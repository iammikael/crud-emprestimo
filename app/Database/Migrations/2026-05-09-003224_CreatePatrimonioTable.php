<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePatrimonioTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_patrimonio' =>[
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome_patrimonio' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'cod_patrimonio' =>[
                'type'       => 'INT',
                'constraint' => 100
            ],
            'tipo_patrimonio' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'data_entrada' =>[
                'type' => 'DATE',
                'null' => true,
            ],
            'estab_pai' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
            $this->forge->addkey('id_patrimonio',true);
            $this->forge->CreateTable('patrimonio');
    }

    public function down()
    {
            $this->forge->dropTable('patrimonio');
    }
}
