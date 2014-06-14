  $(function() {
    $("#socialbuttons .twitter").socialbutton("twitter", {
      button : "horizontal",
      text   : "4年に1度だし、みんなで応援するのも良いかも！ー“日本代表を応援したい”全ての人へ『QUESTION』",
      url    : "http://cheer-up-japan.com",
    }).width(105);

    $("#socialbuttons .facebook").socialbutton("facebook_like", {
      button : "button_count",
      url    : "http://cheer-up-japan.com",
    }).width(120);
    
  });
  
 