<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarefa::create([ 
            'titulo' => 'Limpar sapatos', 
            'descicracao' => 'Limpar os sapatos antes de entrar', 
        ]);
        Tarefa::create([ 
            'titulo' => 'Lavar as mãos', 
            'descricao' => 'Lavar as mãos ao entrar em casa', 
        ]);
        
        Tarefa::create([ 
            'titulo' => 'Fechar janelas', 
            'descricao' => 'Fechar todas as janelas antes de sair de casa', 
        ]);
        
        Tarefa::create([ 
            'titulo' => 'Regar plantas', 
            'descricao' => 'Regar as plantas no jardim', 
        ]);
        
        Tarefa::create([ 
            'titulo' => 'Verificar correio', 
            'descricao' => 'Verificar o correio e organizar as cartas', 
        ]);
        
    }
}
