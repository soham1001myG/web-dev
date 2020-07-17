let images = [];
let i = 9;
while (i >= 0) {
    images[i] = 'img/image' + (i + 1) + '.jpg';
    i--;
}
let time;

i = 0;
function changeImg() {
    time = document.getElementById("userTime").value;
    console.log(time);
    document.slide.src = images[i];
    if (i < images.length - 1) {
        i++;
    }
    else {
        i = 0;
    }

    setTimeout("changeImg()", time * 1000);
}

function calculator(input) {
    a = document.getElementById("inputA").value;
    b = document.getElementById("inputB").value;
    var x = document.getElementById("out");
    var y = document.getElementById('sign');
    console.log(input);
    if (isNaN(a) || isNaN(b)) {
        text = "Input not valid";
    } else {
        text = "Input Valid";
    }
    document.getElementById("demo").innerHTML = text;
    if (input == '+') {
        x.innerHTML = Number(a) + Number(b);
        y.innerHTML = '+';
    } else if (input == '-') {
        x.innerHTML = Number(a) - Number(b);
        y.innerHTML = '-';
    } else if (input == '/') {
        x.innerHTML = Number(a) / Number(b);
        y.innerHTML = '/';
    } else {
        x.innerHTML = Number(a) * Number(b);
        y.innerHTML = '*';
    }
    console.log(x);
}


function ValidateEmail() {
    var inputText = document.getElementById('email').value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.match(mailformat)) {
        document.getElementById('email').style.backgroundColor = "green";
    } else {
        document.getElementById('email').style.backgroundColor = "red";
    }
}
