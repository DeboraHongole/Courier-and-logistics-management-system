$(function(){
    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; 
    //var url = '{{ route("jovial") }}';
    // Holds the event object when editing an event
    $('#color').colorpicker(); // Colopicker
    $('#time').timepicker({
        minuteStep: 5,
        showInputs: false,
        disableFocus: true,
        showMeridian: false
    });  // Timepicker
    // Fullcalendar
    $('#calendar').fullCalendar({
        timeFormat: 'H(:mm)',
        header: {
            left: 'prev, next, today',
            center: 'title',
            right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database
           events: '/datacollector/users/inforJson',
        // Handle Day Click
       
       
       
    });
    // Prepares the modal window according to data passed
    
   
   
   
   
   
});