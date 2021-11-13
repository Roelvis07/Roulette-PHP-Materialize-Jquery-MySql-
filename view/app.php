<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/material-components-web.css"/>
  <link rel="stylesheet" type="text/css" href="css/dataTables.material.css"/> 
</head>
<body>
  
  <!--boton flotante-->
  <div class="row">
    <div class="col s6">
      <div class="action-btn-wrapper">
        <div class="my-custom-btn horizontal">
          <a id="start_btn" class="btn-floating btn-large waves-effect waves-light orange pulse">
            <i class="material-icons left">play_arrow</i>
          </a>
        </div>
      </div>
    </div>
    <div class="col s6">
      <div class="fixed-action-btn toolbar" id="menu">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">account_box</i>
        </a>        
        <ul>
          <li><a class="btn-floating" href="#modal1" id="new_user"><i class="material-icons">account_circle</i></a></li>
          <li><a class="btn-floating darken-1" href="#modal2" id="list_user" ><i class="material-icons">list</i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="the_wheel" align="center" valign="center">
    <div class="wheel">
      <canvas id="canvas" width="434" height="434">
        <p style="color: white" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
      </canvas>
    </div>
  </div>

  <!-- Modal Structure -->
  <div class="tap-target" data-target="menu">
    <div class="tap-target-content">
      <h5 id="title_tap">Title</h5>
      <p id="body_tap">A bunch of text</p>
    </div>
  </div>

  <!-- Modal Structure bottom add customer-->
  <div id="modal1" class="modal bottom-sheet modal-content modal-fixed-footer">
      <div class="modal-content collection white">
        <h3 class="header">Add player</h3>
          <div class="row">          
            <div class="row">
            <input type="hidden" name="id" value="<?php echo $customer->id; ?>" />
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="full_name" name="full_name" type="text" class="validate" required="" aria-required="true">
                <label for="full_name">Full Name</label>
                <span class="helper-text" data-error="Enter full name correct" data-success="Full name correct"></span>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="phone" name="phone" type="text" class="validate" required="" aria-required="true" pattern="^(\(\d{3}\) |\d{3}-)\d{3}-\d{4}$">
                <label for="phone">Phone</label>
                <span class="helper-text" data-error="The correct phone have 10 charanters" data-success="Phone correct"></span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="email" class="validate" required="" aria-required="true">
                <label for="email">Email</label>
                <span class="helper-text" data-error="Enter email correct" data-success="Email correct"></span>
              </div>
            </div>          
          </div>
      </div>
      <div class="modal-footer">
        <a class="modal-close waves-effect waves-green btn red lighten-2" id="submit">Submit 
          <i class="material-icons right">send</i></a>
      </div>
  </div>

  <!-- Modal Structure bottom add customer-->
  <div id="modal2" class="modal bottom-sheet modal-content">
    <form class="col s12">
      <div class="modal-content collection white">
        <table id="example" class="mdl-data-table" style="width:100%">
          <thead>
            <tr>
              <th data-field="Full">Full name</th>
              <th data-field="Email">Email</th>
              <th data-field="Phone" style="font-weight: bold; text-align: center;">Phone</th>
              <th data-field="Rewards" style="font-weight: bold; text-align: center;">Rewards</th>
              <th data-field="Actions" width=20 >Actions</th>
              <th data-field="Activate" width=20 >Activate</th>
              <th data-field="date_create">date_create</th>
            </tr>
          </thead>          
          <tfoot>
              <tr>
                <th data-field="Full">Full name</th>
                <th data-field="Email">Email</th>
                <th data-field="Phone">Phone</th>
                <th data-field="Rewards">Rewards</th>
                <th data-field="Activate" width=20 >Actions</th>
                <th data-field="Activate" width=20 >Activate</th>
                <th data-field="date_create">date_create</th>
              </tr>
          </tfoot>
        </table>
      </div>
    </form>
  </div>
  
  <!-- Modal Structure bottom edit customer-->
  <div id="modal3" class="modal bottom-sheet modal-content modal-fixed-footer">
      <div class="modal-content collection white">
        <h3 class="header">Edit player</h3>
          <div class="row">          
            <div class="row">
            <input type="hidden" name="id" value="<?php echo $customer->id; ?>" />
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="full_name_edit" name="full_name" type="text" class="validate" required="" aria-required="true">
                <label for="full_name_edit">Full Name</label>
                <span class="helper-text" data-error="Enter full name correct" data-success="Full name correct"></span>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="phone_edit" name="phone" type="text" class="validate" required="" aria-required="true" pattern="^(\(\d{3}\) |\d{3}-)\d{3}-\d{4}$">
                <label for="phone_edit">Phone</label>
                <span class="helper-text" data-error="The correct phone have 10 charanters and another definition" data-success="Phone correct"></span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email_edit" name="email" type="email" class="validate" required="" aria-required="true">
                <label for="email_edit">Email</label>
                <span class="helper-text" data-error="Enter email correct" data-success="Email correct"></span>
              </div>
            </div>          
          </div>
      </div>
      <div class="modal-footer">
        <a class="modal-close waves-effect waves-green btn red lighten-2" id="submit_edit">Submit 
          <i class="material-icons right">send</i></a>
      </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="js/materialize.js"></script>

  <script type="text/javascript" src="js/Winwheel.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.material.js"></script>

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  
<script>
  
  $(document).ready(function(){  
      
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn', '.modal');
      var elems1 = document.querySelectorAll('.tap-target');
      var instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: true
      });
      var instances1 = M.TapTarget.init(elems1, options);
    });
   
    // Or with jQuery
    $('.tap-target').tapTarget(); 
        
    $('.fixed-action-btn').floatingActionButton({
      toolbarEnabled: true
    });
    
    $('#phone').mask("(999) 999-9999");
    $('#phone_edit').mask("(999) 999-9999");
    
    // Validate full_name
    const full_name = document.getElementById('full_name');
    let full_nameError = false;
    full_name.addEventListener('blur', ()=>{
       let regex =/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/;
       let s = full_name.value;
       if(regex.test(s))
        {  full_nameError = true;  }
    })
    // Validate Email
    const email = document.getElementById('email');
    let emailError = false;
    email.addEventListener('blur', ()=>{
       let regex =/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
       let s = email.value;
       if(regex.test(s))
        {  emailError = true;  }
    })

    $('#submit').click(function (e) {
      
      if(emailError && full_nameError && $('#phone').val() != '' && $('#phone').val().length == 14){
       
        arr = { full_name : $('#full_name').val(),  phone: $('#phone').val(), email: $('#email').val() };
        $.post("?c=customer&a=save", arr).done(function(data){
            if(data=="OK"){
              location.reload();
            }else{
              alert("Somethig wrong, check you data");
            }
        });
      }
      else{
        alert("You must refill all fields correctly!!!");
        return false;
      }
    });

    function load_Table(){
      
     var table = $('#example').DataTable({
          info: false,
          autoWidth: true,
          scrollY: '50vh',
          scrollCollapse: true,
          paging:         false,
          "processing": true,
          "iDisplayLength": -1,
          "aaSorting": [[ 6, "desc" ]],
          ajax: "?c=customer&a=list",
          dataType: 'json',
          "columns" : [
            {'data': 'name'},
            {'data': 'email'},
            {'data': 'phone', "sClass": "center"},
            {'data': 'award', "sClass": "center"},
            {
              sortable: false,
              "render": function ( data, type, full, meta ) {
                
                     return "<div class='wrapper text-center'><div class='btn-group'>"+
                            "<a id='"+ full.id_customer +"' class='btn btn-info btn-sm edit_row' title='Editar a: "+ full.name.toUpperCase() +"' style='margin-right: 15px'><i class='material-icons'>edit</i></a>"+
                            "<a id='"+full.id_customer+"' title='Eliminar a: "+ full.name.toUpperCase() +"' class='btn btn-danger btn-sm btnBorrar' ><i class='material-icons'>delete</i></a>"+
                            "</div></div>";
                 }
            },
            {
              sortable: false,
              "render": function ( data, type, full, meta ) {
                
                     var ret = "<div class='switch' id='"+  full.id_customer +"'>"+
                                "<label>"+
                                  "Off";
                                  
                        if(full.active != 0)
                            ret += "<input type='checkbox' checked>";
                        else
                            ret += "<input type='checkbox' >";
                          
                          ret += "<span class='lever'></span>"+
                                      "On"+
                                    "</label>"+
                                  "</div>";

                    return ret;
                 }
            },
            {
              'data': 'date_create',
              "visible": false,
              "searchable": false
            }
          ],
          select: {
              style:    'os',
              selector: 'td:first-child'
          },
          destroy: true
      } );

      return table;
    }

    $( "#list_user" ).on( "click", function() {
      
      var table = load_Table();
      
      $('#example tbody').on('mousedown', '.btnBorrar', function (e) {
        if (confirm('Are you sure you want to delete this customer?')){
          $.post("?c=customer&a=delete&id="+$(this).attr('id')+"");
          table.row($(this).closest("tr")).remove().draw();
        }
        else {
          return false;
        }          
      });

      $('#example tbody').on('mousedown', '.edit_row', function (e) {
        
        var $row = $(this).closest("tr");
        var $tds = $row.find("td");
        
        $("#full_name_edit").val($($tds[0]).text());
        $("label[for='full_name_edit']").addClass('active');

        $("#email_edit").val($($tds[1]).text());
        $("label[for='email_edit']").addClass('active');
        
        $("#phone_edit").val($($tds[2]).text());
        $("label[for='phone_edit']").addClass('active');

        $('#modal3').modal();
        $('#modal3').modal('open');

        var id_customer = $($tds[4]).find("a").attr('id');

        let regex1 =/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/;
        if(regex1.test($("#full_name_edit").val()))
          {  full_nameError = true;  }
          
        let regex2 =/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        if(regex2.test($("#email_edit").val()))
          {  emailError = true;  }

        $('#submit_edit').click(function (e) {

          if(emailError && full_nameError && $('#phone_edit').val() != '' && $('#phone_edit').val().length == 14){
            
            arr = { userId: id_customer, full_name : $('#full_name_edit').val(),  phone: $('#phone_edit').val(), email: $('#email_edit').val() };
            $.post("?c=customer&a=edit", arr).done(function(data){
                if(data=="OK"){
                  
                  table.DataTable().ajax.reload();

                }else{
                  alert("Somethig wrong, check you data");
                }
            });/**/
          }
          else{
            alert("You must refill all fields correctly!!!");
            return false;
          }
        });
        
      });

      $('#example tbody').on('change', '.switch', function (e) {
        let id = $(this).attr('id');
        let active = 0;
        if($(this).find('input').prop('checked')){
          $(this).find('input').removeAttr('checked');
          active = 1;
        }

        arr = { userId : id,  activate: active };
        
        $.post("?c=customer&a=activateCustomer", arr);
          
      });
    });


    $('#start_btn').click(function(e){
      startSpin()
    })

    $('#new_user').click(function(e){
      $('#modal1').modal();
      $('#modal1').modal('open');
    })
    
    $('#list_user').click(function(e){
      $('#modal2').modal();
      $('#modal2').modal('open');
    })

    $('#new_award').click(function(e){
      $('#modal3').modal();
      $('#modal3').modal('open');
    })   

    // Create new wheel object specifying the parameters at creation time.
    let theWheel = new Winwheel({
      'outerRadius'     : 212,        // Set outer radius so wheel fits inside the background.
      'innerRadius'     : 75,         // Make wheel hollow so segments don't go all way to center.
      'textFontSize'    : 24,         // Set default font size for the segments.
      'textOrientation' : 'vertical', // Make text vertial so goes down from the outside of wheel.
      'textAlignment'   : 'outer',    // Align text to outside of wheel.
      'numSegments'     : 24,         // Specify number of segments.
      'segments'        :             // Define segments including colour and text.
      [                               // font size and test colour overridden on backrupt segments.
        {'fillStyle' : '#ee1c24', 'text' : '300'},
        {'fillStyle' : '#3cb878', 'text' : '450'},
        {'fillStyle' : '#f6989d', 'text' : '600'},
        {'fillStyle' : '#00aef0', 'text' : '750'},
        {'fillStyle' : '#f26522', 'text' : '500'},
        {'fillStyle' : '#000000', 'text' : 'BANKRUPT', 'textFontSize' : 16, 'textFillStyle' : '#ffffff'},
        {'fillStyle' : '#e70697', 'text' : '3000'},
        {'fillStyle' : '#fff200', 'text' : '600'},
        {'fillStyle' : '#f6989d', 'text' : '700'},
        {'fillStyle' : '#ee1c24', 'text' : '350'},
        {'fillStyle' : '#3cb878', 'text' : '500'},
        {'fillStyle' : '#f26522', 'text' : '800'},
        {'fillStyle' : '#a186be', 'text' : '300'},
        {'fillStyle' : '#fff200', 'text' : '400'},
        {'fillStyle' : '#00aef0', 'text' : '650'},
        {'fillStyle' : '#ee1c24', 'text' : '1000'},
        {'fillStyle' : '#f6989d', 'text' : '500'},
        {'fillStyle' : '#f26522', 'text' : '400'},
        {'fillStyle' : '#3cb878', 'text' : '900'},
        {'fillStyle' : '#000000', 'text' : 'BANKRUPT', 'textFontSize' : 16, 'textFillStyle' : '#ffffff'},
        {'fillStyle' : '#a186be', 'text' : '600'},
        {'fillStyle' : '#fff200', 'text' : '700'},
        {'fillStyle' : '#00aef0', 'text' : '800'},
        {'fillStyle' : '#ffffff', 'text' : 'LOOSE TURN', 'textFontSize' : 12}
      ],
      'animation' :           // Specify the animation to use.
      {
          'type'     : 'spinToStop',
          'duration' : 10,    // Duration in seconds.
          'spins'    : 3,     // Default number of complete spins.
          'callbackFinished' : alertPrize,
          'callbackSound'    : playSound,   // Function to call when the tick sound is to be triggered.
          'soundTrigger'     : 'pin'        // Specify pins are to trigger the sound, the other option is 'segment'.
      },
      'pins' :				// Turn pins on.
      {
          'number'     : 24,
          'fillStyle'  : 'silver',
          'outerRadius': 4,
      }
    });

    // Loads the tick audio sound in to an audio object.
    let audio = new Audio('assets/tick.mp3');

    // This function is called when the sound is to be played.
    function playSound()
    {
      // Stop and rewind the sound if it already happens to be playing.
      audio.pause();
      audio.currentTime = 0;

      // Play the sound.
      audio.play();
    }

    // Vars used by the code in this page to do power controls.
    let wheelPower    = 3;
    let wheelSpinning = false;

    // -------------------------------------------------------
    // Click handler for spin button.
    // -------------------------------------------------------
    function startSpin()
    {
      var cant = $.getJSON("?c=customer&a=count_active");
      cant.always(function() {

        if(cant.responseText > 0){

          // Ensure that spinning can't be clicked again while already running.
          theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
          if (wheelSpinning == false) {
              // Based on the power level selected adjust the number of spins for the wheel, the more times is has
              // to rotate with the duration of the animation the quicker the wheel spins.
              if (wheelPower == 1) {
                  theWheel.animation.spins = 3;
              } else if (wheelPower == 2) {
                  theWheel.animation.spins = 6;
              } else if (wheelPower == 3) {
                  theWheel.animation.spins = 10;
              }

              // Disable the spin button so can't click again while wheel is spinning.
              let start_btn     = document.getElementById("start_btn");
              start_btn.classList.remove("pulse");
              start_btn.classList.add("disabled");
              

              // Begin the spin animation by calling startAnimation on the wheel object.
              theWheel.startAnimation();

              // Set to true so that power can't be changed and spin button re-enabled during
              // the current animation. The user will have to reset before spinning again.
              wheelSpinning = true;
          }
        }else{
          alert("There must be at least one active client to play");
        }
          
      });
      
    }

    // -------------------------------------------------------
    // Function for reset button.
    // -------------------------------------------------------
    function resetWheel()
    {
      theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
      
      theWheel.draw();                // Call draw to render changes to the wheel.

      let start_btn     = document.getElementById("start_btn");
      start_btn.classList.remove("disabled");
      start_btn.classList.add("pulse");
      
      wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
    }

    // -------------------------------------------------------
    // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
    // -------------------------------------------------------
    function alertPrize(indicatedSegment)
    { 
      resetWheel();     
      $(document).ready(function(){
        
        if (indicatedSegment.text == 'LOOSE TURN') {
          document.getElementById("title_tap").innerHTML = "Sorry!!!!";
          document.getElementById("body_tap").innerHTML = 'Sorry but you loose a turn.';
          $('.tap-target').tapTarget('open');

          let audioBu = new Audio('assets/buuu.mp3');

          audioBu.pause();
          audioBu.currentTime = 0;

          // Play the sound.
          audioBu.play();

        } else if (indicatedSegment.text == 'BANKRUPT') {
          document.getElementById("title_tap").innerHTML = "Sorry!!!!";
          document.getElementById("body_tap").innerHTML = 'Oh no, you have gone BANKRUPT!';
          $('.tap-target').tapTarget('open');

          let audioBu = new Audio('assets/buuu.mp3');

          audioBu.pause();
          audioBu.currentTime = 0;

          // Play the sound.
          audioBu.play();

        } else {
          document.getElementById("title_tap").innerHTML = "Congratulations!!!!";
          document.getElementById("body_tap").innerHTML = "You have won " + indicatedSegment.text;
          $('.tap-target').tapTarget('open');
         
          let audioHurra = new Audio('assets/hurra.mp3');

          audioHurra.pause();
          audioHurra.currentTime = 0;

          // Play the sound.
          audioHurra.play();
        }

        $.post("?c=customer&a=award", { award : indicatedSegment.text});
        //actualizar la tabla cuando se lleva a cabo el premio
        if ( $.fn.DataTable.isDataTable( '#example' ) ) {
          $('#example').DataTable().ajax.reload();
        }
        
      });
    }
  });
  </script>
  

  </body>
</html>
