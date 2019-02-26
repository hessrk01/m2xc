@extends('layouts.app')

@section('content')
    <div class="section container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Upload a pic</h1>
                <hr/>

                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="picture" style="margin: 20px 0;"/>
                    <input type="submit" class="btn btn-primary" value="upload"/>
                </form>
            </div>
        </div>
    </div>


@endsection