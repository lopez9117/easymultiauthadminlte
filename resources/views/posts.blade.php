<table>
    <thead>
        <th>#ID</th>
        <th>#UserID</th>
        <th>#Titel</th>
    </thead>
    <tbody>
     @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->userId }}</td>
            <td>{{ $post->title }}</td>
        </tr>
     @endforeach
    </tbody>
</table>