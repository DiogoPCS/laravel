<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beth Cientista</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: 'Baloo 2', cursive;
    }

    body{
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background: linear-gradient(180deg,#8a00b8,#d61bbd,#ff6b2c);
      overflow:hidden;
      position:relative;
    }

    /* bolinhas */
    body::before,
    body::after{
      content:'';
      position:absolute;
      width:8px;
      height:8px;
      background:white;
      border-radius:50%;
      opacity:0.6;
    }

    body::before{
      top:15%;
      left:20%;
    }

    body::after{
      bottom:10%;
      right:18%;
    }

    .login-box{
      width:400px;
      padding:35px;
      border-radius:30px;
      background: linear-gradient(90deg,#efd4f3,#f7dccf);
      box-shadow:0 10px 30px rgba(0,0,0,0.25);
    }

    .avatar{
      width:90px;
      height:90px;
      border-radius:50%;
      overflow:hidden;
      margin:auto;
      border:4px solid white;
      box-shadow:0 5px 15px rgba(0,0,0,0.2);
    }

    .avatar img{
      width:100%;
      height:100%;
      object-fit:cover;
    }

    h1{
      text-align:center;
      margin-top:15px;
      font-size:42px;
      color:#111827;
      font-weight:800;
    }

    .subtitle{
      text-align:center;
      color:#4b5563;
      font-size:22px;
      font-weight:700;
      margin-top:5px;
      margin-bottom:25px;
    }

    label{
      font-size:28px;
      font-weight:700;
      color:#111827;
      display:block;
      margin-bottom:10px;
    }

    .access{
      display:flex;
      gap:10px;
      margin-bottom:25px;
    }

    .access button{
      flex:1;
      padding:10px;
      border:none;
      border-radius:30px;
      font-size:18px;
      font-weight:700;
      cursor:pointer;
      transition:0.3s;
    }

    .student{
      background:linear-gradient(90deg,#b23cff,#8d2cff);
      color:white;
    }

    .teacher{
      background:#f3f4f6;
      border:1px solid #cbd5e1 !important;
    }

    input{
      width:100%;
      padding:14px;
      border:none;
      border-radius:15px;
      background:#ececec;
      margin-bottom:20px;
      font-size:16px;
      outline:none;
    }

    .login-btn{
      width:100%;
      padding:13px;
      border:none;
      border-radius:30px;
      background:#ff6b00;
      color:white;
      font-size:26px;
      font-weight:700;
      cursor:pointer;
      transition:0.3s;
      box-shadow:0 5px 15px rgba(255,107,0,0.4);
    }

    .login-btn:hover{
      transform:scale(1.03);
    }

    .demo{
      margin-top:25px;
      background:#fff5ea;
      border:2px solid #ffd7aa;
      padding:18px;
      border-radius:20px;
      text-align:center;
      font-weight:700;
      color:#374151;
    }

    .demo p{
      font-size:17px;
    }

    @media(max-width:500px){

      .login-box{
        width:90%;
        padding:25px;
      }

      h1{
        font-size:32px;
      }

      .subtitle{
        font-size:18px;
      }

    }

  </style>
</head>
<body>

  <div class="login-box">

    <div class="avatar">
      <img src="https://i.imgur.com/ZQZSWrt.png">
    </div>

    <h1>BETH CIENTISTA</h1>

    <div class="subtitle">
      Área exclusiva para clubistas e professores
    </div>

    <label>Tipo de Acesso</label>

    <div class="access">
      <button class="student">Aluno</button>
      <button class="teacher">Professor</button>
    </div>

    
    <form action="{{ route('loginaluno.adicionar') }}" method="post">
        @csrf 
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="seu.email@exemplo.com">
    
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="******">
    
        <button class="login-btn">
          ↗ Entrar
        </button>
    
        @isset($sucesso)
            <h1>{{ $sucesso }}</h1>
        @endisset
    </form>
    
    
        <div class="demo">
          <p>Demo: use qualquer email e senha</p>
          <p>
            Aluno: acessa área de publicações | 
            Professor: acessa área administrativa
          </p>
        </div>
  </div>

</body>
</html>