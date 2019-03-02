
{{-- showcase --}}

<section id="showcase" class="showcase">
    <div class="container">
        <div class="row ">
            <div id="particles-js">
            
                <div class="col">
                    <img class="d-none d-md-block" src="{{ asset('img/mshadow_a.png') }}" id="shadow">
                    <h1 class="d-block d-md-none text-dark" id="showcaseStart">More <br> than</h1>
                    <h1 class="d-none d-md-block text-white" id="showcaseStart">More <br> than</h1>
                    <h1 id="showcaseSkill">{!! getShowcaseSkill() !!}</h1>
                    
                    <div class="d-none d-md-block">
                        <p><span  id="showcaseGoalStart">We </span><span id="showcaseGoal" class="element"></span></p>
                            <div id="goals">
                                <p><Strong>identify challenges.</strong></p>
                                <p><Strong>anticipate needs.</strong></p>
                                <p><Strong>create solutions.</strong></p>
                                <p><Strong>build teams.</strong></p>
                                <p><Strong>see the unseen.</strong></p>
                                <p><Strong>embrace the situation.</strong></p>
                                <p><Strong>drive success.</strong></p>
                                <p><Strong>share knowledge.</strong></p>
                            </div>
                
                        <a href="#services" id="showcaseButton" class="btn btn-primary">Learn More</a>   
                    </div>
                </div>
                <div class="col">
                    <div class="hivecar d-none d-xl-block" id="hivenote">
                        @foreach($posts as $post)
                        <div class="card bg-primary text-white border border-primary rounded">
                            <div class="card-header"><h4>New at the <a href="{{ route('hive.index') }}" class="text-white"><i><strong>Hive</strong></i></h4></a></div>
                            <div class="card-body">
                                <a href="hive/{{$post->slug }}" class="text-white"><h5 class="card-title">{{$post->title}}</h5></a>
                                <p class="card-text">{!! str_limit(strip_tags($post->body), 150) !!}</p>
                                
                            </div>
                            
                        </div>
                        @endforeach
                        {{-- <div class="card bg-primary text-white border border-primary rounded">
                            <div class="card-info-box clearfix">
                                <h3 class="card-title">Post 1</h3>
                                <p class="card-text">Something special</p>
                            </div>
                        </div>
                        <div class="card bg-primary text-white border border-primary rounded">
                                <div class="card-info-box clearfix">
                                    <h3 class="card-title">Post 2</h3>
                                    <p class="card-text">Something special</p>
                                </div>
                        </div>
                        <div class="card bg-primary text-white border border-primary rounded">
                            <div class="card-info-box clearfix">
                                <h3 class="card-title">Post 3</h3>
                                <p class="card-text">Something special</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

@push('script')

    <script>
        $(document).ready(function() {
            $('.hivecar').slick({
                setting-name: setting-value
            });
        });
    </script>
    

@endpush