<div class="container">

    <h1 class="titulo">Cadastrar Aluno</h1>

    <form action="{{ route('aluno.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">

        <button type="submit">Salvar</button>
    </form>
<br>
    @isset($alunos)

        <h2 class="subtitulo">Lista de Alunos</h2>

        <div class="cards-container">
            @foreach($alunos as $aluno)
                <div class="card-aluno">
                    <h3>{{ $aluno->nome }}</h3>
                </div>
            @endforeach
        </div>

    @endisset

</div>

<style>
    body{
        background-color:rgb(214, 215, 250);
        font-family: Arial, Helvetica, sans-serif;
    }

    .container{
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
    }

    .titulo{
        color:rgb(88, 125, 150);
        margin-bottom: 20px;
        text-align: center;
    }

    .subtitulo{
        color:rgb(78, 114, 138); ;
        margin-bottom: 15px;
        text-align:center;
    }

    .form-box{
        background-color:rgb(195, 211, 247);
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }

    .form-box label{
        display: block;
        margin-bottom: 8px;
        color:rgb(35, 75, 100);
        font-weight: bold;
    }

    .form-box input{
        width: 100%;
        padding: 10px;
        border: 1px solidrgb(82, 118, 150);
        border-radius: 8px;
        margin-bottom: 15px;
        outline: none;
    }

    .form-box input:focus{
        border-color:rgb(78, 120, 148);
        box-shadow: 0 0 5px #8fd0ff;
    }

    .form-box button{
        background-color:rgb(69, 113, 143);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .form-box button:hover{
        background-color:rgb(58, 92, 114);
    }

    .cards-container{
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .card-aluno{
        background-color: #ffffff;
        border-left: 5px solidrgb(53, 89, 112);
        padding: 15px;
        border-radius: 10px;
        width: 180px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        transition: transform 0.2s;
    }

    .card-aluno:hover{
        transform: translateY(-3px);
    }

    .card-aluno h3{
        margin: 0;
        color:rgb(84, 104, 126);
        font-size: 18px;
    }
</style>