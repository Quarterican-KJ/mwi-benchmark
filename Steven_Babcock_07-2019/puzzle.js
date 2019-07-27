// Object 1
// Matt Johnson
// Bart Paden
// Ryan Doss
// Michael Spangler

// Object 2
// Matt Johnson
// Bart Paden
// Jordan Heigle
// Tyler Viles

// Result Object
// Matt Johnson
// Bart Paden
// Ryan Doss
// Michael Spangler
// Jordan Heigle
// Tyler Viles


window.onload = function(){   
   document.getElementById("myLink").onclick = function(){
      //event listener to listen for multiple clicks on the myLink variable, If clicked more than once, dispaly an alert for the user.
      let pageAlert = document.getElementById('myLink');
      pageAlert.addEventListener('click', function() {
         alert('Results have already been given at the bottom of the page.');
     }, false);

      //take inital 2 sets of arrays and combine them together to form one large array at which point i can remove any duplicates allowing me to return an arrary of all unique names.
      //names arrays given in github
      let names1 = ["Matt Johnson", "Bart Paden", "Ryan Doss", "Michael Spangler"];
      let names2 = ["Matt Johnson", "Bart Paden", "Jordan Heigle", "Tyler Viles"];

      //push names2 array to end of names1 array
      names1.push.apply(names1, names2);

      //new array for final results
      let results = [];

      // loop over new names1 array created with previous push.apply method above and remove duplicates by pushing unique values to a new results array
      for ( let i = 0; i < names1.length; i++){
             if(results.indexOf(names1[i]) === -1){
                results.push(names1[i]);
             }
          }
          console.log(results); 
          //push new results array to the page when link is pressed. 
          //was unable to figure out how to separate the array into a broken up unordered list         
          results.forEach(function(unList, num, all) {             
            document.getElementById("list").innerHTML = unList. ;
             console.log(unList);
            
          });      
             // return false to prevent link from navigating away from page on click
              return false;
          }
         }
         