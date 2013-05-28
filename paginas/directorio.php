<?php 
    include("includes/header.php");
 ?>

 <body> 

    <div data-role="page" id="page">

    	<header data-role="header">
        	<a href="../index.php" data-icon="arrow-l" data-rel="back">Atrás</a>
    		<h1>Directorio</h1>
    	</header>
        
        <div data-role="content">	
            <ul data-role="listview" data-dividertheme="d" data-filter="true" data-filter-placeholder="Buscar teléfono...">
                <!-- TELEFONO DIRECTO -->
                <li data-role="list-divider">Teléfonos directo</li>
                    <li>
                    <a href="tel:+528262630961"> Secretaría Académica</a>
                    </li>
            
                    <li>
                    <a href="tel:+528261100117"> Teléfono FIT </a>
                    </li>
                    
                <!-- EXTENSIONES -->
                <li data-role="list-divider">Extensiones</li>
                    <li>
                    <a href="tel:+528262630900;postd=w6100">
                    	6100 - Capellanía
                    </a>
                    </li>
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6002">
                    	6002 - Centro de Investigación
                    </a>
                    </li>
                    
                    <li>
                    <a href="+528262630900;postd=w6050">
                    	6050 - Subdirección FIT
                        <br>           
                    </a>
                    </li>
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6200">
                    	6200 - Coordinación MCC
                    </a>
                    </li>                                                           
                    <li>
                    <a href="tel:+528262630900;postd=w6001">
                    	6001 - Dirección
                    </a>
                    </li>           
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6051">
                    	6051 - Docentes
                    </a>
                    </li>
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6151">
                    	6151 - Lab Cómputo
                    </a>
                    </li>
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6052">
                    	6052 - Lab Industrial
                    </a>
                    </li>                                    
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6201">
                    	6201 - Lab Electrónica
                    </a>
                    </li>
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6000">
                    	6000 - Secretaría Académica
                    </a>
                    </li>             

                     <!-- 
                    <div data-role="collapsible">
                	<h1>Pruebas</h1>
                
    	            <ul>
        	        <li data-role="list-divider">
                    	Conmutador
                    </li>
                
                    <li>
                        <a href="tel:+528262630900">
                        	Conmutador +52...
                        </a>
                    </li>
                            
                            
                
                    <li data-role="list-divider">
    	                Extensiones
                    </li>
                
                    <li>
                    <a href="tel:+528262630900;postd=pp6000"> 
    	                ;postd= +52 826 - Ext 6000
                    </a>
                    </li>
                    
                
                    <li>
                    <a href="tel:+528262630900;postd=pppppp6000">
                    ;postd=p (time) +52 826 - Ext 6000
                    </a>
                    </li>
                    
                    
                    <li>
                    <a href="tel:+528262630900;postd=w6000"> 
                    	;postd=w (tono) +52 826 - Ext 6000
                    </a>
                	</li>
                </ul>
          </div>
          -->
            </ul>
        </div>
        
<?php 
    include("../includes/footer.php");
 ?>
