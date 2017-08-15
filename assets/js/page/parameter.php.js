$( document ).ready(function() {
    //Delete Action
    var message_confirmation = "";

    $("button.del-btn").on("click", function(){
      var confirmBox = simplePopup(1, "Message");
      $.when(confirmBox).then(function(res) {
        if (res) {
          $(event.target).next().text('Yes, let\'s go for it.');
        } else {
          $(event.target).next().text('No, this is not the time.');
        }
      });

    });

});
