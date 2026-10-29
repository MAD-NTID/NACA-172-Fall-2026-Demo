let myName = "Kemoy";
let age = 20;

//simple if with only 1 control flow
if(myName === "Kemoy"){
    console.log("Welcome " + myName);
}



//if with compound control flow
//this check if the name is kemoy and the age is greater
//than or equals to 20
if(myName == "Kemoy" && age >=20){
    console.log("Welcome " + myName);
    console.log("You are " + age);
}


//a function that takes a name and greet them
function greeter(name){
    console.log("Hello "+ name+ " \nWelcome!!!!!");
}

//use the greeter function we create with an actual name
greeter("Adam");

//second counters
let second = 0;
let hours = 0;
let minutes = 0;
//find the id we want to modify
const secondTarget = document.getElementById('secondsTarget');


//repeat this using interval (1000ms = 1seconds)
setInterval(() => {
    second++;//update the second
    hours = Math.floor(second/3600);
    minutes = Math.floor((second/60) % 60)
    console.log(minutes);
    //right now this only show seconds.. your job
    //make it show minutes and hours

    secondTarget.textContent = "";
    if(hours > 0){
        secondTarget.textContent = hours + " Hour(s) ";
    }

    if(minutes > 0) {
        secondTarget.textContent += minutes + " Minutes ";

    }
    secondTarget.textContent+= (second % 60)  + " seconds"; //show it in the html

}, 1);