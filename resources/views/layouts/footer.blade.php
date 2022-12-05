<!-- sec9 -->

<!-- sec header  -->



<script>
    filterObjects("all");
function filterObjects(c) {
    var x,i ;
    x = document.getElementsByClassName("f1");
    if (c == "all") c = "" ;
    for ( i = 0 ; i<x.length ; i++) {
        removeClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) addClass(x[i] , "show")
    }
}

function addClass (element , name){
    var i , arr1 , arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for ( i= 0 ; i<arr2.length ; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function removeClass(element,name){
    var i , arr1 , arr2 ;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for ( i= 0 ; i<arr2.length ; i++) {
        while (arr1.indexOf(arr2[i]) > -1 ) {
            arr1.splice(arr1.indexOf(arr2[i]),1);
        }
    }
    element.className = arr1.join(" ");
}
</script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
