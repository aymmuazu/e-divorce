<form wire:submit.prevent="add">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Spouse Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus wire:model="name">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Spouse E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" wire:model="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>  
    
    <div class="form-group row">
        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Spouse Gender') }}</label>

        <div class="col-md-6">
            <input type="radio" name="gender" class="@error('gender') is-invalid @enderror" value="Female" wire:model="gender"> Female
            <input type="radio" name="gender" class="@error('gender') is-invalid @enderror" value="Male" wire:model="gender"> Male
            <input type="radio" name="gender" class="@error('gender') is-invalid @enderror" value="Others" wire:model="gender"> Others

            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>  

    <div class="form-group row">
        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Spouse Mobile Number') }}</label>

        <div class="col-md-6">
            <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  autocomplete="mobile" wire:model="mobile">

            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="parent_house" class="col-md-4 col-form-label text-md-right">{{ __('Spouse Parent Address') }}</label>
        <div class="col-md-6">
            <textarea class="form-control @error('parent_house') is-invalid @enderror" name="parent_house" autocomplete="parent_house" wire:model="parent_house"></textarea>
            @error('parent_house')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="parent" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
        <div class="col-md-6">
            <button class="btn btn-primary float-center">Add Spouse</button>
        </div>
    </div>
</form>