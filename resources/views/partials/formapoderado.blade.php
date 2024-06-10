@csrf


<div class="box-editar">
    <table>
        <tr>
            <th>Apellidos</th>
            <td><input type="text" name="Apellidos" id="Apellidos" value="{{old('Apellidos',$apoderado->Apellidos)}}"></td>
        </tr>
        <tr>
            <th>Nombres</th>
            <td><input type="text" name="Nombres" id="Nombres" value="{{old('Nombres',$apoderado->Nombres)}}"></td>
        </tr>
        <tr>
            <th>Dni</th>
            <td><input type="text" name="Dni" id="Dni" value="{{old('Dni',$apoderado->Dni)}}"></td>
        </tr>
        <tr>
            <th>Fecha Nacimiento</th>
            <td><input type="text" name="FechaNacimiento" id="FechaNacimiento" value="{{old('FechaNacimiento',$apoderado->FechaNacimiento)}}"></td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td><input type="text" name="Telefono" id="Telefono" value="{{old('Telefono',$apoderado->Telefono)}}"></td>
        </tr>
        <tr>
            <th>FOTO PERFIL</th>
            <td>
                
                    <img src="/storage/{{$apoderado->image}}" alt="{{$apoderado->Nombres}} " width="50" height="50">
                
            </td>
        </tr>
        <tr>
            <th>Subir Imagen</th>
            <td><input type="file" name="image" id="image"></td>
        </tr>
        <tr>
            <th>UsuarioID</th>
            <td><input type="text" name="UsuarioID" id="UsuarioID" value="{{old('UsuarioID',$apoderado->UsuarioID)}}" readonly></td>
        </tr>
        <tr>
            <td><button>{{$btnText}}</button></td>
            <td></td>
        </tr>
    </table>
    
    <a class="btn-regresar" href="{{route('apoderado.index')}}">Regresar</a>
</div>

