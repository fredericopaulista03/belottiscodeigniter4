<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class JobsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR'); // Usar Faker em português
        
        // Obter instância do DB
        $db = \Config\Database::connect();
        
        // Desabilitar verificações de chaves estrangeiras para inserção mais rápida
        $db->disableForeignKeyChecks();

        // Limpar tabela se já existir dados
        $db->table('jobs')->truncate();

        // Array de status possíveis
        $statusOptions = ['rascunho', 'publicada', 'arquivada'];

        // Dados fictícios para 10 vagas
        $jobs = [];
        for ($i = 0; $i < 10; $i++) {
            $salary = $faker->randomFloat(2, 2000, 15000);
            $deadline = $faker->dateTimeBetween('now', '+3 months')->format('Y-m-d');
            
            $jobs[] = [
                'name' => $faker->jobTitle,
                'company' => $faker->company,
                'location' => $faker->city . ', ' . $faker->stateAbbr,
                'description' => $faker->realText(200),
                'salary' => $salary,
                'application_deadline' => $deadline,
                'experience' => $faker->randomElement(['Júnior', 'Pleno', 'Sênior']),
                'benefits' => implode("\n", [
                    '- ' . $faker->randomElement(['Plano de saúde', 'Vale-refeição', 'Vale-transporte']),
                    '- ' . $faker->randomElement(['Home office', 'Horário flexível', 'Gympass']),
                    '- ' . $faker->randomElement(['Bônus anual', 'Participação nos lucros', 'Seguro de vida'])
                ]),
                'status' => $faker->randomElement($statusOptions),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => $faker->optional(0.2)->dateTimeThisYear // 20% de chance de estar deletado
            ];
        }

        // Inserir dados
        $db->table('jobs')->insertBatch($jobs);

        // Re-habilitar verificações de chaves
        $db->enableForeignKeyChecks();

        echo "10 vagas de emprego criadas com sucesso!\n";
    }
}