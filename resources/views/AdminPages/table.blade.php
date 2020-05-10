<table class="table table-striped">
    <thead>
    <tr>
        @foreach($fields as $field)
        <th scope="col">{{$field}}</th>
        @endforeach
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($values as $value)
            <tr>
            @foreach($fields as $field)
                <td>{{$value[$field]}}</td>
            @endforeach
                <td style="padding-top: 5px; padding-bottom: 5px"><a href="update/{{$value['id']}}"><button class="btn btn-success">Update</button></a><a href="delete/{{$value['id']}}"><button class=" ml-1 btn btn-danger">Delete</button></a></td>
            </tr>
        @endforeach
    </tbody>


</table>

<a href="create/" class="btn btn-success">Create</a>
<br>
<br>
{{ $values->links() }}
