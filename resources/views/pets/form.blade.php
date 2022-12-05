<label>
    Nombre <br>
    <input type="text" name="Name" value=" {{ old('Name', $pet->Name) }} "> <br>
    @error('Name')
        <small style="color: red"> {{ $message }} </small>
    @enderror

</label><br>

<label>
    Especie <br>
    <input type="radio" name="Species" value="dog"> Perro
    <input type="radio" name="Species" value="cat"> Gato
    <input type="radio" name="Species" value="otro"> Otro
    @error('Species')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label> <br>

<label><br>
    Age <br>
    <input type="number" name="Age" value=" {{ old('Age', $pet->Age) }} ">
    @error('Age')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label><br>

<label>
    Sexo <br>
    <input type="radio" name="Gender" value="M"> Macho
    <input type="radio" name="Gender" value="H"> Hembra
    @error('Gender')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label> <br>

<label>
    Raza <br>
    <input type="text" name="Race" value=" {{ old('Race', $pet->Race) }} ">
    @error('Race')
        <small style="color: red"> {{ $message }} </small>
    @enderror

</label><br>

<label>
    Comentarios o descripcion de la mascota :) <br>
    <input type="textarea" name="Comments" value=" {{ old('Comments', $pet->Comments) }} ">
    @error('Comments')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label><br>

<label>
    sube una foto de tu mascota <br>
    <input type="file" name="file" accept="image/*" value=" {{ old('Comments', $pet->file) }} ">
    @error('Comments')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label><br>
