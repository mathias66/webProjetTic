        @foreach ($webprojet as $key => $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->job }}</td>
            <td>
                <form action="{{route('delete', $contact->id)}}" method="POST">
   
                    <a class="btn btn-info" href="{{route('show',$contact->id)}}">Show</a>
    
                    <a class="btn btn-primary" href="{{route('edit',$contact->id)}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        {!! $webProjetDb->links() !!}