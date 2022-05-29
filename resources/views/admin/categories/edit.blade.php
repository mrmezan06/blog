<x-app-layout>
    <!-- <x-slot name="header">
    Blank for not used
    </x-slot> -->
    <x-slot name="slot">
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Update category: {{ $category->name }}
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('category.update', [ 'id' => $category->id ]) }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Update Category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
</x-app-layout>
