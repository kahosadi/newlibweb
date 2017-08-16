$( document ).ready(function() {
    //Delete Action
    var delconfirmmessage = $("#del-confirm-message").text();

    $("button.del-btn").on("click", function(){
      var confirmBox = simplePopup(1, delconfirmmessage);
      $.when(confirmBox).then(function(res) {
        if (res) {
          //$(event.target).next().text('Yes, let\'s go for it.');
        } else {
          //$(event.target).next().text('No, this is not the time.');
        }
      });
    });

    //Update Action

    $("button.upd-btn").on("click", function(){
      var paramid = $(this).closest("tr").attr('id').replace("param","");
      console.log($(this).closest("tr").find("td.parameter_name"));
      $("#parameter_name").val($(this).closest("tr").find("td.parameter_name").text());
      $("#parameter_type").val($(this).closest("tr").find("td.parameter_type").text());
      $("#parameter_value").val($(this).closest("tr").find("td.parameter_value").text());
      /*var confirmBox = simplePopup(1, delconfirmmessage);
      $.when(confirmBox).then(function(res) {
        if (res) {
          $(event.target).next().text('Yes, let\'s go for it.');
        } else {
          $(event.target).next().text('No, this is not the time.');
        }
      });*/
    });
});
