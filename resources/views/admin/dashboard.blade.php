<x-app-layout>
<x-slot name="slot">
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center list-group-item mt-4 text-white bg-info">
                Published Posts
            </div>
            <div class="panel-body list-group-item text-center text-info">
                <h1>{{ $post_count }}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center list-group-item mt-4 text-white bg-danger">
                Trashed Posts
            </div>
            <div class="panel-body list-group-item text-center text-danger">
                <h1>{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center list-group-item mt-4 text-white bg-success">
                Users
            </div>
            <div class="panel-body list-group-item text-center text-success">
                <h1>{{ $users_count }}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center list-group-item mt-4 text-white bg-info">
                Category
            </div>
            <div class="panel-body list-group-item text-center text-info">
                <h1>{{ $category_count }}</h1>
            </div>
        </div>
    </div>
    
</div>
</x-slot>
<x-slot name="styles">
</x-slot>

<x-slot name="scripts">
</x-slot>
</x-app-layout>
