function editData(data) {    
    $.ajax({
        url: "php/edit.php",
        method: "POST",
        data: {
          editID: data,          
        },
        success:function(data){
            $("#main").html(data);
        }
    });   
}