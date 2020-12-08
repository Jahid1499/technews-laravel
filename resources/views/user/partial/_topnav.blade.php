@php
    date_default_timezone_set("Asia/Dhaka");
        use Carbon\Carbon;
        $t = Carbon::now();
@endphp
<div class="top_header my-auto">
    <div class="container">
        <div class="row pt-1 date-time">
            <div class="col-6">
                <div><i class="far fa-calendar-check"></i> {{$t->format('l jS F Y')}}</div>
            </div>
            <div class="col-6 text-right">
                <div><i class="far fa-clock"></i> {{$t->format('h:i:s A')}}</div>
            </div>
        </div>
    </div>
</div>
