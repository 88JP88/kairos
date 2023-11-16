<?php  require_once '../layout/headerIndex.php';?>

<script src="../script/calendar.js">
/*
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:"es",
    headerToolBar:{
      left:"prev,next,hoy",
      center:"title",
      right:"dayGridMonth"
    }
  });
  calendar.render();
}); */

</script>

<div class="container">
    <div class="col md-8 m-2">
         <div id='calendar'></div>
    </div>
</div>


    
         
     




<div class="m-4  title"><h1>Opciones 1</h1></div>

<div class="container-fluid p-1">

    <div class="table-responsive m-3 m-1 ">
        <table class="table table-ligth table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Column 1</th>
                    <th scope="col">Column 2</th>
                    <th scope="col">Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
