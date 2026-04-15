<style>
    body {
        background: linear-gradient(135deg, rgb(245, 210, 248), rgb(230, 170, 235));
        font-family: Arial, sans-serif;
    }

    form {
        max-width: 400px;
        margin: 60px auto;
        padding: 30px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(217, 84, 230, 0.2);
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        font-weight: bold;
        color: rgb(217, 84, 230);
    }

    input {
        padding: 10px;
        margin-top: 5px;
        border-radius: 8px;
        border: 2px solid rgba(217, 84, 230, 0.3);
        transition: 0.3s;
        outline: none;
        background: rgba(217, 84, 230, 0.05);
    }

    input:focus {
        border-color: rgb(217, 84, 230);
        box-shadow: 0 0 8px rgba(217, 84, 230, 0.4);
    }

    input:hover {
        border-color: rgba(217, 84, 230, 0.6);
    }

    button {
        margin-top: 20px;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: rgb(217, 84, 230);
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: rgb(190, 60, 205);
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(217, 84, 230, 0.4);
    }

    h1 {
        margin-top: 15px;
        color: rgb(217, 84, 230);
        font-size: 18px;
        text-align: center;
    }
</style>

<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf 
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

    <button type="submit">Salvar</button>

    @isset($sucesso)
        <h1>{{ $sucesso }}</h1>
    @endisset
</form>