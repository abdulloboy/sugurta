<div class="table-responsive">
    <table class="table" id="risks-table">
        <thead>
        <tr>
            <th>Nom</th>
        <th>Klass</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($risks as $risk)
            <tr>
                <td>{{ $risk->nom }}</td>
            <td>{{ $risk->klass }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['risks.destroy', $risk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('risks.show', [$risk->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('risks.edit', [$risk->id]) }}"
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
