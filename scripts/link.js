
var url = "http://www.google.com"

$("#linkbtn").click(()=>{

    //open a new window
    window.open(url);
})

//up__________________________________________________________________________________________________________

var  counter;
var time1;
var time2;

var Timedelay = 4;

document.addEventListener("visibilitychange",()=>{

    
// if($("#congrat")  != null)

    if(document.visibilityState == 'visible')
    {

        time1 = new Date().getTime();

        if ((time1 - time2)/1000 >= Timedelay)
       {

$.get("scripts/update.php");


         $("#congrat").fadeOut(()=>{


    $("#congrat").css("display", "none");
    $("#finaldiv").css("display", "block");
});

        }   
        
        
        else{


            $("#msg").html("YOU DID NOT COMPLETE<br>THE SIGN UP");

            }
        
      
    }
    
    
    else{
        
        
        time2 = new Date().getTime();
 

    }
});

