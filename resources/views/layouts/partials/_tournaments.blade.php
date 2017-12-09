@extends('layouts.layout')

@section('content')
<section id="othersservice" class="othersservice">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_othersservice_area sections">
                    <div class="row">
                        <div class="head_title">
                            <h3>COMPETITIONS</h3>
                            <div class="separator"></div>
                        </div>
                        @if(isset($tournaments))
                        <div class="main_othersservice_content">
                            @foreach($tournaments as $comp)
                            <div class="col-sm-6">
                                <a href="tournament/details/{{ $comp->id }}">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4><span><i class="fa fa-flag"></i></span> {{$comp->name}}</h4>
                                        </div>
                                        <div class="single_othersservice_content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div><!--main_othersservice_content-->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection      