<?php 

$accion = $_GET['seccion'];

switch ($accion) {
	case 1:
		echo	'<form>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Arriendo</label>
			                        <input type="email" class="form-control" placeholder="Email">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                   <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Agua</label>
			                        <input type="email" class="form-control" placeholder="Email">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                   <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Luz</label>
			                        <input type="email" class="form-control" placeholder="Email">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                   <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Gas</label>
			                        <input type="email" class="form-control" placeholder="Email">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                   <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Television, teléfono e internet</label>
			                        <input type="email" class="form-control" placeholder="Email">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  
			                   <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Artículos de aseo</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Administración</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Empleada de servicio</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Reparación y mantenimiento</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Decoración</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-2 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-8 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Otros</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                   
			                   <div class="row">
			                    <div class="col-md-6 pr-1">
			                      
			                    </div>
			                    
			                    <div class="col-md-4 pl-1">
			                      <div class="form-group">
			                        <label for="exampleInputEmail1">Total</label>
			                        <input type="email" class="form-control" placeholder="$">
			                      </div>
			                    </div>
			                     <div class="col-md-2 pr-1">
			                      
			                    </div>
			                  </div>
			                  
			                  <div class="row">
			                    <div class="update ml-auto mr-auto">
			                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
			                    </div>
			                  </div>
			                </form>';

		break;

		case 2:
		 echo'	<form>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Mercado</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Mesada y loncheras hijos</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Otros</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                   <div class="col-md-6">
	
				                   </div>
				                    <div class="col-md-4 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Total</label>
				                        <input type="email" class="form-control" placeholder="$">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  <div class="row">
				                    <div class="update ml-auto mr-auto">
				                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
				                    </div>
				                  </div>
				                </form>
	
	
	';

	break;

	case 3:
			 echo'	<form>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Seguro</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Medicamentos</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Citas médicas</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Otros</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                   <div class="col-md-6">
	
				                   </div>
				                    <div class="col-md-4 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Total</label>
				                        <input type="email" class="form-control" placeholder="$">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  <div class="row">
				                    <div class="update ml-auto mr-auto">
				                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
				                    </div>
				                  </div>
				                </form>
	
	
	';

	break;
	case 4:
	 echo'	<form>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Mantenimiento</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Gasolina</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Servicio público</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Lavado</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Parqueadero</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Otros</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  <div class="row">
				                   <div class="col-md-6">
	
				                   </div>
				                    <div class="col-md-4 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Total</label>
				                        <input type="email" class="form-control" placeholder="$">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  <div class="row">
				                    <div class="update ml-auto mr-auto">
				                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
				                    </div>
				                  </div>
				                </form>
	
	
	';

	break;
	case 5:
	 echo'	<form>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Pensión</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Útiles</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Otros</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  
				                  </div>
				                  <div class="row">
				                   <div class="col-md-6">
	
				                   </div>
				                    <div class="col-md-4 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Total</label>
				                        <input type="email" class="form-control" placeholder="$">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  <div class="row">
				                    <div class="update ml-auto mr-auto">
				                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
				                    </div>
				                  </div>
				                </form>
	
	
	';
	break;
	case 6:
		echo'	<form>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Vivienda</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Vehículo</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                   <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Cuota tarjeta de crédito</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  
				                  </div>
				                  <div class="row">
				                    <div class="col-md-2 pr-1">
				                      
				                    </div>
				                    
				                    <div class="col-md-8 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Otros</label>
				                        <input type="email" class="form-control" placeholder="Email">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  
				                  </div>
				                  <div class="row">
				                   <div class="col-md-6">
	
				                   </div>
				                    <div class="col-md-4 pl-1">
				                      <div class="form-group">
				                        <label for="exampleInputEmail1">Total</label>
				                        <input type="email" class="form-control" placeholder="$">
				                      </div>
				                    </div>
				                     <div class="col-md-2 pr-1">
				                      
				                    </div>
				                  </div>
				                  
				                  <div class="row">
				                    <div class="update ml-auto mr-auto">
				                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
				                    </div>
				                  </div>
				                </form>
	
	
	';
	break;
	
}
			



 ?>