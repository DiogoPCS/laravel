<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CursoSeeder extends Seeder
{
    private const CORES = ['0433bf', '436dec', '1d1d1f', 'ff9f0a', '34c759'];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@mustache.com'],
            [
                'name' => 'Admin Mustache',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'is_admin' => true,
            ]
        );

        $aluno = User::firstOrCreate(
            ['email' => 'aluno@mustache.com'],
            [
                'name' => 'Aluno Demo',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        $cursos = [
            [
                'titulo' => 'Programação',
                'descricao' => 'Do zero à lógica de programação: variáveis, estruturas de controle, funções e boas práticas.',
                'nivel' => 'iniciante',
                'carga_horaria' => 40,
                'aulas' => [
                    'Introdução à lógica de programação',
                    'Variáveis e tipos de dados',
                    'Estruturas condicionais',
                    'Estruturas de repetição',
                    'Funções e escopo',
                    'Vetores e coleções',
                    'Introdução à orientação a objetos',
                    'Boas práticas e clean code',
                ],
                'matricular' => true,
            ],
            [
                'titulo' => 'Arquitetura de Solução',
                'descricao' => 'Fundamentos de arquitetura enterprise: cloud-native, microsserviços e event-driven.',
                'nivel' => 'avancado',
                'carga_horaria' => 32,
                'aulas' => [
                    'Enterprise Software Systems',
                    'O que é Arquitetura de Solução',
                    'Princípios de Design de Arquitetura',
                    'Microsserviços',
                    'Event-driven Architecture',
                    'Segurança em aplicações enterprise',
                ],
                'matricular' => true,
            ],
            [
                'titulo' => 'Banco de Dados',
                'descricao' => 'Modelagem relacional, normalização, índices e otimização de consultas SQL.',
                'nivel' => 'intermediario',
                'carga_horaria' => 24,
                'aulas' => [
                    'Modelagem de dados',
                    'Normalização',
                    'Consultas SQL avançadas',
                    'Índices e performance',
                ],
                'matricular' => false,
            ],
        ];

        foreach ($cursos as $dadosCurso) {
            $curso = Curso::updateOrCreate(
                ['slug' => Str::slug($dadosCurso['titulo'])],
                [
                    'titulo' => $dadosCurso['titulo'],
                    'descricao' => $dadosCurso['descricao'],
                    'nivel' => $dadosCurso['nivel'],
                    'carga_horaria' => $dadosCurso['carga_horaria'],
                ]
            );

            foreach ($dadosCurso['aulas'] as $indice => $tituloAula) {
                $aula = $curso->aulas()->updateOrCreate(
                    ['titulo' => $tituloAula],
                    [
                        'descricao' => "Aula sobre {$tituloAula}.",
                        'duracao_minutos' => fake()->numberBetween(10, 40),
                        'ordem' => $indice + 1,
                    ]
                );

                if (! $aula->thumbnail) {
                    $aula->update(['thumbnail' => $this->gerarThumbnailExemplo($aula)]);
                }
            }

            if ($dadosCurso['matricular']) {
                $curso->alunos()->syncWithoutDetaching([$aluno->id => ['matriculado_em' => now()]]);
            }
        }
    }

    private function gerarThumbnailExemplo(Aula $aula): string
    {
        $cor = self::CORES[$aula->id % count(self::CORES)];
        $texto = htmlspecialchars($aula->titulo, ENT_XML1);

        $svg = <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="640" height="360" viewBox="0 0 640 360">
            <rect width="640" height="360" fill="#{$cor}"/>
            <text x="320" y="190" font-size="30" fill="#ffffff" text-anchor="middle" font-family="Helvetica, Arial, sans-serif">{$texto}</text>
        </svg>
        SVG;

        $caminho = "thumbnails/aula-{$aula->id}.svg";

        Storage::disk('public')->put($caminho, $svg);

        return $caminho;
    }
}
