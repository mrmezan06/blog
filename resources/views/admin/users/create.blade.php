<x-app-layout>

    <x-slot name="slot">
        
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Create a new user
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('user.store') }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Add user
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
</x-app-layout>
