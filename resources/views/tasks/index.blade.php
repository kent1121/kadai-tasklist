<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>user_id</th>
                <th>id</th>
                <th>ステータス</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->user_id }}</td>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links('pagination::bootstrap-4') }}
    {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary mb-5']) !!}
</div>