<div class="table-responsive">
    <table class="table" id="mahsulots-table">
        <thead>
        <tr>
            <th>Obyekt</th>
        <th>Nom</th>
        <th>Yaratilgan Sana</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahsulots as $mahsulot)
            <tr>
                <td>{{ $mahsulot->obyekt->nom }}</td>
            <td>{{ $mahsulot->Nom }}</td>
            <td>{{ $mahsulot->yaratilgan_sana }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mahsulots.destroy', $mahsulot->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mahsulots.show', [$mahsulot->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mahsulots.edit', [$mahsulot->id]) }}"
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
