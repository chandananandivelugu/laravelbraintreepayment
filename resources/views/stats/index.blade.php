@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Advanced Stream Stats</b></div>
    
                <div class="card-body">
                <p>Live content accounts for almost a quarter of global viewing time
                23% of global viewing time is spent watching live content;<br/> the other 77% goes to on-demand content.<br/>
                While this shows live video isn’t yet as popular as on-demand video (and probably never will be), 
                it’s still pretty impressive and shows just how far the live streaming industry has come.<br/></p>
                <b><p style="color:red;">To view advanced content, you need to subscribe.After subscription you can see the below Content</b>
                        @foreach($plans as $plan)                        
                            <div class="pull-left">                                
                                @if(auth()->user()->subscribedToPlan($plan->braintree_plan, 'main'))
                                    <b><p style="color:green;">Hello Subscriber,Thank you for subscribing.Content coming soon :) </p></b>
                                @endif
                            </div>                        
                        @endforeach                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
