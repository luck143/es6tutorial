<script>
//https://www.youtube.com/watch?v=bWaucYA1YRI&list=PL_HlKez9XCSM0bs8P7LtCTGh4rghAD2im&index=2&ab_channel=TechnicalSuneja
const datas=[
        {name:"Sourabh",prof:"Software Eng"},
        {name:"Divya",prof:"Software Eng"}
    ];

function getDatas()
{
    //console.log(datas);
    setTimeout(() => {
        let output="Student List : <br> ";
        datas.forEach((data,index)=>
        {
            console.log(index);
            console.log(data);
            //console.log("Row "+index+" Name: "+data.name);
            //output+='<li>'+index+') Name : '+data.name+'</li>';
            output+=`<li>${index}) Name : ${data.name}</li>`;            
        })
        document.body.innerHTML=output;
    }, 100);
}
getDatas();

// function createdata(newdata)
// {
//     setTimeout(() => {
//         datas.push(newdata);
//     }, 2000);
//     getDatas();
// }
// createdata({name:"Diya",prof:"Student"});


//********* Callback Example 
function createdata(newdata,callbacke)
{
    setTimeout(() => {
        datas.push(newdata);
        callbacke();
    }, 1000);    
}
createdata({name:"Diya",prof:"Student"},getDatas);


//********** Promise example 
// function createdata(newdata)
// {
//     return new Promise((resolve,reject)=>{
//         setTimeout(() => {
//             datas.push(newdata);
//             let error=false;
//             //let error=true;
//             if(!error)
//             {
//                 resolve();
//             }
//             else
//             {
//                 reject("Something wrong");
//             }
//         }, 100);    
//     })   
// }
// createdata({name:"Diya",prof:"Student",age:45},getDatas)
// .then(getDatas)
// .catch(e=>console.log(e));


//********** Promise Async 
// function createdata(newdata)
// {
//     return new Promise((resolve,reject)=>{
//         setTimeout(() => {
//             datas.push(newdata);
//             let error=false;
//             //let error=true;
//             if(!error)
//             {
//                 resolve();
//             }
//             else
//             {
//                 reject("Something wrong");
//             }
//         }, 100);    
//     })   
// }

// async function start(){
//     await createdata({name:"Diya",prof:"Student",age:45})
//     getDatas();
// }
// start();
</script>