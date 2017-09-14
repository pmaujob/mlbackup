function onLoadBody() {

    jQuery.ajax({
        type: 'POST',
        url: '../../dinamicForms/frmConsultSync.php',
        async: true,
        timeout: 0,
        data: {value: 1},
        success: function (respuesta) { 
            
            document.getElementById('resultTable').innerHTML = respuesta;
        
        }, error: function () {
            mostrarMensaje('Error Inesperado', false);
            window.top.location = "../index.html";
        }
    });

}