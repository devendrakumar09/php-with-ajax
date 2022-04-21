/**Add Nwe Blog */
function newBlog() {
    $.ajax({
        url:"php/new-blog.php",
        method:"GET",
        success:function(data){
            $("#main").html(data);
        }
    });    
}

function save(){
  $title = $("#title").val();
  $desc = $("#description").val();
  if ($title == "" && $desc == "") {
    $("#title").css('border-color', 'red');
    $("#description").css('border-color', 'red');

  } else {
    $title = $("#title").val();
    $desc = $("#description").val();

    $.ajax({
      url: "php/insert.php",
      method: "POST",
      data: {
        titlecol: $title,
        desccol: $desc,
      },
      success: function (data) {
        $("#title").val(null);
        $("#description").val(null);
        $("#title").css('border-color', '');
        $("#description").css('border-color', '');

        $("#msg").html("**Data insert successfully**").fadeIn("slow"); //also show a success message
        $("#msg").delay(5000).fadeOut("slow");
        showData();
      },
    });
  }
}


//Fetch All Blogs
function getBlogs() {
    $.ajax({
        url:"php/getdata.php",
        method:"GET",
        success:function(data){
            $("#main").html(data);
        }
    });
}