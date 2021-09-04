@extends('templates.layout')

@section('title')
    {{ $comics[$arrayIndex]['title'] }}
@endsection

@section('content')
    <div class="jumbo-comic"></div>

    <div class="blue-bar">
        <div class="container">
            <img src="{{$comics[$arrayIndex]['thumb']}}" alt="">
        </div>
    </div>

    <div class="container comic-details">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ $comics[$arrayIndex]['title'] }}</h1>
                        
                        <div class="green-bar d-flex justify-content-between">
                            <div class="green-bar-price">U.S.Price: {{ $comics[$arrayIndex]['price'] }}</div>

                            <div class="green-bar-av d-flex justify-content-around align-items-center">
                                <div>Check Availability</div>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </div>
                
                        <p>{{ $comics[$arrayIndex]['description'] }}</p>
                    </div>
            
                    <div class="col-12 d-flex">
                        <div class="talents">
                            <h4>Talent</h4>
                            
                            <div class="d-flex">
                                <h5 class="section-title">Art By: </h5>
                                
                                <div class="section-description">
                                    @foreach($comics[$arrayIndex]['artists'] as $artist )
                                    <a href="">{{ $artist }}</a>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <h5 class="section-title">Written By: </h5>
                                
                                <div class="section-description">
                                    @foreach($comics[$arrayIndex]['writers'] as $writer )
                                    <a href="">{{ $writer }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <div class="specs">
                            <h4>Specs</h4>
                            
                            <div class="d-flex">
                                <h5 class="section-title">Series: </h5>
                                
                                <div class="section-description"><a href="">{{ strtoupper($comics[$arrayIndex]['series']) }}</a></div>
                            </div>
                            
                            <div class="d-flex">
                                <h5 class="section-title">U.S.Price: </h5>
                                
                                <div class="section-description">{{ $comics[$arrayIndex]['price'] }}</div>
                            </div>
                            
                            <div class="d-flex">
                                <h5 class="section-title">On Sale Date: </h5>
                                    
                                <div class="section-description"> {{ $comics[$arrayIndex]['sale_date'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 d-flex align-items-center">
                <img src="/img/adv.jpg" alt="adv">
            </div>
        </div>
    </div>
@endsection