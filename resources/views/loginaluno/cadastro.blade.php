<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastro - Beth Cientista</title>

<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Baloo 2', cursive;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(180deg,#8b00b8,#d91cc1,#ff6b2c);
    overflow:hidden;
    position:relative;
}

/* BOLINHAS */

body::before,
body::after{
    content:'';
    position:absolute;
    width:8px;
    height:8px;
    background:white;
    border-radius:50%;
    opacity:.7;
}

body::before{
    top:18%;
    left:15%;
}

body::after{
    bottom:12%;
    right:18%;
}

/* CARD */

.register-box{
    width:450px;
    background:linear-gradient(90deg,#efd5f3,#f8dccf);
    border-radius:30px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.25);
}

.avatar{
    width:95px;
    height:95px;
    margin:auto;
    border-radius:50%;
    overflow:hidden;
    border:4px solid white;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.title{
    text-align:center;
    margin-top:18px;
    font-size:42px;
    color:#111827;
    font-weight:800;
}

.subtitle{
    text-align:center;
    color:#4b5563;
    font-size:22px;
    font-weight:700;
    margin-bottom:25px;
}

/* FORM */

form{
    display:flex;
    flex-direction:column;
    gap:18px;
}

label{
    font-size:26px;
    color:#111827;
    font-weight:700;
    margin-bottom:5px;
}

input, select{
    width:100%;
    padding:14px;
    border:none;
    border-radius:15px;
    background:#ececec;
    font-size:16px;
    outline:none;
}

input:focus,
select:focus{
    border:2px solid #a855f7;
}

/* BOTÕES */

.access{
    display:flex;
    gap:10px;
}

.access button{
    flex:1;
    padding:11px;
    border:none;
    border-radius:30px;
    cursor:pointer;
    font-size:18px;
    font-weight:700;
    transition:.3s;
}

.student{
    background:linear-gradient(90deg,#b23cff,#8d2cff);
    color:white;
}

.teacher{
    background:#f3f4f6;
    color:black;
    border:1px solid #d1d5db;
}

.register-btn{
    width:100%;
    margin-top:10px;
    padding:14px;
    border:none;
    border-radius:30px;
    background:#ff6b00;
    color:white;
    font-size:24px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
    box-shadow:0 5px 15px rgba(255,107,0,.4);
}

.register-btn:hover{
    transform:scale(1.03);
}

/* FOOTER */

.footer{
    margin-top:20px;
    text-align:center;
    font-size:18px;
    font-weight:700;
    color:#4b5563;
}

.footer a{
    color:#9333ea;
    text-decoration:none;
}

.success{
    margin-top:15px;
    background:#dcfce7;
    color:#166534;
    padding:12px;
    border-radius:12px;
    text-align:center;
    display:none;
    font-weight:700;
}

@media(max-width:500px){

    .register-box{
        width:92%;
        padding:25px;
    }

    .title{
        font-size:34px;
    }

}

</style>
</head>
<body>

<div class="register-box">

    <!-- AVATAR -->

    <div class="avatar">
        <img src="https://i.imgur.com/ZQZSWrt.png">
    </div>

    <!-- TÍTULO -->

    <h1 class="title">
        BETH CIENTISTA
    </h1>

    <div class="subtitle">
        Crie sua conta na plataforma
    </div>

    <!-- FORM -->

    <form id="cadastroForm">

        <!-- TIPO -->

        <div>

            <label>Tipo de Conta</label>

            <div class="access">

                <button 
                    type="button"
                    class="student"
                    onclick="selecionarAluno()"
                >
                    Aluno
                </button>

                <button 
                    type="button"
                    class="teacher"
                    onclick="selecionarProfessor()"
                >
                    Professor
                </button>

            </div>

        </div>

        <!-- NOME -->

        <div>
            <label>Nome Completo</label>
            <input 
                type="text"
                id="nome"
                placeholder="Digite seu nome"
                required
            >
        </div>

        <!-- EMAIL -->

        <div>
            <label>Email</label>
            <input 
                type="email"
                id="email"
                placeholder="seu.email@exemplo.com"
                required
            >
        </div>

        <!-- SENHA -->

        <div>
            <label>Senha</label>
            <input 
                type="password"
                id="senha"
                placeholder="********"
                required
            >
        </div>

        <!-- ÁREA -->

        <div>
            <label>Área Científica</label>

            <select id="area">

                <option>Biologia</option>
                <option>Química</option>
                <option>Física</option>
                <option>Astronomia</option>
                <option>Anatomia</option>

            </select>
        </div>

        <!-- BOTÃO -->

        <button 
            type="submit"
            class="register-btn"
        >
            ↗ Criar Conta
        </button>

    </form>

    <!-- SUCESSO -->

    <div class="success" id="successBox">
        Cadastro realizado com sucesso!
    </div>

    <!-- LOGIN -->

    <div class="footer">
        Já possui conta?
        <a href="login.html">
            Entrar
        </a>
    </div>

</div>

</body>
</html>