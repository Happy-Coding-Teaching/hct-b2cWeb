function chooseClass() {
    var x = document.getElementById("mySelect").value;

    if (x == "APCS") {
        var elems = document.querySelectorAll("#selectCourse option");
        var length = elems.length;
        console.log(elems);
        for (var index = 0; index < length; index++) {
            console.log(elems[index].className);
            if (elems[index].className == "APCS") {
                elems[index].style.display = "";
            }
            else {
                elems[index].style.display = "none";
            }
        }
    } else if (x == "adult") {
        var elems = document.querySelectorAll("#selectCourse option");
        var length = elems.length;
        console.log(elems);
        for (var index = 0; index < length; index++) {
            console.log(elems[index].className);
            if (elems[index].className == "adult") {
                elems[index].style.display = "";
            }
            else {
                elems[index].style.display = "none";
            }
        }
    }
    else if (x == "junior") {
        var elems = document.querySelectorAll("#selectCourse option");
        var length = elems.length;
        console.log(elems);
        for (var index = 0; index < length; index++) {
            console.log(elems[index].className);
            if (elems[index].className == "junior") {
                elems[index].style.display = "";
            }
            else {
                elems[index].style.display = "none";
            }
        }
    }
    else if (x == "middle") {
        var elems = document.querySelectorAll("#selectCourse option");
        var length = elems.length;
        console.log(elems);
        for (var index = 0; index < length; index++) {
            console.log(elems[index].className);
            if (elems[index].className == "middle") {
                elems[index].style.display = "";
            }
            else {
                elems[index].style.display = "none";
            }
        }
    }
    else if (x == "winter") {
        var elems = document.querySelectorAll("#selectCourse option");
        var length = elems.length;
        console.log(elems);
        for (var index = 0; index < length; index++) {
            console.log(elems[index].className);
            if (elems[index].className == "winter") {
                elems[index].style.display = "";
            }
            else {
                elems[index].style.display = "none";
            }
        }
    }
    
    // var temp = "選擇課程";
    // var selectCourse = document.getElementById('selectCourse');

    // for (var i, j = 0; i = selectCourse.options[j]; j++) {
    //     if (i.value == temp) {
    //         selectCourse.selectedIndex = j;
    //         break;
    //     }
    // }
}
function chooseCourse() {
    var casename = document.getElementById("mySelect").value;
    var coursename = document.getElementById("selectCourse").value;
    var geturl = location.href+'?case='+casename+"&course="+coursename;
    // document.location.href= geturl;
    console.log(geturl);
}