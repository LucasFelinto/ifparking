
 <div class="row">
        <div class="col">
            <div class="pull-left">
                <h2>Mostrar Veículos</h2>
            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $vehicle->id }}
            </div> 
        </div>
    </div> 

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Veículo:</strong>
                    {{ $vehicle->model }}
            </div>
        </div>
    </div>   

     <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Cor:</strong>
                    {{ $vehicle->color }}
            </div>
        </div>
    </div>     

      <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Placa:</strong>
                    {{ $vehicle->board }}
            </div>
        </div>
    </div> 

     <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Criado:</strong>
                {{ $vehicle->created_at }}
            </div>
        </div>  
    </div>      

     <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Atualizado:</strong>
                {{ $vehicle->updated_at }}
            </div>
        </div>  
    </div>      


    

