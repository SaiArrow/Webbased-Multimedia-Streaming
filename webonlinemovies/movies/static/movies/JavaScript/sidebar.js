// Hide the Sidebar if the screen size is less than 480
$(window).load(function(){
  if($(window).width() <= 480){
    $('#sideNavBar').css({'margin-top':'111px'});
    $('#sideNavBar').hide();
    $('#mainContent').css({'margin-left':'0px'});
  }

  if($('#allCheckbox').attr('checked') === 'checked'){
    $('#all').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#all').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#actionCheckbox').attr('checked') === 'checked'){
    $('#action').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#action').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#adventureCheckbox').attr('checked') === 'checked'){
    $('#adventure').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#adventure').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#comedyCheckbox').attr('checked') === 'checked'){
    $('#comedy').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#comedy').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#crimeCheckbox').attr('checked') === 'checked'){
    $('#crime').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#crime').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#documentaryCheckbox').attr('checked') === 'checked'){
    $('#documentary').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#documentary').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#dramaCheckbox').attr('checked') === 'checked'){
    $('#drama').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#drama').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#familyCheckbox').attr('checked') === 'checked'){
    $('#family').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#family').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#fantasyCheckbox').attr('checked') === 'checked'){
    $('#fantasy').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#fantasy').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#horrorCheckbox').attr('checked') === 'checked'){
    $('#horror').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#horror').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#mysteryCheckbox').attr('checked') === 'checked'){
    $('#mystery').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#mystery').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#romanceCheckbox').attr('checked') === 'checked'){
    $('#romance').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#romance').css({'background-color':'#03a9f4','color':'#000'});
  }

  if($('#thrillerCheckbox').attr('checked') === 'checked'){
    $('#thriller').css({'background-color':'#022e54','color':'#fff'});
  }
  else{
    $('#thriller').css({'background-color':'#03a9f4','color':'#000'});
  }
});

// Toggle the sidebar
$('#menuButton').on('click',function(){
  if($('#sideNavBar').is(':visible')){
    $('#sideNavBar').animate({'width':'0px'},'slow',function(){
      $('#sideNavBar').hide();
    });
    if($(window).width() > 480){
      $('#mainContent').animate({'margin-left':'0px'},'slow');
    }
  }
  else{
      $('#sideNavBar').show();
      $('#sideNavBar').animate({'width':'200px'},'slow');
      
      if($(window).width() > 480){
        $('#mainContent').animate({'margin-left':'200px'},'slow');
      }
  }
});

$('#all').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#allCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#action').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#actionCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#adventure').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#adventureCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#comedy').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#comedyCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#crime').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#crimeCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#documentary').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#documentaryCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#drama').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#dramaCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#family').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#familyCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#fantasy').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#fantasyCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#horror').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#horrorCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#mystery').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#mysteryCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#romance').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#romanceCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#thriller').hover(
  function(){ //inhover
    $(this).css({'background-color':'#004c8c','color':'#fff'});  //Darkblue on hover
  },
  function(){ //outhover
    if($('#thrillerCheckbox').attr('checked') === 'checked'){
      $(this).css({'background-color':'#022e54','color':'#fff'});  //DarkBlue on out of hover and selected
    }
    else{
      $(this).css({'background-color':'#03a9f4','color':'#000'});  //LightBlue on out of hover and not selected
    }
})

$('#allCheckbox').on('click',function(){
  if($('#allCheckbox').attr('checked') === 'checked'){
    $('#allCheckbox').attr('checked',false)
    $('#all').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#allCheckbox').attr('checked',true)
    $('#all').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#actionCheckbox').on('click',function(){
  if($('#actionCheckbox').attr('checked') === 'checked'){
    $('#actionCheckbox').attr('checked',false)
    $('#actionCheckbox').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#actionCheckbox').attr('checked',true)
    $('#adventure').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#adventureCheckbox').on('click',function(){
  if($('#adventureCheckbox').attr('checked') === 'checked'){
    $('#adventureCheckbox').attr('checked',false)
    $('#adventure').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#adventureCheckbox').attr('checked',true)
    $('#adventure').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#comedyCheckbox').on('click',function(){
  if($('#comedyCheckbox').attr('checked') === 'checked'){
    $('#comedyCheckbox').attr('checked',false)
    $('#comedy').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#comedyCheckbox').attr('checked',true)
    $('#comedy').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#crimeCheckbox').on('click',function(){
  if($('#crimeCheckbox').attr('checked') === 'checked'){
    $('#crimeCheckbox').attr('checked',false)
    $('#crime').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#crimeCheckbox').attr('checked',true)
    $('#crime').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#documentaryCheckbox').on('click',function(){
  if($('#documentaryCheckbox').attr('checked') === 'checked'){
    $('#documentaryCheckbox').attr('checked',false)
    $('#documentary').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#documentaryCheckbox').attr('checked',true)
    $('#documentary').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#dramaCheckbox').on('click',function(){
  if($('#dramaCheckbox').attr('checked') === 'checked'){
    $('#dramaCheckbox').attr('checked',false)
    $('#drama').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#dramaCheckbox').attr('checked',true)
    $('#drama').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#familyCheckbox').on('click',function(){
  if($('#familyCheckbox').attr('checked') === 'checked'){
    $('#familyCheckbox').attr('checked',false)
    $('#family').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#familyCheckbox').attr('checked',true)
    $('#family').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#fantasyCheckbox').on('click',function(){
  if($('#fantasyCheckbox').attr('checked') === 'checked'){
    $('#fantasyCheckbox').attr('checked',false)
    $('#fantasy').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#fantasyCheckbox').attr('checked',true)
    $('#fantasy').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#horrorCheckbox').on('click',function(){
  if($('#horrorCheckbox').attr('checked') === 'checked'){
    $('#horrorCheckbox').attr('checked',false)
    $('#horror').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#horrorCheckbox').attr('checked',true)
    $('#horror').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#mysteryCheckbox').on('click',function(){
  if($('#mysteryCheckbox').attr('checked') === 'checked'){
    $('#mysteryCheckbox').attr('checked',false)
    $('#mystery').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#mysteryCheckbox').attr('checked',true)
    $('#mystery').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#romanceCheckbox').on('click',function(){
  if($('#romanceCheckbox').attr('checked') === 'checked'){
    $('#romanceCheckbox').attr('checked',false)
    $('#romance').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#romanceCheckbox').attr('checked',true)
    $('#romance').css({'background-color':'#022e54','color':'#fff'})
  }
})

$('#thrillerCheckbox').on('click',function(){
  if($('#thrillerCheckbox').attr('checked') === 'checked'){
    $('#thrillerCheckbox').attr('checked',false)
    $('#thriller').css({'background-color':'#004c8c','color':'#fff'})
  }
  else{
    $('#thrillerCheckbox').attr('checked',true)
    $('#thriller').css({'background-color':'#022e54','color':'#fff'})
  }
})