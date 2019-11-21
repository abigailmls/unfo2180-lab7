window.onload=function(){

    var httpRequest;

    httpRequest = new XMLHttpRequest();

    var button = document.getElementById('lookup');

    

    button.addEventListener('click',function(element) {



        element.preventDefault();



        



        var checked=document.getElementById('shell').checked;



        if (checked==true) {



         httpRequest.onreadystatechange = searchAll;



         httpRequest.open('GET','world.php?country=all=true', true);



         httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');



         httpRequest.send();



        } else {



         var country_search=document.getElementById('country').value;



         httpRequest.onreadystatechange = searchCountry;



         httpRequest.open('GET','world.php?country='+country_search, true);



         httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');



         httpRequest.send();



        }



    });

    

    

    function searchAll() {



              if(httpRequest.readyState===XMLHttpRequest.DONE){



                 if(httpRequest.status===200){



            



                    var response=httpRequest.responseText;



                    var output=document.getElementById('result');



            



                    output.innerHTML="<h1> Search Result<h1/><br>"+response;



                }



                else{



                 alert("There was a problem with the request");



                }



             }



             



         }

    function searchCountry() {



             if(httpRequest.readyState===XMLHttpRequest.DONE){



                 if(httpRequest.status===200){





                    var response=httpRequest.responseText;



                    var output=document.getElementById('result');



            



                    output.innerHTML="<h1> Search Result<h1/><br>"+response;



                }



                else{



                 



                 alert("There was a problem with the request");



                }



             }



             



         }

};

