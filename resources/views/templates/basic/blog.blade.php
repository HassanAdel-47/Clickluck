@extends($activeTemplate . 'layouts.frontend')
@section('content')
<!-- blog section start -->
<section class="pt-100 pb-50">
    <div class="machine" style="background-image:  url('{{ asset($activeTemplateTrue . 'images/Machine.jpg')}}') ">
        <div class="red">
            <div class="machine__counter">
                <div id="odometer" class="odometer ">
                    0
                </div>
                <div id="odometerTwo" class="odometer ">
                    0
                </div>
                <div id="odometerThree" class="odometer ">
                    0
                </div>
                <div id="odometerFour" class="odometer ">
                    0
                </div>
                <div id="odometerFive" class="odometer ">
                    0
                </div>
                <div id="odometerSix" class="odometer ">
                    0
                </div>
                <div id="odometerSeven" class="odometer ">
                    0
                </div>
                <div id="odometerEight" class="odometer ">
                    0
                </div>
            </div>
            <div class="machineInfo">
                <p>
                    1st Place Winning Ticket:&nbsp; <span> - - - - - -</span>&nbsp;
                    2nd Place Winning Ticket: <span>14m:60s</span> 3rd Place Winning Ticket: <span>29m:60s</span>
                </p>
            </div>
        </div>

    </div>

</section>
@if ($sections->secs != null)
@foreach (json_decode($sections->secs) as $sec)
@include($activeTemplate . 'sections.' . $sec)
@endforeach
@endif
<!-- blog section end -->
@endsection