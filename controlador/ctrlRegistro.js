
// Función de inicialización de la vista

function ponenciaEdicionInicializar(){
  
  var crearWidgets = function () { 
    // Componentes
    $("#jqxInput_Titulo").jqxInput({
         placeHolder: "Nombre del taller o conferencia...", 
         height: 25, 
         theme:'upm'
    });

    $("#jqxDateTimeInput_FechaHora").jqxDateTimeInput({ 
      width: '300px', 
      height: '25px', 
      formatString: 'F',
      min: new Date(2015, 10, 3), 
      max: new Date(2015, 10, 10),
      formatString: 'yyyy-MM-dd HH:mm'
    });
      
    $("#jqxInput_Lugar").jqxInput({
         placeHolder: "Edificio y aula", 
         height: 25, 
         theme:'upm'
    });
      
    $("#jqxInput_Ponente").jqxInput({
         placeHolder: "Quién imparte el taller o conferencia...", 
         height: 25, 
         theme:'upm'
    });
    
    $("#jqxInput_CorreoPonente").jqxInput({
         placeHolder: "p.e.: correo@gmail.com", 
         height: 25, 
         theme:'upm'
    });

    $("#jqxMaskedInput_TelefonoPonente").jqxMaskedInput({ mask: '(###)###-####', theme: 'upm'});
      
    $("#jqxButton_Registrar").jqxButton({ width: '150', height:30, theme: 'upm'});
  }

  var agregarEventos = function () { 
    $('#jqxButton_Registrar').on('click', function (event) {
      $("#jqxButton_Registrar").prop("value", "Registrando..."); 
  		$("#jqxButton_Registrar").prop("disabled", true); 

      if(registroPonenciaValidar())
        ponenciaAgregarModificar();
      
    });
  }

  crearWidgets();
  agregarEventos();
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function registroPonenciaValidar(){
  if (!$("#frmRegistro")[0].checkValidity()) 
    $("#frmRegistro")[0].reportValidity();

  return $("#frmRegistro")[0].checkValidity();
}

function ponenciaAgregarModificar(){
  var parametros = $("#frmRegistro").serialize();
  
  $.post("../modelo/modRegistroAgregarModificar.php", parametros, function(data, status, xhr){
    if(status == 'success'){
      $("#jqxButton_Registrar").prop("value", "Registrar");
      $("#jqxButton_Registrar").prop("disabled", false);
      
      eval(data);

      if(json.noError == 0){
        alert("Su registro se guardó correctamente.");
        $("#frmRegistro")[0].reset();
      }
      else{
        alert("Ocurrió un error de base de datos: " + json.msjError);
      }
    }
  });
}