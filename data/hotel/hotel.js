$(document).on("ready",inicio);

/*--*/
function inicio (){
	$("#reload").click(function (){
		actualizar_form();
	});
	$("input:not([readonly='readonly']):text:visible:first").focus();   
	// inicializacion de formato txt_ telefono1
	$('#txt_6').mask('(999) 999-999');
	$('#txt_7').mask('(999) 999-9999');
	///////////varias validaciones//////////////}
		//editables on first profile page
	$.fn.editable.defaults.mode = 'inline';
	$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    				
	
	// *** editable avatar *** //
	try {//ie8 throws some harmless exceptions, so let's catch'em

		//first let's add a fake appendChild method for Image element for browsers that have a problem with this
		//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
		try {
			document.createElement('IMG').appendChild(document.createElement('B'));
		} catch(e) {
			Image.prototype.appendChild = function(el){}
		}

		var last_gritter
		$('#avatar').editable({
			type: 'image',
			name: 'avatar',
			value: null,
			image: {
				//specify ace file input plugin's options here
				btn_choose: 'Cambiar Imagen',
				droppable: true,
				maxSize: 5100000,//~100Kb

				//and a few extra ones here
				name: 'avatar',//put the field name here as well, will be used inside the custom plugin
				on_error : function(error_type) {//on_error function will be called when the selected file has a problem
					if(last_gritter) $.gritter.remove(last_gritter);
					if(error_type == 1) {//file format error
						last_gritter = $.gritter.add({
							title: 'El archivo no es una imagen!',
							text: 'Por favor, elija un jpg | jpeg | imagen png!',
							class_name: 'gritter-error gritter-center'
						});
					} else if(error_type == 2) {//file size rror
						last_gritter = $.gritter.add({
							title: 'Archivo muy grande!',
							text: 'Tamaño de la imagen no debe superar los 5000Kb!',
							class_name: 'gritter-error gritter-center'
						});
					}
					else {//other error
					}
				},
				on_success : function() {
					$.gritter.removeAll();
				}
			},
		    url: function(params) {
				// ***UPDATE AVATAR HERE*** //
				//for a working upload example you can replace the contents of this function with 
				//examples/profile-avatar-update.js

				var deferred = new $.Deferred

				var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();

				if(!value || value.length == 0) {
					deferred.resolve();
					return deferred.promise();
				}


				//dummy upload
				setTimeout(function(){
					if("FileReader" in window) {
						//for browsers that have a thumbnail of selected image						
						var thumb = $('#avatar').next().find('img').data('thumb');

						if(thumb) $('#avatar').get(0).src = thumb;
					}
					
					deferred.resolve({'status':'OK'});

					if(last_gritter) $.gritter.remove(last_gritter);
					last_gritter = $.gritter.add({
						title: 'Imagen Actualizada!',
						text: 'Carga en servidor puede ser fácilmente implementado . Un ejemplo de trabajo se incluye con la plantilla.',
						class_name: 'gritter-info gritter-center'
					});
					
				 } , parseInt(Math.random() * 800 + 800))

				return deferred.promise();
				
				// ***END OF UPDATE AVATAR HERE*** //
			},
			
			success: function(response, newValue) {				
			}
		})
	}catch(e) {}
	
 	/*------------*/	
	$('.chosen-select').chosen({allow_single_deselect:true}); 	
	$(window)
	.off('resize.chosen')
	.on('resize.chosen', function() {
		$('.chosen-select').each(function() {
			 var $this = $(this);
			 $this.next().css({'width': $this.parent().width()});
		})
	}).trigger('resize.chosen');
	//resize chosen on sidebar collapse/expand
	$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
		if(event_name != 'sidebar_collapsed') return;
		$('.chosen-select').each(function() {
			 var $this = $(this);
			 $this.next().css({'width': $this.parent().width()});
		})
	});
	/*-----------------------*/
	$("input").on("keyup click",function (e){//campos requeridos		
		comprobarCamposRequired(e.currentTarget.form.id)
	});			
	
	/*--cargar combos dependientes--*/   
	carga_ubicaciones("txt_9","txt_10","txt_11");//pais provincia ciudad
	$("#txt_9").change(function(){
		change_pais("txt_9","txt_10","txt_11");
	});
	$("#txt_10").change(function(){
		change_provincia("txt_9","txt_10","txt_11");
	});
	/*cargar datos hotel*/
	cargar_hotel();
	/**/		
	$("#btn_0").on("click",guardar);	
	$("#btn_1").on("click",limpiar_form);
	$("#btn_2").on("click",actualizar_form);		  	  
}

function guardar(){///funcion para guardar datos
	var resp=comprobarCamposRequired("form_hotel");	    
	if(resp==true){    		
		$("#form_hotel").on("submit",function (e){				
			var texto=($("#btn_0").text()).trim();															
			var valores = $("#form_hotel").serialize();
			if(texto=="Guardar"){ 				
				guardar_datos(valores,"g",e);						
	        }else{	            
				guardar_datos(valores,"m",e);										
	        }	
	        e.preventDefault();
    		$(this).unbind("submit")		    			            			
		});	
		
	}				 
}
function guardar_datos(valores,tipo,p){		
	$.ajax({
	    url: "hotel.php", 	    				    	    
	    data:  valores + "&img="+$("#avatar")[0].src + "&tipo="+tipo, 	    	    
	    type: "POST",				
	    success: function(data){				    
	    	if( data == 0 ){
	    		alert('Datos Agregados Correctamente');	
	    		limpiar_form(p);		    		
	    	}else{	    		
	    		alert('Error al momento de actualizar las la pagina se recargara');	    		
	    		actualizar_form();
	    	}
		},		
	}); 
}
function cargar_hotel(){
	$.ajax({        
        type: "POST",
        dataType: 'json',        
        url: "../procesos/varios.php?tipo=0&fun=7&tam=10",        
        success: function(response) {         			        	        	
            $("#txt_1").val(response[0][0])
            
        }
    });	   
}