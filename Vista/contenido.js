//Profesores

//Registrar Profesor

function registrarProfesor(){
    $("#contenido").load("registroProfesores.php");
}

//Configurar Profesor

function configurarProfesores(){
    $("#contenido").load("configurarProfesores.php");
}


//------------------------------------------------

function registrarGrupos(){
    $('#contenido').load("registroGrupos.php");
}

function configurarGrupos(){
    $('#contenido').load("Grupos/configurarGrupos.php")
}

function registrarAlumnos(){
    $('#contenido').load("Alumnos/registroAlumnos.php");
}

function configurarAlumnos(){
    $('#contenido').load("Alumnos/confiAlumnos.php")
}

function cargarReporte(){
    $('#contenido').load("Reportes.php");
}

