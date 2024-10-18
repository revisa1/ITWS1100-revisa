homepage: http://revisarpi.eastus.cloudapp.azure.com/iit/aboutMe/aboutMe.html
lab-page: http://revisarpi.eastus.cloudapp.azure.com/iit/labs/lab06/lab6landing.html
github repo: https://github.com/revisa1/itws1100-revisa


4b reasoning + bonus:
When you click on the new list items(i.e. you've pressed the "add list item" button) they do not turn red unlike the original list items that appear onload. This is because the function assigned to change the color to red is only binded to the list items onload. This was done because all of the event listeners/functions are within an onload function so they are only binded to events that were created on load. I fixed this by binding all list items with the "on" event listener which--as per the name-- binds all list items no matter if they were created onload or after.