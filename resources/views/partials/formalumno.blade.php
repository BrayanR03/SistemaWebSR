@csrf

<div class="box-editar">
    <table>
        <tr>
            <th>Apellidos</th>
            <td><input type="text" name="Apellidos" id="Apellidos" value="{{old('Apellidos',$alumno->Apellidos)}}"></td>
        </tr>
        <tr>
            <th>Nombres</th>
            <td><input type="text" name="Nombres" id="Nombres" value="{{old('Nombres',$alumno->Nombres)}}"></td>
        </tr>
        <tr>
            <th>Dni</th>
            <td><input type="text" name="Dni" id="Dni" value="{{old('Dni',$alumno->Dni)}}"></td>
        </tr>
        <tr>
            <th>Fecha Nacimiento</th>
            <td><input type="text" name="FechaNacimiento" id="FechaNacimiento" value="{{old('FechaNacimiento',$alumno->FechaNacimiento)}}"></td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td><input type="text" name="Telefono" id="Telefono" value="{{old('Telefono',$alumno->Telefono)}}"></td>
        </tr>
        <tr>
            
            <th>FOTO PERFIL</th>
            <td>
                @auth
                    <img src="/storage/{{$alumno->image}}" alt="{{$alumno->Nombres}} " width="50" height="50">
                @endauth
            </td>
        </tr>
        <tr>
            <th>Subir Imagen</th>
            <td><input type="file" name="image" id="image"></td>
        </tr>
        <tr>
            <th>ApoderadoID</th>
            <td><input type="text" name="ApoderadoID" id="ApoderadoID" value="{{old('ApoderadoID',$alumno->ApoderadoID)}}"></td>
        </tr>
        <tr>
            <th>GradoSeccionID</th>
            <td><input type="text" name="GradoSeccionID" id="GradoSeccionID" value="{{old('GradoSeccionID',$alumno->GradoSeccionID)}}"></td>
        </tr>
        <tr>
            <td><button>{{$btnText}}</button></td>
        </tr>
    </table>

    <a class="btn-regresar" href="{{route('alumno.index')}}">Regresar</a>
</div>
