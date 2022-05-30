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
            Category Table
        </div>

        <div class="panel-body list-group-item">
           <table class="table table-hover">
           <thead>
               <th>Category name</th>
               <th>Editing</th>
               <th>Deleting</th>
           </thead>
           <tbody>
               @foreach($categories as $category)
               <tr>
                   <td>
                       {{ $category->name }}
                   </td>
                   <td>
                       <a href="{{ route('category.edit', [ 'id' => $category->id ]) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                   </td>
                   <td>
                       <a href="{{ route('category.delete', [ 'id' => $category->id ]) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                   </td>
               </tr>
               @endforeach
           </tbody>
           </table>
        </div>
    </div>
    </x-slot>
</x-app-layout>
