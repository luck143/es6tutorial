<script>
//Rest & Spread Examples for Arrays and Objects

// //function add(a,b,c,...rest)
// function add(...rest)
// {
//     // console.log("Sum :"+a+b+c);
//     // //console.log(arguments);
//     // console.log(a+b+c);    
//     console.log(rest);
//     console.log(rest[1]);
//     console.log(...rest);
// }

// add(1,2,3,4,5,6,7,8);

// var nums=[1,2,3,4,5];
// add(...nums);
// function add(a,b,c,d)
// {  
//     console.log("Sum :"+a+b+c);
//     //console.log(rest);
// }

var studs={
    name:"ajay",
    age:37,
    hobbies:["gaming","studying"]
}
//var age=studs.age;
//var {age}=studs;
//let {age}=studs;
//const {age}=studs;
//console.log("Age : "+age);
// var {hobbies}=studs;
// console.log("hobbies : "+hobbies);
// var {age,name,hobbies}=studs;
// console.log("Age : "+age+ "| Name : "+name);
// console.log("Age : "+age+ "| Name : "+name+ "| hobbies : "+hobbies);

// var {age,...oth}=studs;
// console.log("age : "+age);
// console.log(oth);
// console.log(oth['name']);
// console.log(oth['hobbies']);
// console.log(oth['hobbies'][1]);

var {...oth}=studs;

console.log(oth);
console.log(oth['name']);
console.log(oth['hobbies']);
console.log(oth['hobbies'][1]);


varnewstud={
    ...studs,
    age:55
}
console.log(varnewstud);

</script>