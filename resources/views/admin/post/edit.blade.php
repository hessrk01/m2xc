
@extends('layouts.app')

@section('content')

    <div class="section container">
        <div class="row justify-content-center">
            <div class="col-12  shadow-lg p-5 m-5 bg-white rounded">
                <h2 class="p-2">Edit Post</h2>
                
                <form method="POST" action="{{ route('post.update', $post) }}">
                    @method('PUT')
                    @include ("admin.post._form", ['buttonText' => "Update Post"])
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