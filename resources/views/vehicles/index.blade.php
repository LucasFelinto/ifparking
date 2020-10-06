<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body>
 <nav class="navbar navbar-dark bg-dark">
        <a class="nav-link active" href="#">
                <img src="" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand" href="#">IFPARKING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                
            </div>
        </div>
    </nav>
<div class="jumbotron">
    <div class="d-flex align-items-center justify-content-center ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
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
                                        <th>|PLACA|</th>
                                        <th>|MODELO|</th>
                                        <th>|COLOR|</th>
                                        <th>|ID| |DELETE| </th>
                                    </tr>


                                    @foreach ($vehicles as $vehicle)

                                    <tr>
                                        <td>{{ $vehicle->board }}</td>
                                        <td>{{ $vehicle->model }}</td>
                                        <td>{{ $vehicle->color }}</td>
                                        <td>
                                            <form action= "{{ route('vehicles.destroy',['vehicle'=>$vehicle->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="" name="vehicles" value="{{ $vehicle->id }}" >
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

