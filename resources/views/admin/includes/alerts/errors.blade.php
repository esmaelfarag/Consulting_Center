@if(Session::has('error'))
    <div class="row mr-2 ml-2 " >
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>

    </div>
@endif
