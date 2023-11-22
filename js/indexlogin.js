$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});



$("#NameorEmail").on('keypress', function() {
  var ccType = $(this).val();
  
  /*Batman*/
  if (ccType == "Batma") {
    $('#Avimg').attr('src', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/3149b814300443.5628121298787.jpg');
  }

  if (ccType == "Batman") {
    $('#Avimg').attr('src', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/3149b814300443.5628121298787.jpg');
  }
  
  if (ccType != "Batma") {
    $('#Avimg').attr('src', 'https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png');
  }
  
  /*Superman*/
  if (ccType == "Superma") {
    $('#Avimg').attr('src', 'http://www.peecheey.com/wp-content/uploads/2016/02/Superman.jpg');
  }

  if (ccType == "Superman") {
    $('#Avimg').attr('src', 'http://www.peecheey.com/wp-content/uploads/2016/02/Superman.jpg');
  }
  
  if (ccType != "Superma") {
    $('#Avimg').attr('src', 'https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png');
  }
})


/*Batman*/
$("#NameorEmail").on('keypress', function() {
  var ccType = $(this).val();
    if (ccType == "Batma") {
    $('#Avimg').attr('src', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/3149b814300443.5628121298787.jpg');
  }
})

$("#NameorEmail").on('keydown', function() {
  var ccType = $(this).val();
  if (ccType != "Batma") {
    $('#Avimg').attr('src', 'https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png');
  }
})

/*Superman*/
$("#NameorEmail").on('keypress', function() {
  var ccType = $(this).val();
    if (ccType == "Superman") {
    $('#Avimg').attr('src', 'http://www.peecheey.com/wp-content/uploads/2016/02/Superman.jpg');
  }
})

$("#NameorEmail").on('keydown', function() {
  var ccType = $(this).val();
  if (ccType != "Superma") {
    $('#Avimg').attr('src', 'https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png');
  }
})

$("#fp-btn").click(function() {
  $('#fp-nmp').removeClass('nv');
});

$("#fp-npm-btn").click(function() {
  $('#fp-nmp').addClass('nv');
});