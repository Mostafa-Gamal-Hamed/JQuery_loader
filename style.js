
$(document).ready(function(){
  $('#uploadForm').submit(function(e){
      e.preventDefault();
      var formData = new FormData($(this)[0]);

      $.ajax({
          url: 'upload.php',
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          xhr: function() {
              var xhr = new window.XMLHttpRequest();
              xhr.upload.addEventListener("progress", function(evt) {
                  if (evt.lengthComputable) {
                      var percentComplete = Math.floor(evt.loaded / evt.total * 100) ;
                      $('#progressBar').css({
                        width: percentComplete + '%'
                      });
                      $('#progressBar').text(percentComplete + '%');
                      $('button').text("Done");
                  }
              }, false);
              return xhr;
          },
          success: function(data){
            if(data.startsWith("Failed")){
              $(".message").text(data);
            } else {
              $('.message').html('File uploaded successfully! <a href="' + data + '" target="_blank">Download</a>');
            }
          },
          error: function(xhr, status, error) {
            $('.message').text('Upload failed: ' + error);
          }
      });
  });
});
