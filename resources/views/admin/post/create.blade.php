@extends('layouts.app')

@section('content')

    <div class="section container">
        <div class="row justify-content-center">
            <div class="col-12  shadow-lg p-5 m-5 bg-white rounded">
                <h2 class="p-2">Create a Post</h2>
                
                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    
                        <div class="form-group">
                          <label for="text">Title</label>
                          <input type="text" class="form-control" id="title" name="title">
                        </div>
                
                        <div class="form-group">
                            <label for="text">Author(s)</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>

                        <div class="form-group">
                          <label for="body">Body</label>
                          <textarea class="form-control z-depth-1" id="summernote" name="body"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>            
    </div>
@endsection

@push('script')
    <script>
$(document).ready(function() {

$('#summernote').summernote({
    placeholder: 'Write something wonderful',
        tabsize: 2,
        height: 200,
        
    
});

});
</script>
@endpush