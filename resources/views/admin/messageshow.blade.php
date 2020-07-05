@if(Session('save'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('save')}}</strong>
    </div>
@endif
