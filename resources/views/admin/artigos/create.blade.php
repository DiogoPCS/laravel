<x-layouts.admin :title="'Novo artigo · Admin'">
    <div class="wrap">
        <div class="page-head" style="padding-top: 8px;">
            <a href="{{ route('admin.artigos.index') }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                Artigos
            </a>
            <span class="eyebrow">Novo artigo</span>
            <h1>Escrever artigo</h1>
        </div>

        <div class="form-card" style="max-width: 760px;">
            <form method="POST" action="{{ route('admin.artigos.store') }}" enctype="multipart/form-data">
                @csrf
                @include('admin.artigos._form', ['rotuloBotao' => 'Salvar artigo'])
            </form>
        </div>
    </div>
</x-layouts.admin>
