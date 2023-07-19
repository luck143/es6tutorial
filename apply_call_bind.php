<script>
let user1={
    name:"Sourabh",
    age:37,
    hobbies:["gaming","studying"]
}

let user2={
    name:"Divya",
    age:37,
    hobbies:["studying","cooking"]
}

// let print_data=function(){
//     //console.log(this)
//     //console.log(this.name)
//     console.log(this.name+ " | "+this.age+ " | "+this.hobbies)
// }
// print_data.call(user1);
// print_data.call(user2);



let print_data=function(state,country){
    //console.log(this)
    //console.log(this.name)
    console.log(this.name+ " | "+this.age+ " | "+this.hobbies+ " | "+state+ " | "+country)
}


console.log("Borrowing");
print_data.call(user1,"CG","India");
print_data.call(user2,"KA","USA");

console.log("Apply");
print_data.apply(user1,["CG","India"]);

console.log("Bind");
let newfun=print_data.bind(user1,"CG","India");
newfun();
</script>