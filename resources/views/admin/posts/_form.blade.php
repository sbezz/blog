
<!-- Title Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:')  !!}
    {!! Form::text('title', null, ['class'=>'form-control'])  !!}
</div>

<!-- Content Form Input -->

<div class="form-group">
    {!! Form::label('content', 'Conte�do:')  !!}
    {!! Form::textarea('content', null, ['class'=>'form-control'])  !!}
</div>