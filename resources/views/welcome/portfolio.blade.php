@extends('layouts.app')

@section('content')

<section id="success" class="section">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
                        <div class="section-title">
                                <h3>Success Stories</h3>
                                
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, quod praesentium ab natus dicta non enim tenetur, debitis cum quo velit ratione expedita quas unde provident quisquam illum reiciendis animi!</p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/clerk.jpg') }}" class="success" alt="">
                </div>
                <div class="offset-lg-3 col-lg-6 col-sm-12">
                    <h5>Local County Government Systems</h5>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nostrum ut dolorem? Quaerat, ea facere.
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>County Clerk</h5>
                    <h6>Interim Department Management</h6>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nostrum ut dolorem? Quaerat, ea facere.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>District Clerk</h5>
                    <h6>Departmental Efficiency Analysis</h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, maxime. Corrupti odit nihil nobis enim aliquid nisi explicabo consequuntur iure itaque, numquam odio totam officiis.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Indigent Defense</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sint in ea magni sunt est iste, tempora totam consequuntur omnis ullam dolores tempore molestias error at praesentium placeat corrupti aut.
                </div>                
            </div>
            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h5>Healthcare Services Company</h5>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore obcaecati, excepturi doloremque saepe fuga quis at ratione. Fugiat dignissimos nostrum aliquid consectetur autem deleniti vel, laudantium quia quibusdam in possimus voluptatibus, adipisci inventore laboriosam tenetur deserunt dolore mollitia saepe reiciendis?
                </div>
                <div class="offset-lg-1 col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/healthcare.jpg') }}" class="success" alt="">
                </div>                
            </div>     
            <div class="row my-5">
                <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/refinery.jpg') }}" class="success" alt="">
                </div>
                <div class="offset-lg-3 col-lg-6 col-sm-12">
                    <h5>Oil Refining Company</h5>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nostrum ut dolorem? Quaerat, ea facere.
                </div>
            </div>       
        </div>
</section>
    
@endsection