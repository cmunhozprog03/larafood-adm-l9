@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" name="name" class="form-control text-bold"
        value="{{ $detail->name ?? old('name') }}">

    @error('name')
        <span class="text-danger text-bold">{{ $message }}</span>
    @enderror
</div>


