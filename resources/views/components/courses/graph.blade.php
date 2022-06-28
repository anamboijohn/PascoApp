<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <center>     <h6>Your progress Chart</h6>   </center>
    <div style="margin-top: 20vh">
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </div>
</main>

<script>
    @php
        $records = Auth::user()->records;
        $c_results = 0;
        $record_count = 0;
        $results = 0;
        if (!empty($records->all())) {
            foreach ($records as $record) {
                $c_results += $record->score_converted;
                $record_count++;
            }
            $results = ($c_results / $record_count) * 100;
        }
    @endphp
    let results = {{ $results }};
    let record_count = {{ $record_count }};
</script>
