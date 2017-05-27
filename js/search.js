function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementsByName("list");
    li1 = ul[0].getElementsByTagName('li');
    li2 = ul[1].getElementsByTagName('li');
    j=Math.max(li1.length,li2.length)
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i <li1.length; i++) {
        a =li1[i].getElementsByTagName("a")[0];
       
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li1[i].style.display = "";
        } else {
            li1[i].style.display = "none";
        }
    }

    for (i = 0; i <li2.length; i++) {
         b =li2[i].getElementsByTagName("a")[0];
        if (b.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li2[i].style.display = "";
        } else {
            li2[i].style.display = "none";
        }
    }
}