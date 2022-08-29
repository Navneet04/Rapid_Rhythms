fetch('javascript/class-data.json')
.then(function (response){
    return response.json();
})
.then(function (data){
    for(var i=0; i<data.length; i++){
        if(data[i].id == "mon1"){
            document.getElementById("mon1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon2"){
            document.getElementById("mon2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon3"){
            document.getElementById("mon3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon4"){
            document.getElementById("mon4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon5"){
            document.getElementById("mon5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon6"){
            document.getElementById("mon6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon7"){
            document.getElementById("mon7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon8"){
            document.getElementById("mon8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "mon9"){
            document.getElementById("mon9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "tues1"){
            document.getElementById("tues1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues2"){
            document.getElementById("tues2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues3"){
            document.getElementById("tues3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues4"){
            document.getElementById("tues4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues5"){
            document.getElementById("tues5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues6"){
            document.getElementById("tues6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues7"){
            document.getElementById("tues7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues8"){
            document.getElementById("tues8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "tues9"){
            document.getElementById("tues9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "wed1"){
            document.getElementById("wed1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed2"){
            document.getElementById("wed2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed3"){
            document.getElementById("wed3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed4"){
            document.getElementById("wed4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed5"){
            document.getElementById("wed5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed6"){
            document.getElementById("wed6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed7"){
            document.getElementById("wed7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed8"){
            document.getElementById("wed8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "wed9"){
            document.getElementById("wed9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "thur1"){
            document.getElementById("thur1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur2"){
            document.getElementById("thur2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur3"){
            document.getElementById("thur3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur4"){
            document.getElementById("thur4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur5"){
            document.getElementById("thur5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur6"){
            document.getElementById("thur6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur7"){
            document.getElementById("thur7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur8"){
            document.getElementById("thur8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "thur9"){
            document.getElementById("thur9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "fri1"){
            document.getElementById("fri1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri2"){
            document.getElementById("fri2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri3"){
            document.getElementById("fri3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri4"){
            document.getElementById("fri4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri5"){
            document.getElementById("fri5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri6"){
            document.getElementById("fri6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri7"){
            document.getElementById("fri7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri8"){
            document.getElementById("fri8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "fri9"){
            document.getElementById("fri9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "sat1"){
            document.getElementById("sat1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat2"){
            document.getElementById("sat2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat3"){
            document.getElementById("sat3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat4"){
            document.getElementById("sat4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat5"){
            document.getElementById("sat5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat6"){
            document.getElementById("sat6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat7"){
            document.getElementById("sat7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat8"){
            document.getElementById("sat8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sat9"){
            document.getElementById("sat9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }

        if(data[i].id == "sun1"){
            document.getElementById("sun1").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun2"){
            document.getElementById("sun2").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun3"){
            document.getElementById("sun3").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun4"){
            document.getElementById("sun4").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun5"){
            document.getElementById("sun5").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun6"){
            document.getElementById("sun6").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun7"){
            document.getElementById("sun7").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun8"){
            document.getElementById("sun8").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
        if(data[i].id == "sun9"){
            document.getElementById("sun9").innerHTML = data[i].classname + "<br />" + data[i].teacher;
        }
    }
})
.catch(function (error){
    console.log(error);
})