function fecha_actual (input){
    var d = new Date();
    var strDate = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
    $("#"+input).text(strDate);    
}
function mostrar(input) {///funcion para mostrar la hora se necesita un nombre de campo como parametro
    var Digital = new Date();
    var hours = Digital.getHours();
    var minutes = Digital.getMinutes();
    var seconds = Digital.getSeconds();
    var dn = "AM";    
    if (hours > 12) {
        dn = "PM";
        hours = hours - 12;
    }
    if (hours === 0)
        hours = 12;
    if (minutes <= 9)
        minutes = "0" + minutes;
    if (seconds <= 9)
        seconds = "0" + seconds;
    $("#"+input).text(hours + ":" + minutes + ":" + seconds + " " + dn);
    //$("#"+input).val(hours + ":" + minutes + ":" + seconds + " " + dn);    
    setTimeout("mostrar('"+input+"')", 1000);    
}
function comprobarCamposRequired(form){
    var correcto=true;
    var campos_text=$('#'+form+' input:required');    
    $(campos_text).each(function() {
        var pattern = new RegExp("^" + $(this)[0].pattern + "$");                   
        if($(this).val() != '' && pattern.test($(this).val())){   
            $(this).parent().parent().removeClass('has-error');                        
        }else{
            correcto=false;
            $(this).parent().parent().addClass('has-error');
        }   
    });
    return correcto; 
}
function actualizar_form(){    
    setTimeout(function() {
      location.reload();
    }, 2000);
    
}
function limpiar_form(e){
    if(e != undefined)
    {
        var form;
        if(e.type == "click"){///mediante el click del boton
            $("#"+e.currentTarget.form.id+" input").val("");
            comprobarCamposRequired(e.currentTarget.form.id);       
            form = e.currentTarget.form.id;
        }else{//form por el evento submit
            if(e.type == "submit"){
                $("#"+e.target.id+" input").val("");
                comprobarCamposRequired(e.target.id);       
                form = e.target.id
            }else{///id directo del form
                $("#"+e+" input").val("");
                comprobarCamposRequired(e);     
                form = e;
            }
        }
        if(form == "form_usuario"){
            $("#btn_0").text("");
            $("#btn_0").append("<span class='glyphicon glyphicon-log-in'></span> Guardar");
            $("#avatar").prop("src","img/default.png");            
            $("#table").trigger('reloadGrid');     
        }else{
            if(form == "form_clientes"){
                $("#btn_0").text("");
                $("#btn_0").append("<span class='glyphicon glyphicon-log-in'></span> Guardar");
                $("#avatar").prop("src","img/default.png");            
                $("#table").trigger('reloadGrid');     
            }else{
            }           
        }           
        $("input:not([readonly='readonly']):text:visible:first").focus();   
    }
}

function carga_ubicaciones(pais,provincia,ciudad){        
    $.ajax({        
        type: "POST",
        dataType: 'json',        
        url: "../procesos/varios.php?tipo=0&id=0&fun=2&tam=2",        
        success: function(response) {                         
            for (var i = 0; i < response.length; i=i+2) {               
                $("#"+pais).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                            
            }   
            $("#"+pais).trigger("chosen:updated");                              
            $.ajax({       /*cargar el select provincia*/        
                type: "POST",
                dataType: 'json',        
                url: "../procesos/varios.php?tipo=0&id="+$("#"+pais).val()+"&fun=3&tam=2",        
                success: function(response) {         
                    for (var i = 0; i < response.length; i=i+2) {               
                        $("#"+provincia).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                           
                    }   
                    $("#"+provincia).trigger("chosen:updated");      
                    $.ajax({      /*cargar el select ciudades*/         
                        type: "POST",
                        dataType: 'json',        
                        url: "../procesos/varios.php?tipo=0&id="+$("#"+provincia).val()+"&fun=4&tam=2",        
                        success: function(response) {         
                            for (var i = 0; i < response.length; i=i+2) {               
                                $("#"+ciudad).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                           
                            }   
                            $("#"+ciudad).trigger("chosen:updated");                              
                        }                   
                    });                        
                }                   
            });
        }                   
    }); 
}

function change_pais(pais,provincia,ciudad){    
    $.ajax({       /*cargar el select provincia*/        
        type: "POST",
        dataType: 'json',        
        url: "../procesos/varios.php?tipo=0&id="+$("#"+pais).val()+"&fun=3&tam=2",        
        success: function(response) {         
            $("#"+provincia).html("");
            for (var i = 0; i < response.length; i=i+2) {               
                $("#"+provincia).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                           
            }   
            $("#"+provincia).trigger("chosen:updated");      
            $.ajax({      /*cargar el select ciudades*/         
                type: "POST",
                dataType: 'json',        
                url: "../procesos/varios.php?tipo=0&id="+$("#"+provincia).val()+"&fun=4&tam=2",        
                success: function(response) {  
                    $("#"+ciudad).html("");       
                    for (var i = 0; i < response.length; i=i+2) {               
                        $("#"+ciudad).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                           
                    }   
                    $("#"+ciudad).trigger("chosen:updated");                              
                }                   
            });                        
        }                   
    });    
}

function change_provincia(pais,provincia,ciudad){    
    $.ajax({       /*cargar el select provincia*/        
        type: "POST",
        dataType: 'json',        
        url: "../procesos/varios.php?tipo=0&id="+$("#"+provincia).val()+"&fun=4&tam=2",        
        success: function(response) {         
            $("#"+ciudad).html("");
            for (var i = 0; i < response.length; i=i+2) {               
                $("#"+ciudad).append("<option value ="+response[i]+">"+response[i+1]+"</option>");                                                                                                                                           
            }   
            $("#"+ciudad).trigger("chosen:updated");                                      
        }                   
    });
}

function punto(e){                
    if(e.keyCode == 46){        
        var texto = $(this).val();     
        var buscar = '.';      
        var contador = 0;    
        while (texto.indexOf(buscar) > -1) {        
            texto = texto.substr(texto.indexOf(buscar)+buscar.length,texto.length);
            contador++; 
        }
        //console.log(contador)
        if(contador <1 ){
            return true;
        } else{
            return false;
        }
    }    
}

function validarNumeros(e) { // 1    
    tecla = (document.all) ? e.keyCode : e.which; // 2
    //console.log(e.keyCode)
    if (tecla==8) return true; // backspace
    if (tecla==13) return true; // enter
    if (tecla==9) return true; // tab
    if (tecla==116) return true; // f5
    //if (tecla==109) return true; // menos
    if (tecla==110) return true; // punto
    //if (tecla==189) return true; // guion
    if (tecla==39) return true; // atras
    if (tecla==37) return true; // adelante
    if (e.ctrlKey && tecla==86) { return true}; //Ctrl v
    if (e.ctrlKey && tecla==67) { return true}; //Ctrl c
    if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
    if (tecla>=96 && tecla<=105) { return true;} //numpad

    patron = /[0-9]/; // patron

    te = String.fromCharCode(tecla); 
    return patron.test(te); // prueba
}

function ci(campo,extranjero){ 
    if(extranjero == 'OFF'){
        var numero = $("#"+campo).val();        
        var suma = 0;      
        var residuo = 0;      
        var pri = false;      
        var pub = false;            
        var nat = false;                     
        var modulo = 11;
        var p1;
        var p2;
        var p3;
        var p4;
        var p5;
        var p6;
        var p7;
        var p8;            
        var p9; 
        var d1  = numero.substr(0,1);         
        var d2  = numero.substr(1,1);         
        var d3  = numero.substr(2,1);         
        var d4  = numero.substr(3,1);         
        var d5  = numero.substr(4,1);         
        var d6  = numero.substr(5,1);         
        var d7  = numero.substr(6,1);         
        var d8  = numero.substr(7,1);         
        var d9  = numero.substr(8,1);         
        var d10 = numero.substr(9,1);  

        if (d3 < 6){           
            nat = true;            
            p1 = d1 * 2;
            if (p1 >= 10) p1 -= 9;
            p2 = d2 * 1;
            if (p2 >= 10) p2 -= 9;
            p3 = d3 * 2;
            if (p3 >= 10) p3 -= 9;
            p4 = d4 * 1;
            if (p4 >= 10) p4 -= 9;
            p5 = d5 * 2;
            if (p5 >= 10) p5 -= 9;
            p6 = d6 * 1;
            if (p6 >= 10) p6 -= 9; 
            p7 = d7 * 2;
            if (p7 >= 10) p7 -= 9;
            p8 = d8 * 1;
            if (p8 >= 10) p8 -= 9;
            p9 = d9 * 2;
            if (p9 >= 10) p9 -= 9;             
            modulo = 10;
        } else if(d3 == 6){           
            pub = true;             
            p1 = d1 * 3;
            p2 = d2 * 2;
            p3 = d3 * 7;
            p4 = d4 * 6;
            p5 = d5 * 5;
            p6 = d6 * 4;
            p7 = d7 * 3;
            p8 = d8 * 2;            
            p9 = 0;            
        } else if(d3 == 9) {          
            pri = true;                                   
            p1 = d1 * 4;
            p2 = d2 * 3;
            p3 = d3 * 2;
            p4 = d4 * 7;
            p5 = d5 * 6;
            p6 = d6 * 5;
            p7 = d7 * 4;
            p8 = d8 * 3;
            p9 = d9 * 2;            
        }

        suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;                
        residuo = suma % modulo;                                         

        var digitoVerificador = residuo==0 ? 0: modulo - residuo; 
        ////////////verificamos del tipo cedula o ruc////////////////////        
        if (numero.length === 10) {     
            if(nat == true){
                if (digitoVerificador != d10){                                              
                    alert('El número de cédula es incorrecto.');
                    $("#"+campo).val("");
                    $("#"+campo).focus();
                }else{                    
                    //alert('El número de cédula es correcto.');
                }
            }
        }         
    }      
}

function ci_ruc_pass(campo,valor,documento){

    var numero = valor;
    var suma = 0;      
    var residuo = 0;      
    var pri = false;      
    var pub = false;            
    var nat = false;                     
    var modulo = 11;
    var p1;
    var p2;
    var p3;
    var p4;
    var p5;
    var p6;
    var p7;
    var p8;            
    var p9; 
    var d1  = numero.substr(0,1);         
    var d2  = numero.substr(1,1);         
    var d3  = numero.substr(2,1);         
    var d4  = numero.substr(3,1);         
    var d5  = numero.substr(4,1);         
    var d6  = numero.substr(5,1);         
    var d7  = numero.substr(6,1);         
    var d8  = numero.substr(7,1);         
    var d9  = numero.substr(8,1);         
    var d10 = numero.substr(9,1);  

    if (d3 < 6){           
        nat = true;            
        p1 = d1 * 2;
        if (p1 >= 10) p1 -= 9;
        p2 = d2 * 1;
        if (p2 >= 10) p2 -= 9;
        p3 = d3 * 2;
        if (p3 >= 10) p3 -= 9;
        p4 = d4 * 1;
        if (p4 >= 10) p4 -= 9;
        p5 = d5 * 2;
        if (p5 >= 10) p5 -= 9;
        p6 = d6 * 1;
        if (p6 >= 10) p6 -= 9; 
        p7 = d7 * 2;
        if (p7 >= 10) p7 -= 9;
        p8 = d8 * 1;
        if (p8 >= 10) p8 -= 9;
        p9 = d9 * 2;
        if (p9 >= 10) p9 -= 9;             
        modulo = 10;
    } else if(d3 == 6){           
        pub = true;             
        p1 = d1 * 3;
        p2 = d2 * 2;
        p3 = d3 * 7;
        p4 = d4 * 6;
        p5 = d5 * 5;
        p6 = d6 * 4;
        p7 = d7 * 3;
        p8 = d8 * 2;            
        p9 = 0;            
    } else if(d3 == 9) {          
        pri = true;                                   
        p1 = d1 * 4;
        p2 = d2 * 3;
        p3 = d3 * 2;
        p4 = d4 * 7;
        p5 = d5 * 6;
        p6 = d6 * 5;
        p7 = d7 * 4;
        p8 = d8 * 3;
        p9 = d9 * 2;            
    }
    suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;                
    residuo = suma % modulo;                                         
    var digitoVerificador = residuo==0 ? 0: modulo - residuo; 
    ////////////verificamos del tipo cedula o ruc////////////////////
    if (documento == "CI") {
        if (numero.length === 10) {
            if(nat == true){
                if (digitoVerificador != d10){                          
                    alert('El número de cédula es incorrecto.');
                    $("#"+campo).val("");
                }else{
                    alert('El número de cédula es correcto.');
                }
            }
        }
    }else{
        if (documento === "RUC") {
            var ruc = numero.substr(10,13);
            var digito3 = numero.substring(2,3);
            if(ruc == "001" ){
                if(digito3 < 6){ 
                    if(nat == true){
                     if (digitoVerificador != d10){                          
                      alert('El ruc persona natural es incorrecto.');
                      $("#"+campo).val("");
                      }else{
                       alert('El ruc persona natural es correcto.');    
                      } 
                    }
                }else{
                    if(digito3 == 6){ 
                        if (pub==true){  
                            if (digitoVerificador != d9){                          
                                alert('El ruc público es incorrecto.');
                                $("#"+campo).val("");
                            }else{
                                alert('El ruc público es correcto.'); 
                            } 
                        }
                    }else{
                        if(digito3 == 9){
                            if(pri == true){
                                if (digitoVerificador != d10){                          
                                    alert('El ruc privado es incorrecto.');
                                    $("#"+campo).val("");
                                }else{
                                    alert('El ruc privado es correcto.');      
                                } 
                            }
                        } 
                    }
                }
            }else{
                if(numero.length === 13){
                    alert('El ruc es incorrecto.'); 
                    $("#"+campo).val("");
                }
            }
        }else{

        }                    
    }         
}

function atras(id,carpeta,archivo){
    var url = '';    
    //url = "../secuencia.php?id="+id+"&fn=0";    
    url = "../"+carpeta+"/"+archivo+"?id="+id+"&fn=0"; 
    var resp = "";    
    $.ajax({                
        type: "POST",
        dataType: 'json',       
        url: url, 
        async:false,          
        success: function(data) {               
            resp = data;
        }
    });     
    return resp;
}

function adelante(id,carpeta,archivo){
    var url = '';    
    //url = "../secuencia.php?id="+id+"&fn=1";    
    url = "../"+carpeta+"/"+archivo+"?id="+id+"&fn=1"; 
    var resp = "";    
    $.ajax({                
        type: "POST",
        dataType: 'json',       
        url: url, 
        async:false,          
        success: function(data) {               
            resp = data;
        }
    });     
    return resp;
}

function documentos(fun){
    if(fun == 0){
        $("#txt_2").val("");    
    }   
    $("#txt_2").focus();
    if($("#txt_1").val() == "Cedula"){                      
        $("#txt_2").prop("maxlength",10);
        $("#txt_2").attr("minlength",10);
        $("#txt_2").prop("pattern","[0-9]{10,10}");
    }else{
        if($("#txt_1").val() == "RUC"){                             
            $("#txt_2").prop("maxlength",13);
            $("#txt_2").attr("minlength",13);
            $("#txt_2").prop("pattern","[0-9]{13,13}");
        }else{          
            $("#txt_2").removeAttr("maxlength");            
            $("#txt_2").attr("minlength",1);
            $("#txt_2").prop("pattern","[0-9]{1,}");
        }
    }
}



