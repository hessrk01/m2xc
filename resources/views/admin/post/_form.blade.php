
    @csrf
    
    <div class="form-group">
        <label for="text">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title)}}">
    </div>

    <div class="form-group">
        <label for="text">Author(s)</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $post->author)}}">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control z-depth-1" id="summernote" name="body">{{ old('body', $post->body)}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">{{$buttonText}}</button>