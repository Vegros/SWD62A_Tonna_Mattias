<div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $student->name) }}" placeholder="Enter Student Name">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email', $student->email) }}" placeholder="Enter Student Email">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
               value="{{ old('phone', $student->phone) }}" placeholder="Enter Phone Number">
        @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror"
               value="{{ old('dob', $student->dob) }}">
        @error('dob')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">College</label>
        <select name="college_id" id="college_id" class="form-control @error('college_id') is-invalid @enderror">
            <option value="">-- Select College --</option>
            @foreach($colleges as $college)
                <option value="{{ $college->id }}" {{ old('college_id', $student->college_id ) == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
        @error('college_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

</div>

<style>
    .form-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .form-group label {
        font-weight: bold;
        color: #ccc;
        text-align: left;
        margin-bottom: 5px;
        width: 100%;
    }

    .invalid-feedback{
        font-weight: bold;
        text-align: left;
        margin-top: -10px;
        padding: 0;
        width: 100%;
    }

    .form-control {
        color: black;
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
        background: #f8f9fa;
    }

    .form-control:focus {
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    textarea {
        resize: none;
        height: 10vh;
    }


    .invalid-feedback {
        color: red;
    }

</style>
