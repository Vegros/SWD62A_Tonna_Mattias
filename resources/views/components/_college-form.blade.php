<div>
    <div class="form-group">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{old('name',$college->name)}}" placeholder="College Name">
        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="College Address">{{old('address',$college->address)}}</textarea>
        @error('address')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
<style>
    .form-control {
        color: black ;
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
    }

    .form-control:focus {
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    textarea {
        resize: none;
        height: 15vh;
    }

</style>
