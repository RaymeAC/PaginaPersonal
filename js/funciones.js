function masinfo(){
 
        var detalle=document.getElementById("detalle");
        detalle.style.display="block";
        detalle.style.transitionDuration="2s";

        detalle.style.transitionTimingFunction="steps(6, end)"

}
   

function menosinfo(){
    const detalle=document.getElementById("detalle");
    detalle.style.transition= "1s";
    detalle.style.display="none";
    
}