@extends('layouts.app')

@section('content')
            <div class="container content-margin">
    <div class="row" style="margin-left:35%">
        <div class=" col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                                    <img class="img-circle img-responsive" src="http://api.adorable.io/avatars/300/abott@adorable.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="centered-text col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                                    <div itemscope="" itemtype="http://schema.org/Person">
                                        <h2> <span itemprop="name">Your Name</span></h2>
                                        <p itemprop="jobTitle">Your Position</p>
                                        <p><span itemprop="affiliation">Your Company</span></p>
                                        <p>
                                            <i class="fa fa-map-marker"></i> <span itemprop="addressRegion">Your City, Your State</span>
                                        </p>
                                        <p itemprop="email"> <i class="fa fa-envelope"> </i> <a href="mailto:you@somedomain.com">you@somedomain.com</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 centered-text">
                            Your Short Bio goes here.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
