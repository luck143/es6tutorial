<script>
    //all objects, array etc all elements of javascripts are prototype of objects
// const obj=new Object({
//     name:"Sourabh"
// });

// const obj={
//     name:"Sourabh"
// };

//console.log(obj);

// const obj2={
//     roll:143
// };

// const obj2={
//     ...obj,
//     roll:143
// };

const obj={
    roll:142,
    name:"Sourabh",
    getName:function(){
        return this.name
    },
    getRoll:function(){
        return this.roll
    }
};
console.log(obj);

const obj2={
    //roll:143,
    name:"Divya",
    __proto__:obj
};
console.log(obj2);
console.log(obj2.name);
console.log(obj2.getName());
console.log("Roll : " + obj2.getRoll());
console.log("Roll : " + obj.getRoll());


const obj3={
    name:"Dhruv",
    __proto__:obj2
};
console.log(obj3);

</script>