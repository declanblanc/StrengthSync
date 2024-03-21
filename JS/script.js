let smithWeight;

document.getElementById("myButton").onclick = function () {
  smithWeight = document.getElementById("weight").value;
  console.log(smithWeight);
  document.getElementById("weightText").innerHTML = smithWeight;
};
