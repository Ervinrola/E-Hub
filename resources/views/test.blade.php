@extends('layout.master')
@section('content')

<div class="container mt-3 pd-3">
    <h2> Ajax Live Search Page </h2>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div
                            class="d-flex align-items-center rounded-pill bg-light px-3 py-2 shadow p-3 mb-5 bg-body rounded">
        <input class="form-control border-0 bg-transparent rounded-pill me-2" type="search" name="search"
                                placeholder="Search" aria-label="Search" list="datalistOptions" id="search">
            
</div>
<div class="col-md-8">
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var value = $(this).val();
            console.log(value);
            $.ajax({
                    url:"search",
                    type:"GET",
                    data: "data",
                    dataType:"dataType",
                    success: "dataType", 
                    success: function(data) {
                    }
                });
            });
        });
</script>
@endsection