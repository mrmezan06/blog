<x-app-layout>

    <x-slot name="slot">
        
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Edit your profile
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" name="password" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">Upload Avatar</label>
                    <input type="file" name="avatar" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">Facebook Profile</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">Youtube Profile</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">About You</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Update Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
</x-app-layout>
