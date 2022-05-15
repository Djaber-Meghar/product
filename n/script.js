window.onload = function () {
    var btn = document.getElementById("btn");
    var btn_ctn = document.getElementsByClassName("btn_cnt")[0];
    btn.disabled = true;
    btn.style.background = 'gray';
    btn.style.color = '#2d2d2d';
    btn_ctn.style.WebkitBackground = 'gray';
  
    btn_ctn.style.WebkitBackground = 'gray';
    btn.style.height = "100%";
    btn.style.WebkitBackground = 'gray';
    btn.style.WebkitColor = '#2d2d2d';
   
}

function check() {
    let color = document.getElementById('color');
    let capacity = document.getElementById('capacity');
    var btn_ctn = document.getElementsByClassName("btn_cnt")[0];
    if (color.value != "" && capacity.value != "") {
        btn.disabled = false;
        btn.style.background = 'rgb(146, 54, 50)';
        btn.style.color = '#fff';
        btn_ctn.style.background = 'rgb(146, 54, 50)';
        btn.style.WebkitBackground = 'rgb(146, 54, 50)';
        btn.style.WebkitColor = '#fff';
        btn_ctn.style.WebkitBackground = 'rgb(146, 54, 50)';
    }
    
}

function checknumbers(i) {
    var tag  = document.getElementsByTagName('input')[i].value;
    var span = document.getElementsByTagName('span');
    switch (i) {
        case 0:
            if (tag.length < 10 || tag.value.length > 10) {
            span[0].style.display = 'inline-block';
            }
            return false;
            break;

        case 4:
            if (tag.length < 13 || tag.value.length > 13) {
                span[1].style.display = 'inline-block';
                }
            return false;
            break;

        case 6 :
            if (tag.length < 3 || tag.value.length > 3) {
                span[2].style.display = 'inline-block';
                }
            return false;
            break;

        

    }
}

var name= 0;



function addcolor() {
    let num = name.toString();
    var form = document.getElementsByTagName('form')[1]; 
    name ++;
    var element = document.createElement('input');
    element.setAttribute('name', 'color' + num )
    form.appendChild(element);
    form.setAttribute('action' , 'update_color.php?' + 'color' + num);
}

