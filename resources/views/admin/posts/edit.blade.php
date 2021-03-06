<x-app-layout>
    <!-- <x-slot name="header">
    Blank for not used
    </x-slot> -->
    <x-slot name="slot">
        @if(count($errors) > 0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        @endif


    <div class="panel panel-default mt-4">
        <div class="panel-heading list-group-item">
            Edit post: {{ $post->title }}
        </div>

        <div class="panel-body list-group-item">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($post->category->id == $category->id)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox text-muted m-1">
                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            @foreach($post->tags as $t)
                                    @if($tag->id == $t->id)
                                        checked
                                    @endif
                            @endforeach
                            >{{ $tag->tag }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success py-2 mt-2" type="submit">
                            Update Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
    <x-slot name="styles">
<!-- include summernote css/js -->
        
    </x-slot>

    <x-slot name="scripts">
    
    <script>
    $(document).ready(function() {
        $('#content').summernote(
            {height: 100,} 
        );
    });
  </script>
    </x-slot>
</x-app-layout>
