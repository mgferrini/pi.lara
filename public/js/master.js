window.onload=function(){



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

      var table = document.getElementById("miTabla"), 
      sumVal = 0;   
      for(var i = 0; i < table.rows.length; i++)
      {
          sumVal = sumVal + subtotal;
      }
      document.getElementById("sumTotal").innerHTML = sumVal;
      console.log(sumVal);

      
      //result=document.getElementById("sumTotal")
      //result.setAttribute("value", sumVal );


  });
});

  }
