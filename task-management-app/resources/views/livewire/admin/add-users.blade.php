<!-- livewire/register-user.blade.php -->

<div wire:key = "uniqueKey">
  <div class=" container pb-3">
    <div class="row justify-content-center">
        <h1 class="p-4">Register Users</h1>
    </div>
  
    <div class="section-1">
        <form wire:submit.prevent="addUser" method="POST" wire:ignore.self>
            @csrf
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input wire:model="nameInput" type="text" class="form-control" id="nameInput" name="nameInput" aria-describedby="nameInput" placeholder="John Doe">
                @error('nameInput') <span class="error">{{ $message }}</span> @enderror
            </div>
  
            <div class="form-group">
                <label for="emailInput">Email</label>
                <input wire:model="emailInput" type="text" class="form-control" id="emailInput" name="emailInput" aria-describedby="emailInput" placeholder="John@gmail.com">
                @error('emailInput') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
              <label for="userType">User Type</label>
              <select wire:model="user_type" class="form-control" id="user_type" name="use_type">
                  <option value="">Select User Type</option>
                  <option value='1'>Admin</option>
                  <option value="0">User</option>
              </select>
              @error('user_type') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
  
            <div class="form-group">
                <label for="passwordInput">Password</label>
                <input wire:model="passwordInput" type="password" class="form-control" id="passwordInput" name="passwordInput" aria-describedby="passwordInput" placeholder="Add Password">
                @error('passwordInput') <span class="error">{{ $message }}</span> @enderror
            </div>
  
            <div class="form-group">
                <label for="passwordConfirmInput">Confirm Password</label>
                <input wire:model="passwordConfirmInput" type="password" class="form-control" id="passwordConfirmInput" name="passwordConfirmInput" aria-describedby="passwordConfirmInput" placeholder="Confirm Password">
                @error('passwordConfirmInput') <span class="error">{{ $message }}</span> @enderror
            </div>
  
            <button type="submit" class="btn btn-success">Register User</button>
        </form>
    </div>
  </div>
  
</div>