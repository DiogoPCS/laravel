@include('head.head')

<body id="bg-login">
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100"> <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid" id="logo" >
        </div>    

        <div class="col-6 d-flex flex-column justify-content-center text-secondary bg-light rounded-2 p-5" id="login-box">
             
             <div class="row d-flex align-items-start mb-3">
                <label for="nome">Digite o seu Eamil</label>
                <input type="text" class="bg-secondary border-0 rounded w-100">
            </div>

            <div class="row d-flex align-items-end mb-3">
                <label for="senha">Digite sua senha</label>
                <input type="password" class="bg-secondary border-0 rounded w-100">
            </div>
            <div class="row">
                <button type="submit" class="border-0 rounded-2 bg-primary text-dark w-100"><h2 class="opacity-50">Login </h2></button>
            </div>
        </div>
        </div>
        </div>    
    </div>
</body>