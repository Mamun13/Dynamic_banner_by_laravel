@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alart alart-danger alart-dismissible">
            <strong>Error! </strong>{{$error}}
            <button type="button" class="close" data-dismiss="alart">&times;</button>
        </div>
    @endforeach
@endif