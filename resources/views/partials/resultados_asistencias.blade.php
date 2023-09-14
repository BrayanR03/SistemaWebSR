@if ($nuevosResultados->count() > 0)
    <table>
        <tr>
            <th>Fecha Asistencia</th>
            <th>Estado</th>
        </tr>
        @foreach ($nuevosResultados as $asistencia)
            <tr>
                <td>{{$asistencia->FechaAsistencia}}</td>
                <td>{{ $asistencia->Asistencia }}</td>
            </tr>
        @endforeach
    </table>
@else
    <p>No hay Datos</p>
@endif
