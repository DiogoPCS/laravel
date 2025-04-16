@extends('_partials.body')

@section('content')
<div class="container-fluid mt-3">

    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Resumo da Votação</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total de Votos</h5>
                            <p class="card-text display-4">{{ $totalVotos }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Votos Confirmados</h5>
                            <p class="card-text display-4">{{ $votosConfirmados }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Votos Pendentes</h5>
                            <p class="card-text display-4">{{ $totalVotos - $votosConfirmados }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            <h5 class="mt-4">Votos por Chapa</h5>
            <canvas id="chartVotos" height="100"></canvas>
            <hr>
            <h5 class="mt-4">Votos Confirmados por Chapa</h5>
            <canvas id="chartConfirmados" height="100"></canvas>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detalhes dos Votos</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Data/Hora</th>
                            <th>E-mail</th>
                            <th>Chapa</th>
                            <th>Status</th>
                            <th>Última Atualização</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($votos as $voto)
                            <tr>
                                <td>{{ $voto->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $voto->email }}</td>
                                <td>
                                    <span class="badge text-bg-secondary">{{ $voto->chapa }}</span>
                                </td>
                                <td>
                                    @if($voto->confirmed)
                                        <span class="badge text-bg-success">Confirmado</span>
                                    @else
                                        <span class="badge text-bg-warning">Pendente</span>
                                    @endif
                                </td>
                                <td>{{ $voto->updated_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum voto registrado ainda</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                
                @if($votos->hasPages())
                     {{-- Paginação --}}
                        <div class="d-flex justify-content-center mt-4">
                            {{ $votos->links('pagination::bootstrap-4') }}
                        </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('chartVotos').getContext('2d');
        const votosPorChapa = @json($votosPorChapa);

        //Gráfico Confirmados por Chapa
        const ctxConfirmados = document.getElementById('chartConfirmados').getContext('2d');
        const votosConfirmadosPorChapa = @json($votosConfirmadosPorChapa);
        
        const chapas = Object.keys(votosPorChapa);
        const valores = Object.values(votosPorChapa);

        //Gráfico Confirmados por Chapa
        const chapasConfirmadas = Object.keys(votosConfirmadosPorChapa);
        const valoresConfirmados = Object.values(votosConfirmadosPorChapa);
        
        const colors = [
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 99, 132, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(153, 102, 255, 0.7)'
        ];
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chapas,
                datasets: [{
                    label: 'Votos por Chapa',
                    data: valores,
                    backgroundColor: colors,
                    borderColor: colors.map(color => color.replace('0.7', '1')),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });

        new Chart(ctxConfirmados, {
            type: 'bar',
            data: {
                labels: chapasConfirmadas,
                datasets: [{
                    label: 'Votos Confirmados por Chapa',
                    data: valoresConfirmados,
                    backgroundColor: 'rgba(40, 167, 69, 0.7)',
                    borderColor: 'rgba(40, 167, 69, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    });
</script>
@endpush

<style>
    .badge {
        font-size: 0.9em;
        padding: 0.5em 0.75em;
    }
    .card-header {
        font-weight: 600;
    }
    .table th {
        font-weight: 600;
        white-space: nowrap;
    }
</style>
@endsection