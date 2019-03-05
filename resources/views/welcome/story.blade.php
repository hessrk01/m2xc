@extends('layouts.welcome')

@section('content')

<section id="story" class="section">
        <div class="container">
            <div class="row center-children">
                    <div class="col">
                        <img src="{{ asset('img/roadtrip.jpg')}}" class="story" alt="">
                    </div>
            </div>
            
                <div class="col">
                        <h1 class="pt-5" style="font-family: 'Clicker Script', cursive; font-size: 48px;">No.</h1>
                        
                        <p class="h5">Managing to Excellence (M2xc) is not just a consulting company. </p>
               
                        <p class="pt-3 h3  text-right text-muted">We are a thought leadership,<br> business enhancing,<br> process re-engineering company.</p><br>
                        
                       <p class="blockquote">We are ethical. We are customer first.</p>
                       <p class="blockquote">We bring unique ideas and thoughts to the table that are grounded in expertise. </p>
                       
                       <p class="blockquote">We are practical with the use of technology and pragmatic when it comes to what can and cannot<br> be achieved within our customer’s business.</p>
                        
                        
                        <p class="lead">M2xc was created to extend a customer’s team as it relates to large process, organizational and technology projects. We supplement and blend into your team with skilled resources; provide experience as you need during a project and when the resource requirements are just too great for the regular FTE count. 
                        
                        We are not staff augmentation. 
                        
                        We bring methodologies, leadership, direction and guidance with the backing of our entire team.
                        
                        We <span class="h4">guide,</span> <span class="h3">manage,</span> <span class="h2">assess,</span> <span class="h3">document,</span> <span class="h2">select,</span> <span class="h4">implement,</span> and <span class="h3">cement</span> new processes and technologies into your business.
                        
                        We are not tied nor compensated by our business relationships. We partner with technology firms, become knowledgeable in their tools, capabilities and their differences so we can advise from a position of knowledge rather than speculation. We extend existing products with solutions that optimize our customer’s business. M2xc helps migrate to new technologies, new cloud offerings, and new ways to deliver business software securely, efficiently, and cost effectively.
                        </p>
                </div>
        </div>
</section>
    
@endsection