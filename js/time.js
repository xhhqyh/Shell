function getTime(){  
    str = "当前时间为："  
    var p = document.getElementById("timeP");  
    time =  new Date();  
    year = time.getFullYear();  
    month = time.getMonth() + 1;  
    day = time.getDate();  
    hour = time.getHours();  
    minutes = time.getMinutes();  
    seconds = time.getSeconds();  
    str = str + year +"-"+ month +"-"+ day + " " +hour+":"+minutes+":"+seconds;  
      
    p.innerText = str;  
  
    setTimeout(getTime,1000);  
}  
  
  
window.onload = function(){  
    getTime();  
} 