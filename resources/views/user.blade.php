<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tanggal</th>
            <th>Unik Id</th>
        </tr>  
    </thead>
    
    <tbody>
        @php $i=1 @endphp
        @foreach($users as $s)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{ $s->u_email}}</td>
                <td>{{$s->u_name}}</td>
                <td>{{$s->u_pwd}}</td>
                <td>{{$s->u_verifydate}}</td>
                <td>{{$s->u_uniqid}}</td>
            </tr>

        @endforeach
    </tbody>

</table>