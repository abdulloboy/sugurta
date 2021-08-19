<!-- Obyekt Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obyekt_id', 'Obyekt:') !!}
    {!! Form::select('obyekt_id', 
        $obyekts->pluck('nom','id'), 
        isset($mahsulot) ? $mahsulot->obyekt_id : null, 
        ['class' => 'form-control custom-select']) 
    !!}
</div>


<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nom', 'Nom:') !!}
    {!! Form::text('Nom', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Yaratilgan Sana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yaratilgan_sana', 'Yaratilgan Sana:') !!}
    {!! Form::text('yaratilgan_sana', null, ['class' => 'form-control','id'=>'yaratilgan_sana']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#yaratilgan_sana').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Risk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('risks', 'Risks:') !!}
    {!! Form::select('risks[]',
        $risks->pluck('nom','id'),
        isset($mahsulot) ? $mahsulot->risks->pluck('id') : null, 
        ['class' => 'form-control custom-select',
        'multiple']) 
    !!}
</div>


<!-- Oqibat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oqibats', 'Oqibats:') !!}
    {!! Form::select('oqibats[]', 
        $oqibats->pluck('nom','id'), 
        isset($mahsulot) ? $mahsulot->oqibats->pluck('id') : null, 
        ['class' => 'form-control custom-select',
        'multiple']) 
    !!}
</div>
