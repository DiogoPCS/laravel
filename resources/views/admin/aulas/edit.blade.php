<x-layouts.admin :title="'Editar aula · '.$curso->titulo">
    <div class="wrap">
        <div class="page-head" style="padding-top: 8px;">
            <a href="{{ route('admin.cursos.edit', $curso) }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                {{ $curso->titulo }}
            </a>
            <span class="eyebrow">Editar aula</span>
            <h1>{{ $aula->titulo }}</h1>
        </div>

        <div class="form-card">
            <form method="POST" action="{{ route('admin.aulas.update', $aula) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.aulas._form', ['rotuloBotao' => 'Salvar alterações'])
            </form>
        </div>
    </div>
</x-layouts.admin>
