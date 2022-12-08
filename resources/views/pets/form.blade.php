<label>
    Nombre <br>
    <input type="text" name="Name" value=" {{ old('Name', $pet->Name) }} "> <br>
    @error('Name')
        <small style="color: red"> {{ $message }} </small>
    @enderror

</label><br>

<label>
    Especie <br>
    <input type="radio" name="Species" value="Perro"> Perro
    <input type="radio" name="Species" value="Gato"> Gato
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
    <input type="radio" name="Gender" value="Macho"> Macho
    <input type="radio" name="Gender" value="Hembra"> Hembra
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
    <input type="file" name="file">
    @error('file')
        <small style="color: red"> {{ $message }} </small>
    @enderror
</label><br>

{{-- <div style="padding: 30px; background: #f6f6f6;">
    <h3 class="mb-4">Leave a comment</h3>
    <form>
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website">
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group mb-0">
            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
        </div>
    </form>
</div> --}}
