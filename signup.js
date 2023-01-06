function chooseClass() {
    var x = document.getElementById("mySelect").value;
    if (x == 1) {
        var elems = document.querySelectorAll(".all");
        var length = elems.length;
        for (var index = 0; index < length; index++) {
            elems[index].style.display = "";
        }
        elems = document.querySelectorAll('.winter');
        length = elems.length;
        for (var index = 0; index < length; index++) {
            elems[index].style.display = "none";
        }
    } else if (x == 2) {
        var elems = document.querySelectorAll(".all");
        var length = elems.length;
        for (var index = 0; index < length; index++) {
            elems[index].style.display = "none";
        }
        elems = document.querySelectorAll('.winter');
        length = elems.length;
        for (var index = 0; index < length; index++) {
            elems[index].style.display = "";
        }
    }

    var temp = "選擇課程";
    var selectCourse = document.getElementById('selectCourse');

    for (var i, j = 0; i = selectCourse.options[j]; j++) {
        if (i.value == temp) {
            selectCourse.selectedIndex = j;
            break;
        }
    }
}