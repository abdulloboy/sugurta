<div class="table-responsive">
    <table class="table" id="oqibats-table">
        <thead>
        <tr>
            <th>Nom</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($oqibats as $oqibat)
            <tr>
                <td>{{ $oqibat->nom }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['oqibats.destroy', $oqibat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('oqibats.show', [$oqibat->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('oqibats.edit', [$oqibat->id]) }}"
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
