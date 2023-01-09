function chooseClass() {
    var x = document.getElementById("mySelect").value;
    if (x == 1) {
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
    } else if (x == 2) {
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
    else if (x == 3) {
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
    else if (x == 4) {
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
    else if (x == 5) {
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
    var x = document.getElementById("selectCourse");
    console.log(x.options[x.selectedIndex].className);

    var img = document.createElement("img");

    var imgSrc = "assets/img/DM/"+x.options[x.selectedIndex].className+"/"+x.value+".jpg";
    console.log(imgSrc);
    img.src = imgSrc;
    // img.width = "100%"; 
    img.style.maxWidth = "1320px";
    var src = document.getElementById("setPic");
    src.innerHTML = "";
    src.appendChild(img);
}