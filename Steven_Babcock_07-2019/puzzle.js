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

//Event listener to listen for the content to be loaded on the page
document.addEventListener('DOMContentLoaded', function(){

   //boolean to be used for page alert, once link is clicked, the status will change and allow the page alert to be executed
   let didShowResults = false;

   // connect to the link
   const myLinkElm = document.getElementById("myLink");
   
   //
   function showResults(event) {
         if (event && event.preventDefault) {
            event.preventDefault();
         }
         if (didShowResults) {
            alert('Results have already been given at the bottom of the page.');
         return;
         }
   // Names colleted from gitHub, sorted into arrays.
   let names1 = ["Matt Johnson", "Bart Paden", "Ryan Doss", "Michael Spangler"];
   let names2 = ["Matt Johnson", "Bart Paden", "Jordan Heigle", "Tyler Viles"];
   // merge arrays together and return a new array to be manipulated
   let names3 = names1.concat(names2);   
   let results = [];
   let len = names3.length;
   
   // for loop to iterate through names3 array and return unique values to the results array
   for (let i = 0; i < len; i++) {
         const item = names3[i];
   if (!results.includes(item)) {
         results.push(item);
   }
   }
   //check to see if results are all unique values
   console.log(results);

   // FILTER RESULTS ARRAY INTO AN UNORDERED LIST

   //connect to HTML ID tag for list
   const unorderedList = document.getElementById("list");
   //helper function to create a new LI, and append results for an Unordered List
         const addToUnorderedList = (name) => {
         //creats a new LI in the HTML doc
            const li = document.createElement('li');
            li.innerText = name;
            li.setAttribute('id', name);
            unorderedList.appendChild(li);
   }
   //forEach loop to grab each value of the results array and run the add to UL function above
   results.forEach((name, index, arr) => {
      addToUnorderedList(name);
   //log to make sure the names are being added to the list
   console.log(`Added "${name}" to the list!`);
   });
   
   //changes to reflect the link being clicked and allow access to the page alert for multiple clicks
   didShowResults = true;
   }
   //page alert to inform the user that the results have been sorted into an unordered list
   myLinkElm.addEventListener('click', showResults);
   
   });
