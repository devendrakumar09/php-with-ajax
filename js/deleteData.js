function deleteData(data) {
  $.ajax({
    url: "php/delete.php",
    method: "GET",
    data: { del_id: data },
    success: function (data) {        
      $("#main").html(getBlogs());
    },
  });
}
