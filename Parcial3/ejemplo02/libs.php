<script type="text/javascript">
    function init(){
        var tablero=['gato1.jpg','gato2.jpg','gato3.jpg'];
        tablero.sort(function() { return 0.5 - Math.random() });

        var tabla= document.getElementById("tablero");
        
        var y=0;

        var celdas=tabla.getElementsByTagName("td");
        for(x=0; x<celdas.length;x++){
            var img1= document.createElement("img");
            img1.setAttribute("src",tablero[y++]);  
            celdas[x].appendChild(img1);
            if(y>=3){
                y=0;
                tablero.sort(function() { return 0.5 - Math.random() });
            }
            
        }

        
    }
</script>