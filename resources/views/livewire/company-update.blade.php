<div class="p-2">

  <div class="form-group">
    <label for="">Company Name</label>
    <input type="email" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" wire:model.defer="address">
    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" wire:model.defer="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" wire:model.defer="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Slogan</label>
    <input type="text" class="form-control" wire:model.defer="slogan">
    @error('slogan') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Logo</label>
      <img src="{{ asset('storage/' . $company->logo_path) }}" widht="50" height="50">
      <input type="file" wire:model="logo">
      @error('logo') <span class="error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Comment</label>
    <input type="text" class="form-control" wire:model.defer="comment">
    @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
