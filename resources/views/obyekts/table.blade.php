<div class="table-responsive">
    <table class="table" id="obyekts-table">
        <thead>
        <tr>
            <th>Nom</th>
        <th>Klass</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($obyekts as $obyekt)
            <tr>
                <td>{{ $obyekt->nom }}</td>
            <td>{{ $obyekt->klass }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['obyekts.destroy', $obyekt->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('obyekts.show', [$obyekt->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('obyekts.edit', [$obyekt->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
