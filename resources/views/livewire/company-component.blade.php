<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Company
    </h3>
    @if ($company === null)
      <div class="card-tools mx-3">
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    @else
      <div class="card-tools mx-3">
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterUpdateMode">
          <i class="fas fa-pencil-alt"></i>
        </button>
      </div>
    @endif
  </div>

  <div class="card-body p-0">
    @if (! $updateMode && !$createMode)
      @if ($company !== null)
      <table class="table table-hover">
        <tr>
          <th>Company Name</th>
          <td>{{ $company->name }}</td>
        </tr>
        <tr>
          <th>Address</th>
          <td>{{ $company->address }}</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>{{ $company->phone }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $company->email }}</td>
        </tr>
        <tr>
          <th>Slogan</th>
          <td>{{ $company->slogan }}</td>
        </tr>
        <tr>
          <th>Logo</th>
          <td>
            <img src="{{ asset('storage/' . $company->logo_path) }}" widht="50" height="50">
          </td>
        </tr>
      </table>
      @else
        <p class="text-muted p-2">
          No company data. Please add one.
        </p>
      @endif
    @endif

    @if ($updateMode)
      @livewire ('company-update', ['company' => $company])
    @endif

    @if ($createMode)
      @livewire ('company-create')
    @endif
  </div>
</div>
