@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" name="name" class="form-control text-bold"
        value="{{ $plan->name ?? old('name') }}">

    @error('name')
        <span class="text-danger text-bold">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="price">Valor</label>
    <input type="text" name="price" class="form-control text-bold"
        value="{{ $plan->price ?? old('price') }}">

    @error('price')
        <span class="text-danger text-bold">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Descrição</label>
    <textarea name="description" cols="30" rows="3" class="form-control text-bold">{{ $plan->description ?? old('description') }}
    </textarea>

    @error('description')
        <span class="text-danger text-bold">{{ $message }}</span>
    @enderror
</div>
