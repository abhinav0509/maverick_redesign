const counters=document.querySelectorAll('.counter');
const speed=200;

counters.forEach(counter=>{
    const updateCount=()=>{
        const target=+counter.getAttribute('data-target');   //convert string to number by add +;
        const count=+counter.innerText;

        const increment=target/speed;

        if(count<target){
            counter.innerHTML=count+increment;
            setTimeout(updateCount,1);
        }
        else{
            count.innerText=target;
        }

     
    }
    updateCount();
})