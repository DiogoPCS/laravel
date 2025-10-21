<div class="col-6 d-flex flex-column justify-content-center text-secondary bg-light rounded-2 p-5">
             
    <h4 class="text-black text-center mb-4">Login Admin Tatuí Games</h4>

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label for="emailInput" class="form-label">Digite o seu Email</label>
            <input type="email" class="form-control" id="emailInput" name="email">
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <label for="passwordInput" class="form-label mb-0">Digite sua senha</label>
                <a href="#" class="form-text text-secondary" style="text-decoration: none;">Esqueceu sua senha?</a>
            </div>
            <input type="password" class="form-control" id="passwordInput" name="password">
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary btn-lg text-white">Login</button>
        </div>
    </form>
</div>