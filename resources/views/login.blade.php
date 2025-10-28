@include('head.head')

<body class="bg-login">
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100"> 
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid" id="logo" >
            </div>    

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-secondary bg-light rounded-2 p-5" id="login-box">
             
                
                <form method="POST" action="{{ route('login') }}">
                    
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="row d-flex align-items-start mb-3">
                        <label for="email">Digite o seu Email</label>
                        
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="bg-secondary border-0 rounded w-100" required autofocus>
                    </div>

                    <div class="row d-flex align-items-end mb-3">
                        <label for="password">Digite sua senha</label>
                        
                        <input id="password" type="password" name="password" class="bg-secondary border-0 rounded w-100" required>
                    </div>

                   
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded" name="remember">
                            <span class="ms-2 text-sm text-gray-600">Lembrar-me</span>
                        </label>
                    </div>

                    
                    <div class="row mt-4">
                        <button type="submit" class="d-flex justify-content-center border-0 rounded-2 bg-primary text-dark w-100 text-decoration-none">
                            <h2 class=" opacity-50">Login</h2>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>