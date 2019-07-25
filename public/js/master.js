window.onload=function(){

filas= document.getElementById("regcarrito").rows.length;
console.log(filas);

$(document).ready(function(){
  $(".quantity").change(function(){
      //q = document.getElementById("quantity45")
      actualInput = $(this)[0];
      miNum =  actualInput.getAttribute("item") ;
      
      mist = document.getElementById("subTotal"+ miNum );
      miprecio = document.getElementById("price"+ miNum ).getAttribute("value") ;
     // console.log( mist  );
     // console.log( miprecio );
      cant = parseInt($(this).val());
     //console.log( cant  );
      subtotal = miprecio * cant;
      mist.setAttribute("value", subtotal );
          //console.log( actualInput  );
       

//esto agrego Vale pero no funciona

      var table = document.getElementById("regcarrito");
      sumVal = 0; 
      
     // console.log(table);

      for(var i = 0; i < filas; i++)
      {
  console.log(table.rows[i].cells[5].getAttribute("value"));
         // sumVal = sumVal + parseInt(table.rows[i].cells[5].innerHTML);
      }
      document.getElementById("sumTotal").innerHTML = sumVal;
      console.log(sumVal);

      
      //result=document.getElementById("sumTotal")
      //result.setAttribute("value", sumVal );


  });
});

  }
