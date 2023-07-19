<script>
//"use strict";

//****SET 
//it contains onlu unique values

// let array=[1,1,2,22,3,4,5]
// let obj=new Set(array);
// console.log(obj);
// console.log(obj.size);

// obj.add(55);
// console.log(obj);
// obj.delete(55);
// console.log(obj);

// var obj1={name:"Sourabh"};
// obj.add(obj1);
// console.log(obj);
// //console.log(obj.name);
// // obj.clear();
// // console.log(obj);

// console.log(obj.has(3));
// console.log(obj.has("Sourabh"));

// for(let element of obj){
//     console.log(element);
// }

// obj.forEach((element)=>{
//     console.log(element);
// })

//**** MAP 
//Wont have dup ckeys. will overwrite


// let myMap=new Map([["a1","ajay"],["a2","vikas"]]);
// myMap.set("a2","aaaa");
// console.log(myMap);

// myMap.delete("a2");
// console.log(myMap);

//console.log(myMap.get("a2"));

// for(let [key,val] of myMap){
//     console.log(`Key : ${key} | val : ${val} `);
// }

// myMap.forEach((element)=>{
//     console.log(element);
// })

// myMap.forEach((key,val)=>{
//     console.log(`Key : ${key} | val : ${val} `);
// })


//**** WeakSet 
//can only store objects
//cant iterate 

// let ws=new WeakSet();

// var obj1={name:"Sourabh"};
// //var obj2={prof:"Software Eng"};
// var obj2={name:"Sourabh"};
// const obj3=[
//     {name:"Sourabh",prof:"Software Eng"},
//     {name:"Divya",prof:"Software Eng"}
// ];

// ws.add(obj1);
// ws.add(obj2);
// ws.add(obj3);
// console.log(ws);


//**** WeakMAP
//can only store objects


let wm=new WeakMap();
console.log(wm);

var obj1={name:"Sourabh"};
var obj2={prof:"Software Eng"};
var obj3=[
    {name:"Sourabh",prof:"Software Eng"},
    {name:"Divya",prof:"Software Eng"}
];

wm.set(obj1,"Private");
wm.set(obj2);
wm.set(obj3);
console.log(wm);

</script>