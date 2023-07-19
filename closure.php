<script>
//closure


//Example 1 
// var sum=function(a){
//     console.log("inside Function Sum");
//     console.log("Recieved Param : " + a);
//     var c=10;
//     return function(b){
//         console.log("Value of a : " + a);
//         console.log("Value of b : " + b);
//         console.log("Value of c : " + c);
//         return a+b+c;
//     }
// }

// var store =sum(2);
// console.log("store function :  " + store);
// console.log("Sum 1 : "+store(1));
// console.log("Sum 1 : "+store(5));

var sum=function(a,b,c){
    return {
        getSum2:function(){
            return a+b;
        },
        getSum3:function(){
            return a+b+c;
        }
    }
}
var store =sum(1,2,3);
console.log("Sum of 2 : "+store.getSum2());
console.log("Sum of 3 : "+store.getSum3());
</script>
