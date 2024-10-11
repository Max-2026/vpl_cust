@extends('master-layout')
@section('title', 'User Profile')
@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">
      User Profile
    </h3>
  </div>
  <div class="mt-4 flex flex-col">
    <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data" id="profile-form">
      @csrf
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="flex items-center">
          @if($user->avatar)
          <img src="{{ asset($user->avatar) }}" alt="User Avatar" class="h-16 w-16 rounded-full object-cover">
          @else
          <img src="{{ asset('images/user.png') }}" alt="Default Avatar" class="h-16 w-16 rounded-full object-cover">
          @endif
          <input type="file" name="avatar" class="ml-4 text-sm text-gray-500 hidden" id="avatar-input">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="name" value="{{ $user->name }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" value="{{ $user->email }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Phone</label>
          <input type="text" name="phone" value="{{ $user->phone_number ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Address</label>
          <input type="text" name="address" value="{{ $user->address->address ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">City</label>
          <input type="text" name="city" value="{{ $user->address->city ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Country</label>
          <input type="text" name="country" value="{{ $user->address->country ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">State</label>
          <input type="text" name="state" value="{{ $user->address->state ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Postal Code</label>
          <input type="text" name="postal_code" value="{{ $user->address->postal_code ?? '' }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled required>
        </div>
      </div>
      <div class="mt-6 flex justify-between">
        <button type="button" id="edit-profile-btn" class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">
          Edit Profile
        </button>
        <button type="submit" id="save-profile-btn" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 hidden">
          Save Changes
        </button>
        &nbsp;
        <button type="button" id="logout-btn" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-auto">
          <a href="{{ url('/logout') }}">Logout</a>
        </button>
      </div>
    </form>
  </div>
</div>
<script>
document.getElementById('edit-profile-btn').addEventListener(
  'click',
  function() {
    const inputs = document.querySelectorAll('#profile-form input');
    inputs.forEach(input => input.removeAttribute('disabled'));

    document.getElementById('avatar-input').classList.remove('hidden');

    this.classList.add('hidden');
    document.getElementById('save-profile-btn').classList.remove('hidden');
  }
);

</script>
@endsection
