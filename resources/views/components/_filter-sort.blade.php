<div class="header-filter d-flex align-items-center justify-content-between p-3 bg-dark text-white">
    <select class="form-select me-2" id="sort-student-name" style="max-width: 25vw ">
        @if($students->isEmpty())
            <option value="" selected disabled>Sort by Student Name</option>
        @else
            <option value="" selected>Sort by Student Name</option>
            <option value="asc" {{request('sort') == 'asc' ? 'selected' : ''}}>A-Z</option>
            <option value="desc" {{request('sort') == 'desc' ? 'selected' : ''}}>Z-A</option>
        @endif
    </select>

    <select class="form-select me-2" id="filter-college-id" style="max-width: 20vw; ">
        @if($colleges == null)
            <option value="" selected disabled>Filter by College</option>
        @else
            @foreach($colleges as $id => $college)
                <option {{$id==request('college_id') ? 'selected' : ''}} value="{{$id}}">{{$college}}</option>
            @endforeach
        @endif
    </select>

</div>
<style>
    .header-filter {
        width: 100%;
        border-radius: 15px;
    }
</style>
