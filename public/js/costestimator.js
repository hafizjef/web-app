function calculate(){
    var totalcost = 2.00;
    var weight = document.getElementById("weight").value;
    if (document.getElementById("dryclean").checked){
        totalcost += 5;
    }
    if (document.getElementById("wash").checked){
        totalcost += 3;
    }
    if (document.getElementById("iron").checked){
        totalcost += 4;
    }

    document.getElementById("cost").value = totalcost * weight;
}