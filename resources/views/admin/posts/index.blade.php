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
            Post Table
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
           </tbody>
           </table>
        </div>
    </div>
    </x-slot>
</x-app-layout>
