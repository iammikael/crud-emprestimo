<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEstabelecimentosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'razao_social' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nome_fantasia' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'cnpj' =>[
                'type'       => 'VARCHAR',
                'constraint' => 18,
            ],
            'ramo_atividade' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
            $this->forge->addKey('id', true);

            $this->forge->createTable('estabelecimentos');
    }

    public function down()
    {
         $this->forge->dropTable('estabelecimentos');
    }
}
