<x-layouts.admin :title="'Novo curso · Admin'">
    <div class="wrap">
        <div class="page-head" style="padding-top: 8px;">
            <a href="{{ route('admin.cursos.index') }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                Cursos
            </a>
            <span class="eyebrow">Novo curso</span>
            <h1>Criar curso</h1>
        </div>

        <div class="form-card">
            <form method="POST" action="{{ route('admin.cursos.store') }}" enctype="multipart/form-data">
                @csrf
                @include('admin.cursos._form', ['rotuloBotao' => 'Criar curso'])
            </form>
        </div>
    </div>
</x-layouts.admin>
