


/* pruebas anteriores para alternar los elementos todos en el index */


/* 
function mostrarfuntion(validacion){
    var mostrar = document.getElementById(validacion);
    if(mostrar.style.display ==='none'){
        mostrar.style.display='block';
        document.getElementById(validacion);
    }else if(mostrar != document.getElementById(validacion)){
        mostrar.style.display='none';
    }else{
        document.write("menuda castaña 2.0")
    }
    
    
} */
/* 
function mostrarfuntion(validacion){
    var mostrar = document.getElementById(validacion);
    if(mostrar.style.display ==='none'){
        mostrar.style.display='block';
    }else{
        mostrar.style.display='none';
    }
    
    
} 
/* function mostrarfuntion(validacion){
    var mostrar = document.getElementById(validacion);
    if(mostrar === document.getElementById(validacion)){
        style.display='block';
    } else{
        style.display='none';
    }
    
    
}
 */


/* 
<li class="nav-item active" id="activadoindex" onclick="mostrarfuntion('readRelaciones')">

<li class="nav-item" id="activadocursos" onclick="mostrarfuntion('readCursos')">

<li class="nav-item" id="activadoestudiantes" onclick="mostrarfuntion('readAlumnos')">

<li class="nav-item" id="activadocentes" onclick="mostrarfuntion('readDocentes')">

<li class="nav-item" id="activadorelaciones" onclick="mostrarfuntion('createRelaciones')">



/* <div id="readRelaciones">

<div id="readCursos">
>
<div id="readDocentes" >

<div id="createRelaciones">

<div id="readAlumnos">

 */


/* prueba funcional intercambio display de los elementos */


/* jQuery(function(){

    $("#activadoindex").on("click", function(){

        if($("#readRelaciones").is(":hidden")){
            $("#readRelaciones").show();
            $("#createRelaciones").hide();
            $("#readAlumnos").hide();
            $("#readDocentes").hide();
            $("#readCursos").hide();
        }else{
            console.log("castañas")
        }

    })


}) 

jQuery(function(){

    $("#activadocursos").on("click", function(){

        if($("#readCursos").is(":hidden")){
            $("#readCursos").show();
            $("#createRelaciones").hide();
            $("#readAlumnos").hide();
            $("#readDocentes").hide();
            $("#readRelaciones").hide();
        }else{
            console.log("castañas")
        }

    })


}) 

jQuery(function(){

    $("#activadoestudiantes").on("click", function(){

        if($("#readAlumnos").is(":hidden")){
            $("#readAlumnos").show();
            $("#createRelaciones").hide();
            $("#readCursos").hide();
            $("#readDocentes").hide();
            $("#readRelaciones").hide();
        }else{
            console.log("castañas")
        }

    })

}) 


jQuery(function(){

    $("#activadocentes").on("click", function(){

        if($("#readDocentes").is(":hidden")){
            $("#readDocentes").show();
            $("#createRelaciones").hide();
            $("#readCursos").hide();
            $("#readAlumnos").hide();
            $("#readRelaciones").hide();
        }else{
            console.log("castañas")
        }

    })

}) 

jQuery(function(){

    $("#activadorelaciones").on("click", function(){

        if($("#createRelaciones").is(":hidden")){
            $("#createRelaciones").show();
            $("#readDocentes").hide();
            $("#readCursos").hide();
            $("#readAlumnos").hide();
            $("#readRelaciones").hide();
        }else{
            console.log("castañas")
        }

    })

})  */