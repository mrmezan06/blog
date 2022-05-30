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
            Tags
        </div>

        <div class="panel-body list-group-item">
           <table class="table table-hover">
           <thead>
               <th>Tag name</th>
               <th>Editing</th>
               <th>Deleting</th>
           </thead>
           <tbody>
           @if($tags->count() > 0)
               @foreach($tags as $tag)
               <tr>
                   <td>
                       {{ $tag->tag }}
                   </td>
                   <td>
                       <a href="{{ route('tag.edit', [ 'id' => $tag->id ]) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                   </td>
                   <td>
                       <a href="{{ route('tag.delete', [ 'id' => $tag->id ]) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                   </td>
               </tr>
               @endforeach
               @else
                    <tr>
                        <th colspan="5" class="text-center">No tags yet.</th>
                    </tr>
                @endif
           </tbody>
           </table>
        </div>
    </div>
    </x-slot>
</x-app-layout>
