@extends('layouts.app')
@section('content')
<script type="application/javascript">
$(document).ready(function () {
    $("#search").keyup(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.post("/search", { search: $('#search').val(), _token: CSRF_TOKEN }, function(data) {
            $('.species').html('');
            $.each(data, function(i, species) {
                var c = '<div class="card">\n\
                            <div class="card-body">\n\
                                <h4 class="card-title"></h4>
                                <h4><a href="/{}/'+species.id+'">'+species.make+' '+spec.model+'</a></h4>\n\
                            <div>'+spec.year+'</div>\n\
                        </div>';
                $('.species').append(c);
            });
        });
    })
});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 mb-4 species">
            
        </div>
    </div>
</div>
@endsection
