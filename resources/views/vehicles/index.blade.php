
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>board</th>
            <th>Model</th>
            <th>Color</th>
        </tr>


        @foreach ($vehicles as $vehicle)

        <tr>
            <td>{{ $vehicle->board }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->color }}</td>
            <td>

                <form action={{ route('vehicles.destroy',['vehicle'=>$vehicle->id]) }} method="post">
                    @csrf
                    @method('delete')
                    <input type="" name="vehicles" value={{ $vehicle->id }}>
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>

        @endforeach
    </thead>
</table>

