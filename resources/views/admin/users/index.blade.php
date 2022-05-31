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
            Users
        </div>

        <div class="panel-body list-group-item">
           <table class="table table-hover">
           <thead>
               <th>Image</th>
               <th>Name</th>
               <th>Permissions</th>
               <th>Delete</th>
           </thead>
           <tbody>
           @if($users->count() > 0)
               @foreach($users as $user)
               <tr>
                   <td>
                      <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->profile->user_id }}" class="rounded-circle" width="50" height="10px">
                   </td>
                   <td>
                       {{ $user->name }}
                   </td>
                   <td>
                       @if($user->admin)
                       <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-danger">Remove Privilege</a>
                       @else
                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-success">Make admin</a>
                       @endif
                   </td>
                   <td>
                        @if(Auth::id() !== $user->id)
                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                        @endif
                   </td>
               </tr>
               @endforeach
               @else
                    <tr>
                        <th colspan="5" class="text-center">No users.</th>
                    </tr>
                @endif
           </tbody>
           </table>
        </div>
    </div>
    </x-slot>
</x-app-layout>
