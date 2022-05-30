<x-app-layout>

    <x-slot name="slot">
        
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Create a new tag
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('tag.store') }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Store Tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
</x-app-layout>
