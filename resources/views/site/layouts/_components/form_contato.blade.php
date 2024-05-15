{{ $slot }}

<form action={{ route('site.contato') }} method="post" class="{{ $dark}}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>

    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <input type="text" class="form-control" id="mensagem" name="mensagem">
    </div>

    <div class="mb-3">
        <select name="motivo" class="form-select">
            <option selected>Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>