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
    if (document.getElementById("shirt").checked){
        totalcost += 5;
    }
    if (document.getElementById("jeans").checked){
        totalcost += 7;
    }
    if (document.getElementById("suit").checked){
        totalcost += 7;
    }
    if (document.getElementById("bedsheet").checked){
        totalcost += 4;
    }

    document.getElementById("cost").value = totalcost * weight;
}