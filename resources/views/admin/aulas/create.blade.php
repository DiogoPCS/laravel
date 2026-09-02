<x-layouts.admin :title="'Nova aula · '.$curso->titulo">
    <div class="wrap">
        <div class="page-head" style="padding-top: 8px;">
            <a href="{{ route('admin.cursos.edit', $curso) }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                {{ $curso->titulo }}
            </a>
            <span class="eyebrow">Nova aula</span>
            <h1>Adicionar aula</h1>
        </div>

        <div class="form-card">
            <form method="POST" action="{{ route('admin.aulas.store', $curso) }}" enctype="multipart/form-data">
                @csrf
                @include('admin.aulas._form', ['rotuloBotao' => 'Adicionar aula'])
            </form>
        </div>
    </div>
</x-layouts.admin>
