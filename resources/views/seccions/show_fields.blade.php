<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $seccion->id !!}</p>
</div>

<!-- Seccion Field -->
<div class="form-group">
    {!! Form::label('seccion', 'Seccion:') !!}
    <p>{!! $seccion->seccion !!}</p>
</div>

<!-- Grado Id Field -->
<div class="form-group">
    {!! Form::label('grado_id', 'Grado Id:') !!}
    <p>{!! $seccion->grado_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $seccion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $seccion->updated_at !!}</p>
</div>

