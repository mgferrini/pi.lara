window.onload=function(){
let filas = document.querySelectorAll(".cant");
console.log(filas);


$(document).ready(function(){
  $(".quantity").change(function(){
      //q = document.getElementById("quantity45")
      actualInput = $(this)[0];
      miNum =  actualInput.getAttribute("item") ;
      
      mist = document.getElementById("subTotal"+ miNum );
      miprecio = document.getElementById("price"+ miNum ).getAttribute("value") ;
      console.log( mist  );
      console.log( miprecio );
      cant = parseInt($(this).val());
      console.log( cant  );
      subtotal = miprecio * cant;
      mist.setAttribute("value", subtotal );
      
    console.log( actualInput  );
  });
});


 var table = document.getElementById("miTabla"), 
 sumVal = 0;
            
 for(var i = 1; i < table.rows.length; i++)
 {
     sumVal = sumVal + parseInt(table.rows[i].cells[4].innerHTML);
 }
 
 document.getElementById("sum").innerHTML = sumVal;
 console.log(sumVal);

  }
