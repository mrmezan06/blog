<x-app-layout>

    <x-slot name="slot">
        
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Edit Blog Settings
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('settings.update') }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Site Name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control" id="">
                </div>

                <div class="form-group mt-2">
                    <label for="name">Address</label>
                    <input type="text" name="address" value="{{ $settings->address }}" class="form-control" id="">
                </div>

                <div class="form-group mt-2">
                    <label for="name">Contact Number</label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control" id="">
                </div>

                <div class="form-group mt-2">
                    <label for="name">Contact Email</label>
                    <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control" id="">
                </div>
                
                <div class="form-group mt-2">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Update Site Settings
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
    <x-slot name="styles">
    </x-slot>

    <x-slot name="scripts">
    </x-slot>
</x-app-layout>
