$('button.btn.del').on('click', function() {
  let modal = new bootstrap.Modal(document.getElementById('modal'));
    $.ajax({
      type:'POST',
      url:'app/services/btn_controller.php',
      dataType: 'json',
      data:{
          params: $(this).data('value'),
      },
      success:function(data){
        if(data.length != 0){
          console.log(data);
          $('.msg').text(data.message)
          $('.modal-title').text(data.status)
          modal.show();

        }
      

      }
  })
});
$('button.btn.close').on('click', function() {
  location.reload();
});
$('button.btn-close').on('click', function() {
  location.reload();
});