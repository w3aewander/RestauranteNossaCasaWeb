<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger">
                <div class="panel-title alert alert-danger">
                    {{$title}}
                </div>  
                <div class="panel-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>   
</div>