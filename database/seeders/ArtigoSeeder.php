<?php

namespace Database\Seeders;

use App\Models\Artigo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtigoSeeder extends Seeder
{
    private const CORES = ['0433bf', '1d1d1f', '436dec'];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $autor = User::where('is_admin', true)->first();

        $artigos = [
            [
                'titulo' => '5 hábitos que separam devs juniores de devs seniores',
                'subtitulo' => 'Não é só sobre escrever código: é sobre como você pensa sobre o problema.',
                'resumo' => 'Conheça as práticas de estudo, revisão e comunicação que aceleram a evolução de qualquer desenvolvedor.',
                'conteudo' => "A diferença entre um desenvolvedor júnior e um sênior raramente está na sintaxe da linguagem.\n\nEla está em hábitos: ler código antes de escrever, entender o problema antes de propor a solução, e pedir feedback antes de considerar algo pronto.\n\nSeniores também documentam decisões, não apenas o código. Eles sabem que a razão por trás de uma escolha é tão importante quanto a escolha em si.\n\nOutro hábito comum é a comunicação assíncrona: escrever bem para que o time inteiro entenda o contexto, sem depender de uma reunião.\n\nPor fim, seniores tratam erros como dados. Cada bug em produção vira uma pergunta: como o processo permitiu isso, e o que muda para a próxima vez?\n\nSe você aplicar esses hábitos hoje, a experiência vem com o tempo — mas a maturidade técnica pode começar agora.",
            ],
            [
                'titulo' => 'Por que todo desenvolvedor deveria entender arquitetura de software',
                'subtitulo' => 'Escrever uma função é fácil. Projetar um sistema que sobrevive a anos de mudanças é o verdadeiro desafio.',
                'resumo' => 'Entenda como decisões de arquitetura tomadas hoje evitam dores de cabeça em produção daqui a dois anos.',
                'conteudo' => "Todo sistema começa simples. O problema é que a maioria não permanece assim.\n\nArquitetura de software não é sobre usar a tecnologia mais nova — é sobre tomar decisões que reduzem o custo de mudança no futuro.\n\nQuando um time entende os limites de um módulo, sabe onde adicionar uma funcionalidade sem quebrar outras dez. Isso não acontece por acaso: é resultado de design intencional.\n\nConceitos como acoplamento, coesão e separação de responsabilidades parecem acadêmicos até o dia em que uma mudança simples leva três dias porque tudo está conectado a tudo.\n\nEntender arquitetura não significa desenhar diagramas complexos antes de escrever a primeira linha de código. Significa fazer perguntas certas: o que muda com frequência? O que precisa ser estável? Onde o sistema vai crescer?\n\nDesenvolvedores que pensam em arquitetura, mesmo em tarefas pequenas, entregam código que o time consegue manter — não apenas código que funciona hoje.",
            ],
            [
                'titulo' => 'Aprendendo lógica de programação: por onde começar de verdade',
                'subtitulo' => 'Antes de escolher uma linguagem, escolha entender como resolver problemas.',
                'resumo' => 'Um guia direto para quem está começando agora e não sabe se foca em sintaxe, projetos ou teoria.',
                'conteudo' => "Um erro comum de quem está começando é pular direto para \"qual linguagem aprender\" sem antes treinar a lógica por trás de qualquer código.\n\nLógica de programação é a habilidade de quebrar um problema grande em passos pequenos e claros. Isso é independente de linguagem.\n\nUma boa forma de treinar é resolver problemas no papel antes de abrir o editor: descreva o passo a passo em português, depois traduza para código.\n\nVariáveis, condicionais e repetições são os blocos básicos de praticamente tudo que você vai construir depois — inclusive sistemas complexos.\n\nNão tenha pressa para aprender frameworks. Primeiro, sinta-se confortável resolvendo pequenos desafios lógicos consistentemente.\n\nCom essa base, aprender qualquer linguagem nova se torna uma questão de sintaxe, não de raciocínio do zero.",
            ],
        ];

        foreach ($artigos as $indice => $dados) {
            $artigo = Artigo::updateOrCreate(
                ['slug' => Str::slug($dados['titulo'])],
                [
                    'titulo' => $dados['titulo'],
                    'subtitulo' => $dados['subtitulo'],
                    'resumo' => $dados['resumo'],
                    'conteudo' => $dados['conteudo'],
                    'autor_id' => $autor?->id,
                    'publicado' => true,
                    'publicado_em' => now()->subDays(($indice + 1) * 3),
                ]
            );

            if (! $artigo->thumbnail) {
                $artigo->update(['thumbnail' => $this->gerarThumbnailExemplo($artigo)]);
            }
        }
    }

    private function gerarThumbnailExemplo(Artigo $artigo): string
    {
        $cor = self::CORES[$artigo->id % count(self::CORES)];
        $texto = htmlspecialchars($artigo->titulo, ENT_XML1);

        $svg = <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="800" height="450" viewBox="0 0 800 450">
            <rect width="800" height="450" fill="#{$cor}"/>
            <text x="400" y="235" font-size="34" fill="#ffffff" text-anchor="middle" font-family="Helvetica, Arial, sans-serif">Blog Mustache</text>
        </svg>
        SVG;

        $caminho = "artigos/artigo-{$artigo->id}.svg";

        Storage::disk('public')->put($caminho, $svg);

        return $caminho;
    }
}
