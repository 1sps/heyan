<div class="p-2">

  <h3>
    Create New Product
  </h3>

  <div class="form-group">
    <label for="">Product Name</label>
    <input type="email" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea rows="5" class="form-control" wire:model.defer="description">
    </textarea>
    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Image</label>
      <input type="file" wire:model="image">
      @error('image') <span class="error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Comment</label>
    <input type="text" class="form-control" wire:model.defer="comment">
    @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
