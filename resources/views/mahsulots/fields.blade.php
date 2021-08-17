<!-- Obyekt Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obyekt_id', 'Obyekt:') !!}
    {!! Form::select('obyekt_id', 
        $obyekts->sortBy('nom')->pluck('nom','id'),
        null, 
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