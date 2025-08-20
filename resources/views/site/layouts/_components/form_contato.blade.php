{{ $slot }}

<form action={{ route('site.contato') }} method="post" class="{{ $dark}}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
    </div>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    </div>

    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <input type="text" class="form-control" id="mensagem" name="mensagem" value="{{ old('mensagem') }}">
        {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    </div>

    <div class="mb-3">
        <select name="motivo_contato" class="form-select">
            <option selected>Qual o motivo do contato?</option>
            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
        </select>
        {{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : '' }}
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif