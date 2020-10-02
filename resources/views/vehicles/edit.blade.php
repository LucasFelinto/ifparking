<div class="row">
        <div class="col">
            <div class="pull-left">   
                <h2>Alterar dados do Veículo</h2>
            </div>
        </div>
    </div>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Veículo:</strong>
                <input type="text" name="model" class="form-control" value="{{ $vehicle->model }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Cor do Veículo:</strong>
                <input class="form-control" name="color" >{{ $vehicle->color }} </input>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Placa:</strong>
                <input class="form-control" name="board" >{{ $vehicle->board }} </input>
            </div>
        </div>
    </div>

    <div class="col text-center">
        <button type="submit" class="btn btn-primary col">Atualizar</button>
    </div>
</form>