<div class="row">
    <div class="col-md-6 col-lg-6">
        <ul class="list-group">
            @foreach($errors->all() as $error=>$message)
                <li class="list-group-item list-group-item-danger">
                    {{ $message }} 
                </li>
            @endforeach
        </ul>
    </div>

</div>