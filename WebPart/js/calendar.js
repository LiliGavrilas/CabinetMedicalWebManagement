
var today = new Date();
var day = today.getDay() ;  //ziua saptamanii 0 pana la 6
var currentYear = today.getFullYear();
var currentMonth = today.getMonth();
var currentDay = today.getDate() - day; //ziua lunii 0 pana la 31 // Setam ziua curent la prima zi a saptamanii
var currentStartHour = 8;
var number_hours_per_row = 5


var mounth_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var week_names = [ 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday'];

let monthLeftBtn = document.getElementById("month_leftBtn");
let monthRightBtn = document.getElementById("month_rightBtn");
if(monthLeftBtn && monthRightBtn)
{
    monthLeftBtn.addEventListener("click", function() {change_curent_month(-1)});
    monthRightBtn.addEventListener("click",  function() {change_curent_month(1)});
}

let weekLeftBtn = document.getElementById("week_leftBtn");
let weekRightBtn = document.getElementById("week_rightBtn");
if(weekLeftBtn || weekRightBtn)
{
    weekLeftBtn.addEventListener("click", function() {change_curent_week(-1)});
    weekRightBtn.addEventListener("click",  function() {change_curent_week(1)});
}


let hoursUpBtn = document.getElementById("hours_upBtn");
let hoursDownBtn = document.getElementById("hours_downBtn");
if(hoursUpBtn && hoursDownBtn)
{
    hoursUpBtn.addEventListener("click", function() {change_curent_hours(-1)});
    hoursDownBtn.addEventListener("click",  function() {change_curent_hours(1)});
}

let dayLeftBtn = document.getElementById("day_leftBtn");
let dayRightBtn = document.getElementById("day_rightBtn");
if(dayLeftBtn && dayRightBtn)
{
    day_leftBtn.addEventListener("click", function() {change_curent_day(-1)});
    day_rightBtn.addEventListener("click",  function() {change_curent_day(1)});
}

function change_curent_month(direction)
{
    currentMonth +=direction;
    if (direction > 0)
    {
        currentDay = 3 // mergem spre stanga alegem o zi posibila din prima saptamana
    }
    else
    {
        currentDay = 24 // mergem spre dreapta alegem o zi posibila din ultima saptamana
    }

    if(currentMonth  >11)
    {
        currentYear++;
        currentMonth = 0;
    }

    if(currentMonth < 0)
    {
        currentYear--;
        currentMonth = 11;
    }
    let current_day = new Date(currentYear , currentMonth , currentDay , 0 , 0, 0 ,0 );

    day = current_day.getDay() || 7;
    currentDay = current_day.getDate() - day;
    currentStartHour = 8;
    print_schedule();
}

function change_curent_week(direction)
{
    
    let current_day = new Date(currentYear , currentMonth , currentDay , 0 , 0, 0 ,0 );
    let new_start_day = new Date(current_day.getTime() + direction * 7 * 24 * 60 * 60 * 1000);

    currentYear = new_start_day.getFullYear();
    currentMonth = new_start_day.getMonth();
    currentDay = new_start_day.getDate();
    currentStartHour = 8;
    // console.log("Change current week");
    print_schedule();
}

function change_curent_day(direction)
{
    
    let current_day = new Date(currentYear , currentMonth , currentDay , 0 , 0, 0 ,0 );
    let new_start_day = new Date(current_day.getTime() + direction * 1 * 24 * 60 * 60 * 1000);

    currentYear = new_start_day.getFullYear();
    currentMonth = new_start_day.getMonth();
    currentDay = new_start_day.getDate();
    currentStartHour = 8;
    print_schedule();
}




function change_curent_hours(direction)
{
    
    currentStartHour += direction * number_hours_per_row;
    
    if (currentStartHour > 23-number_hours_per_row) 
        currentStartHour = 8
    if (currentStartHour < number_hours_per_row) 
        currentStartHour =  23-number_hours_per_row 
    console.log("new current star hour=" + currentStartHour);    
    print_schedule();
}



function print_schedule()
{
    console.log("Y=" + currentYear + " M=" + currentMonth + " D=" + currentDay + " H=" + currentStartHour)
    let current_day = new Date(currentYear , currentMonth , currentDay , 0 , 0, 0 ,0 );
    //setam luna/anul
    document.getElementById("selected_month").innerHTML = mounth_names[ currentMonth].toUpperCase() + " " + currentYear;

    //setam zile saptamanii
    for(var i = 0; i < 7; i++)
    {
        
        var loopDate =  new Date(current_day.getTime() + i * 24 * 60 * 60 * 1000);
        //setam zile saptamanii
        document.getElementById("day_" + i + "_schedule").innerHTML = week_names[ loopDate.getDay()].substring(0, 3).toUpperCase() + " " + ("0" + (loopDate.getDate())).slice(-2) + "/" + ("0" + (loopDate.getMonth() + 1)).slice(-2);
        
        for(var j = 0; j < number_hours_per_row; j++)
        {
            //calendar_row4_col5 
            var current_button = document.getElementById("calendar_row" +(parseInt(i)+1) + "_col" + (parseInt(j)+1 ))
            current_button.innerHTML = (currentStartHour + j + 1) + ":00";
            //current_button.setAttribute("class" , "schedule__calendar__inside__hours_btn__bussy");

        }
    }
}










/*
 LeftBtn.addEventListener("mouseenter", setGreyBackground);
 LeftBtn.addEventListener("mouseleave", setWhiteBackground);
 rightBtn.addEventListener("mouseenter", setGreyBackground);
 rightBtn.addEventListener("mouseleave", setWhiteBackground);

 rightBtn.addEventListener("click", goTOnextMount);




function setGreyBackground(e){
    e.target.style.background= 'grey';
}
function setWhiteBackground(e){
    e.target.style.background= 'white';
}


function goTOnextMount()
{
    
    let months = document.getElementsByClassName("schedul__calendar__months");

    for(let i = 0;i < months.length; i++)
    {
        months[i].style.transform = 'translateX(-${(currentMonthIndex + 1) *100}%)';
    }
    currentMonthIndex++;
}
*/