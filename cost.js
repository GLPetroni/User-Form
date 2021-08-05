var stor_amount = new Array();
stor_amount["10"]=264;
stor_amount["50"]=264;
stor_amount["150"]=528;
stor_amount["250"]=792;
stor_amount["350"]=1056;
stor_amount["450"]=1320;
stor_amount["550"]=1584;
stor_amount["650"]=1848;
stor_amount["1000"]=2904;
stor_amount["5000"]=13992;

/*Attempt at range slider bubble for value display*/
const Srange = document.getElementById("Sslide");
const Crange = document.getElementById("Cslide");

function addNums(){
    var answer = document.getElementById("answer").value;
    var digit1 = parseInt(document.getElementById("digit1").innerHTML);
    var digit2 = parseInt(document.getElementById("digit2").innerHTML);
    var sum = digit1 + digit2;
    if(answer == ""){
        alert("Please add the numbers");
    }else if(answer != sum){
        alert("Your math is wrong");
    }else{
        // all good now! //
        document.getElementById("status").innerHTML = "Correct, it is now safe to submit the form";
        document.getElementById("answer").value = "";
    }
}

function randomNums(){
    var rand_num1 = Math.floor(Math.random() * 10) + 1;
    var rand_num2 = Math.floor(Math.random() * 10) + 1;
    document.getElementById("digit1").innerHTML = rand_num1;
    document.getElementById("digit2").innerHTML = rand_num2;
}

function get_storage()
{
    var storage_price = 0;
    var calc_form = document.forms["calculation"];
    var storage_amount = calc_form.elements["storage_value"];
    storage_price = stor_amount[storage_amount.value];
    console.log(storage_amount.value);
    console.log(storage_price);
    return storage_price;
}

function get_gpu()
{
    var gpu_price = 0;
    var calc_form = document.forms["calculation"];
    var gpu_choice = calc_form.elements["gpu"];
    if(gpu_choice.checked==true){
        gpu_price = calc_form.elements["gpu"].value;
    }
    return gpu_price;
}

function get_manage()
{
    var man_price = 1;
    var calc_form = document.forms["calculation"];
    var man_amount = calc_form.elements["soft"];
    if(man_amount.checked==true){
        man_price = calc_form.elements["soft"].value;
    }
    return man_price;
}

function get_one()
{
    var one_price = 0;
    var calc_form = document.forms["calculation"];
    var one_amount = calc_form.elements["onesup"];
    if(one_amount.checked==true){
        one_price = calc_form.elements["onesup"].value;
    }
    console.log(one_price)
    return one_price;
}

function get_hosting()
{
    var host_price = 10;
    var calc_form = document.forms["calculation"];
    var host_amount = calc_form.elements["webhost"];
    if(host_amount.checked==true){
        host_price = calc_form.elements["webhost"].value;
    }
    return host_price;
}

function get_students_num()
{
    var Sslider = document.getElementById("Sslide");
    var Soutput = document.getElementById("student_num");
    Soutput.innerHTML = Sslider.value;
}

function get_students_cost()
{
    var student_cost = document.getElementById("hidden_student").getAttribute('value');
    var Sslider = document.getElementById("student_num");
    var Scost = student_cost*Sslider.innerHTML;
    var Sout = document.getElementById("studentCost");
    Sout.innerHTML = Scost;
    // let update = () => Sout.innerHTML;
    // return update();
}

function get_students()
{
    var Sslider = document.getElementById("Sslide");
    var Soutput = document.getElementById("sdude");
    Soutput.innerHTML = Sslider.value;
    let update = () => Soutput.innerHTML = Sslider.value;
    Sslider.addEventListener('input',update);
    Sslider.addEventListener('input',get_students_num());
    Sslider.addEventListener('input',get_students_cost());
    return update();
}

function get_cpu_num()
{
    var Cslider = document.getElementById("Cslide");
    var Coutput = document.getElementById("cpu_num");
    Coutput.innerHTML = Cslider.value;
}

function get_cpu_cost()
{
   var cpu_cost = document.getElementById("hidden_cpu").getAttribute('value');
   var Cslider = document.getElementById("cpu_num");
   var Ccost = cpu_cost*Cslider.innerHTML;
   var Cout = document.getElementById("cpuCost");
   Cout.innerHTML = Ccost;
   // let update = () => Cout.innerHTML;
   // return update();
}

function get_cpu()
{
    var Cslider = document.getElementById("Cslide");
    var Coutput = document.getElementById("cdude");
    Coutput.innerHTML = Cslider.value;
    let update = () => Coutput.innerHTML= Cslider.value;
    Cslider.addEventListener('input',update);
    Cslider.addEventListener('input',get_cpu_num());
    Cslider.addEventListener('input',get_cpu_cost());
    return update();
}

function calculatetotal()
{
    v1 = get_hosting()
    v2 = get_one()
    console.log(v2)
    v3 = get_manage()
    v4 = get_storage()
    v5 = get_gpu()
    v6 = get_students()
    var student_cost = document.getElementById("hidden_student").getAttribute('value');
    v6 = v6*student_cost;
    v7 = get_cpu()
    var cpu_cost = document.getElementById("hidden_cpu").getAttribute('value');
    v7 = v7*cpu_cost;
    var S_number = document.getElementById("sdude");
    var base = "2386";
    if (S_number > 20) {
        base = "0";
    }
    t = document.getElementById('total_cost')
    t.style.display='block';
    totalcosts = Number(base) + Number(v1) + Number(v2) + Number(v3) + Number(v4) + Number(v5) + Number(v6) + Number(v7);
    t.innerHTML = "Total Cost: $"+(totalcosts);
    document.getElementById('cost_total').setAttribute('value', (totalcosts));
    document.getElementById('Tcost').setAttribute('value', (totalcosts));
}


