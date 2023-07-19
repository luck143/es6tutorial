<script>
const companies=[
    {name:"Google",category:"Product Based",start:1981,end:2024},
    {name:"Amazon",category:"Product Based",start:1992,end:2008},
    {name:"paytm",category:"Product Based",start:1999,end:2007},
    {name:"Coforge",category:"Service Based",start:1989,end:2010},
    {name:"Mindtree",category:"Service Based",start:1989,end:2010},
];

const ages=[1,2,33,12,20,16,5,54,21,44,13,45,25,64,32];

// console.log("For Loop");
// for(let i=0;i<companies.length;i++){
//     console.log(companies[i])
// }


// console.log("For EachLoop");
// companies.forEach(function(company,index){
//     console.log(index +" | "+company.name+" | "+company.start)
// });


//console.log("For EachLoop Arrow");
// companies.forEach((company,index)=>{
//     console.log(index +" | "+company.name+" | "+company.start)
// });


// console.log("For EachLoop Arrow One Liner");
// companies.forEach((company,index)=>(console.log(index +" | "+company.name+" | "+company.start)));


// console.log("Filter Standard");
// for(let i=0;i<ages.length;i++){
//     if(ages[i]<=20){
//         console.log(ages[i]);
//     }    
// }


console.log("Filter");
// const newcompanies=ages.filter(function(x){
//     if(x<10){
//        return true;
//     }
// });


//const newcompanies=ages.filter((x)=>(x<=10))
//const newcompanies=ages.filter( x => (x<=10) )
//const newcompanies=ages.filter( x => x<=10 )


// const newcompanies=companies.filter(function(x){
//     if(x.category === "Service Based"){
//        return true;
//     }
// });

//const newcompanies=companies.filter( (x) =>  x.category === "Service Based" );
//var newcompanies=companies.filter( x =>  x.category === "Service Based" );
//console.log(newcompanies);

//Map Function
// companies.map(function(company,index){
//     console.log(index +" | "+company.name+" | "+company.start)
// });

// companies.map((company,index)=>{
//     console.log(index +" | "+company.name+" | "+company.start)
// });

// var dummy=companies.map((company,index)=>{
//     //return `${index} | ${company.name} | ${company.start}`;
//     return `${company.name} | ${company.category}`;
// });
// console.log(dummy);


//******* sort */
// var sorted=companies.sort(function(c1,c2){
//     if(c1.start>c2.start){
//         return 1;
//     }
//     else{
//         return -1;
//     }
// });
//var sorted=companies.sort( (c1,c2) => c1.start > c2.start ? 1 :-1 );
// console.log(sorted)

// var sorted=companies.sort(function(c1,c2){
//     if(c1.start<c2.start){
//         return 1;
//     }
//     else{
//         return -1;
//     }
// });

//var sorted=companies.sort( (c1,c2) => c1.start < c2.start ? 1 :-1 );
//console.log(sorted)

//var sorted=ages.sort( (a,b) => a < b ? 1 :-1 );
//var sorted=ages.sort( (a,b) => b-a );

//var sorted=ages.sort( (a,b) => a > b ? 1 :-1 );
// var sorted=ages.sort( (a,b) => a-b );
// console.log(sorted)


//******* reduce */
// total=0;
// for(i=0;i<ages.length;i++)
// {
//     total+=ages[i]
// }
// console.log(total)

// var sumage=ages.reduce(function(total,age){
//     return total+age;
// },0)

var sumage=ages.reduce((total,age) => total+age,0)

console.log(sumage)
</script>