<x-app-layout>
    <!-- <x-slot name="header">
    Blank for not used
    </x-slot> -->
    <x-slot name="slot">
        <!-- @if(count($errors) > 0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        @endif -->
        @include('admin.includes.errors')


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Published Posts
        </div>

        <div class="panel-body list-group-item">
           <table class="table table-hover">
           <thead>
               <th>Image</th>
               <th>Title</th>
               <th>Edit</th>
               <th>Recycle Bin</th>
           </thead>
           <tbody>
           @if($posts->count() > 0)
               @foreach($posts as $post)
               <tr>
                   <td>
                      <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                   </td>
                   <td>
                       {{ $post->title }}
                   </td>
                   <td>
                       <a href="{{ route('post.edit', [ 'id' => $post->id ]) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                   </td>
                   <td>
                       <a href="{{ route('post.delete', [ 'id' => $post->id ]) }}" class="btn btn-warning"><i class="fa-solid fa-trash-can"></i></a>
                   </td>
               </tr>
               @endforeach
               @else
                    <tr>
                        <th colspan="5" class="text-center">No published posts.</th>
                    </tr>
                @endif
           </tbody>
           </table>
        </div>
    </div>
    </x-slot>
    <x-slot name="styles">
    </x-slot>

    <x-slot name="scripts">
    </x-slot>
</x-app-layout>
