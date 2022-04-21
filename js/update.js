function update(){
    $title = $("#title").val();
    $desc = $("#description").val();
    if ($title == "" && $desc == "") {
      $("#title").css('border-color', 'red');
      $("#description").css('border-color', 'red');
  
    } else {
      $title = $("#title").val();
      $desc = $("#description").val();
      $post_id = $("#postid").val();
  
      $.ajax({
        url: "php/update.php",
        method: "POST",
        data: {
          postid:$post_id,
          titlecol: $title,
          desccol: $desc,
        },
        success: function (data) {       
            
            getBlogs();
        },
      });
    }
  }