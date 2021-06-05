<div class="row" style="display: inline-block;">
    <div class=" d-flex flex-row bd-highlight mb-3 tile_count">
        <div class="p-2 bd-highlight tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Admin / Staffs</span>
            <div class="count">{{ $totaladmins }} / {{ $totalstaffs }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From all time</span>
        </div>
        <div class="p-2 bd-highlight  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count">{{ $totalusers }}</div>
            <span class="count_bottom"><i class="green">4% </i> From all time</span>
        </div>
        <div class="p-2 bd-highlight  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Lands / Bought</span>
            <div class="count green">{{ $total_lands }} / {{ $total_lands_bought }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="p-2 bd-highlight  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Houses / Bought</span>
            <div class="count">{{ $total_houses }} / {{ $total_houses_bought }}</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
        <div class="p-2 bd-highlight  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Instalment</span>
            <div class="count">{{ $total_instalment }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Currently</span>
        </div>
        <div class="p-2 bd-highlight  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Revenue</span>
            <div class="count">
                <font size="5">{{ number_format($totalrevenue, 2, '.', ',') }}</font>
            </div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
    </div>
</div>
