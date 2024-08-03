// const counters=document.querySelectorAll('.counter');
// const speed=200;

// counters.forEach(counter=>{
//     const updateCount=()=>{
//         const target=+counter.getAttribute('data-target');   //convert string to number by add +;
//         const count=+counter.innerText;

//         const increment=target/speed;

//         if(count<target){
//             counter.innerHTML=count+increment;
//             setTimeout(updateCount,1);
//         }
//         else{
//             count.innerText=target;
//         }

     
//     }
//     updateCount();
// })
// import {CountUp} from "https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.js"

//  function startCount(){
//     const $counters=document.querySelectorAll('.counter'),
//     options={
//         useEasing:true,
//         useGrouping:true,
//         separator:",",
//         decimal:"."
//     };
//     $counters.forEach((item)=>{
//         const value=item.dataset.value;
//         const counter=new CountUp(item,value,options);
//         counter.start();
//     })
//  }

//  new Waypoint({
//     element:document.querySelector('.level'),
//     handler:function(){
//         startCount();                                
//     },
//     offset:'50%'
//  });

import { CountUp } from 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.js'

function countStart(){
  const $counters = document.querySelectorAll(".js-count-up"),
        options = {
          useEasing: true,
          useGrouping: true,
          separator: ",",
          decimal: "."
        };

  $counters.forEach( (item) => {
    const value = item.dataset.value;
    const counter = new CountUp(item, value, options);
    counter.start();
  });
}

new Waypoint({
  element: document.querySelector('.level'),
  handler: function() {
    countStart()
    //this.destroy() //for once
  },
  offset: '50%'
});