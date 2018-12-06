 
 $(document).ready(function(){
     //Ajax call for modal
        $('.carLink').click(function(){
          //alert( $(this).attr("id") );
          
            $.ajax({
            
            type: "GET",
            url: "api/getCarInfo.php",
            dataType: "json",
            data: { "id":$(this).attr("id") },
            success: function(data,status) {
               // alert(data.description);
               $("#exampleModalLabel").html(data.maker + " " + data.model);
               $("#price").html("Price: $" + data.price);
               $("#caruselImg1").attr("src", data.imgURL);
               $("#caruselImg2").attr("src", data.imgURL2);
               $("#caruselImg3").attr("src", data.imgURL3);
               $("#milage").html("Milage: " + data.milage + " km");
               $("#weight").html("Weight: " + data.weight + " kg");
               $("#year").html("Model year: " + data.year);
               $("#Cylinder").html("Cylinder volume: " + data.cylinderVolume + " L");
               $("#color").html("Color: " + data.color);
               $("#fuel").html("Fuel type: " + data.fuelType);
               $("#doors").html("Doors: " + data.doors);
               $("#prevOwners").html("Previous owners: " + data.prevOwners);
               $("#effect").html("Horsepower: " + data.effect + " hp");      //Endret sånn at det står horsepower /Z
               $("#intColor").html("Interior color: " + data.interColor);
               $("#description").html(data.description);
               $("#addToFavBtn").attr("id", data.carId);
               
            },
            complete: function(data,status) { //optional, used for debugging purposes
              // alert(status);
            }
            
            });//ajax
        }); 
        
        
        
        //Filter Select Car Maker Fill Select
        
        $.ajax({
                
            type: "GET",
            url: "api/getAllCarMakers.php",
            dataType: "json",
            data: "maker",
            success: function(data,status) {
                //$("#county").html("<option>"+data[0].county+"</option>");                        
                //alert(data[0].county);
                $("#carMakersDrop").html("");
                for(var i=0; i<data.length; i++){
                    console.log(data[i].maker);
                    $("#carMakersDrop").append("<a class='dropdown-item' value='" + data[i].maker + "' href='#'>" + data[i].maker + "</a>");    
                }
            },
            complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
            }
                
        });
            
            
            
            
            
            
            
            
            //Button for filtering
            $("#filterCarsBtn").click(function() {
                
                //debugging
                console.log("Filter button clicked successfully")
                
                var fromPrice = $("#fromPrice").val();
                var toPrice = $("#toPrice").val();
                
                //debugging
                console.log("Values are, from: " + fromPrice + ", to " + toPrice);
              
                //Sending the parameters via url
                window.location.href = "index.php?from=" + fromPrice + "&to=" + toPrice;

               
            });
            
            
        
        
            $(".dropdown-item").click(function(){
               // $("#dropdownMenuButton").html(this.val());
                document.querySelector("#dropdownMenuButton").innerHTML = this.value;
            });
        
      
  });