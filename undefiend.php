<script>
    let user1={
        name:"Sourabh",
        age:37,
        hobbies:["gaming","studying"]
    }


    if(user1.state===undefined)
    {
        console.log("var is undefined")
    }
    else
    {
        console.log("var is defined")
    }

    var temp=(user1.names!=undefined || user1.names!=null )?user1.names:"NA";
    console.log("temp is : "+temp);
    console.log(temp)
</script>