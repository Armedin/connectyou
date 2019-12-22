
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:url" content="http://www.connectyou.com"/>
	<meta property="og:type" content="non_profit"/>
	<meta property="og:title" content="ConnectYou"/>
	<meta property="og:description" content="This is the description">

	<meta name="twitter:site" content="@connectyou">
	<meta name="twitter:title" content="ConnectYou">
	<meta name="twitter:description" content="This is the description">

	<meta itemprop="name" content="ConnectYou">
	<meta itemprop="description" content="This is the description.">


  <link rel="stylesheet" href="../dist/css/main.css">
  <link rel="icon" href="../dist/img/icon.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
  <link href="../dist/fontawesome/releases/v5.11.2/css/all.css" rel="stylesheet">

  <!-- FONTS
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto" rel="stylesheet">
	<link rel="stylesheet" id="redux-google-fonts-stm_option-css"
		href="https://fonts.googleapis.com/css?family=Montserrat%3A200%2C500%2C600%2C400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%2C300italic%2C400italic%2C600italic%2C700italic%2C800italic&#038;subset=latin&#038;ver=1536658178"
		 type="text/css" media="all" />
	<link rel="stylesheet" id="redux-google-fonts-stm_option-css"
		href="https://fonts.googleapis.com/css?family=Montserrat%3A200%2C500%2C600%2C400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%2C300italic%2C400italic%2C600italic%2C700italic%2C800italic&#038;subset=latin&#038;ver=1536658178"
		 type="text/css" media="all" />
  -->

  <title>OnlineConnect | ConnectYou</title>

</head>

<body>


  <div class="page_header">
    <div class="inner_wrapper">
      <a href="#" class="header_logo">
        <img src="../dist/img/icon.png">
        <span>ConnectYou</span>
      </a>
      <ul class="header_links">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../fun-connect.html">Games</a></li>
        <li><a href="#">Chat</a></li>
        <li><a href="../our-team.html">Our Team</a></li>
      </ul>
    </div>
  </div>

  <!-- Page Sidebar -->
  <div class="page-sidebar">
    <div class="header-logo">
      <a href="/" class="logo-image">
        <img src="dist/img/icon.png">
        <span>ConnectYou</span>
      </a>
  	</div>
  	<div class="sidebar-content">
  	   <div class="sidebar-userContainer">
  		     <div class="sidebar-userInfo">

  		     </div>
  	    </div>
        <div class="main-menu">
  			 <ul>
  		      <li class="list-header"><span>Applications</span></li>
  					<li><a href="#" id="home"><i class="fab fa-dashcube"></i>Home</a></li>
  					<li><a href="#" id="games"><i class="fas fa-gamepad-alt"></i>Games</a></li>
  					<li><a href="#" id="chat"><i class="fad fa-comments-alt"></i>Chat</a></li>
  			    <li><a href="./our-team.html" id="our-team"><i class="fas fa-users-crown"></i>Our Team</a></li>
  			  </ul>
        </div>

  		</div>
  </div>


  <!-- Chat Container -->

  <div class="chat-container">
    <div class="chat_inner_wrapper">
      <div class="chat-main">

        <div class="chat-navigation">
          <ul>
            <li class="user-profile">
              <span><img src="dist/img/users/user1.png"></span>
            </li>
            <li>
              <span><i class="fal fa-comments-alt"></i></span>
            </li>
            <li>
              <span><i class="fal fa-star"></i></span>
            </li>
            <li>
              <span><i class="fad fa-user-secret"></i></span>
            </li>
            <li class="space-wrap"></li>
            <li>
              <span><i class="fal fa-moon"></i></span>
            </li>
            <li>
              <span><i class="fal fa-cogs"></i></span>
            </li>
          </ul>
        </div>

        <div class="chat-main-body">
          <div class="chat-group-sidebar">

            <div id="chat-friends" class="chat-sidebar">

              <div class="chat-header">
                <h3>Chats</h3>
              </div>

              <div class="chat-searchbar">
                <div class="searchbar-icon">
                  <span><i class="fad fa-search"></i></span>
                </div>
                <input type="text" placeholder="Search" class="form-input" id="search-chats">
              </div>

              <div class="chat-body"> <!-- Will be used for ps.js (perfect scroll) -->
                <div class="chat-users-container">
                  <div class="chat-single-user">
                    <div class="user-avatar">
                      <img src="dist/img/users/user4.png">
                    </div>
                    <div class="user-chat-details">
                      <div class="user-details">
                        <h6 class="user-name">Naruto Uzumaki</h6>
                        <p>Oh, so you like basketball? </p>
                      </div>
                      <div class="chat-other-details">
                        <div class="chat-sent-time">Nov 26, 2019</div>
                        <div class="unread-messages">4</div>
                      </div>
                    </div>
                  </div>

                  <div class="chat-single-user">
                    <div class="user-avatar">
                      <img src="dist/img/users/user5.png">
                    </div>
                    <div class="user-chat-details">
                      <div class="user-details">
                        <h6 class="user-name">Minato Namikaze</h6>
                        <p>Have you done your work? </p>
                      </div>
                      <div class="chat-other-details">
                        <div class="chat-sent-time">Nov 26, 2019</div>
                        <div class="unread-messages">3</div>
                      </div>
                    </div>
                  </div>

                  <div class="chat-single-user">
                    <div class="user-avatar">
                      <img src="dist/img/users/user3.png">
                    </div>
                    <div class="user-chat-details">
                      <div class="user-details">
                        <h6 class="user-name">Itachi Uchiha</h6>
                        <p>Have you seen Sasuke today?</p>
                      </div>
                      <div class="chat-other-details">
                        <div class="chat-sent-time">Nov 26, 2019</div>
                        <div class="unread-messages">2</div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

            </div>


            <!-- <div id="chat-favourites" class="chat-sidebar">
              <div class="chat-header">
                <h3>Favourites</h3>
              </div>
            </div>

            <div id="chat-played-with" class="chat-sidebar">
              <div class="chat-header">
                <h3>Played With</h3>
              </div>
            </div>
          </div> -->
        </div>

        <div class="chat-content">
          <div class="chat-header">
            <div class="chat-header-user">
              <div class="user-header-avatar">
                <img src="dist/img/users/user5.png">
              </div>
              <div class="user-info">
                <h3>Alice Freeman</h3>
              </div>
            </div>
            <div class="chat-header-options">
              <span><i class="far fa-ellipsis-v"></i></span>
            </div>
          </div>

          <div class="chat-messages-body">
            <div class="chat-messages-inner-body"> <!-- PerfectScrollbar takes it here -->

              <div class="message-row contact">
                <div class="user-avatar">
                  <img src="dist/img/users/user5.png">
                </div>
                <div class="message-body">
                  <div class="message">Quickly come to the meeting room 1B, we have a big server issue</div>
                </div>
              </div>
              <div class="message-row user">
                <div class="message-body">
                  <div class="message">What?!? Hold on, I am on my way.</div>
                </div>
              </div>


            </div>
          </div>

          <div class="chat-message-footer">
            <div class="message-input-form">
              <form name="send-message" id="send-message">
                <textarea name="message-input" id="message-input" placeholder="Type here"></textarea>
              </form>
            </div>
            <div class="message-options">
              <div class="message-tools">
                <span><i class="far fa-laugh-wink"></i></span>
              </div>
              <div class="message-action">
                <button class="send-message">Send</button>
              </div>
            </div>
          </div>

        </div>

        <div class="chat-no-select-message">
          <div class="no-message-image">
            <div class="align-flex-center">
              <div class="col-md-9">
                <img src="dist/img/no_message.jpeg">
              </div>
            </div>
          </div>
          <div class="no-message-text">
            <p>You do not have any friend to chat with. Add new friends to chat now.
          </div>
        </div>


      </div>
    </div>
  </div>
</div>





<script src="../dist/js/jquery.min.js"></script>
<script src="../dist/js/main.js"></script>
<script>

  function sendText(){
    var val = $("#message-input").val();
    var random = Math.floor(Math.random()*2);
    if(random == 1)
      $(".chat-messages-inner-body").append('<div class="message-row user"><div class="message-body"><div class="message">'+val+'</div></div></div>');
    else
      $(".chat-messages-inner-body").append('<div class="message-row contact"><div class="message-body"><div class="message">'+val+'</div></div></div>');

    $("#message-input").val('');
  }

  // $(".send-message").on("click",function(){
  //   sendText();
  // });

  // $("#message-input").on("keydown", function(e){
  //   if(e.keyCode == 13 && !e.shiftKey){ //enter
  //     e.preventDefault();
  //     sendText();
  //   }
  // });

  $("#search-chats").on("keyup", function(){
    var value = $(this).val().toLowerCase();
    $(".chat-single-user").filter(function() {
      $(this).toggle($(this).find(".user-name").text().toLowerCase().indexOf(value) > -1);
    });
  });

</script>

<script language="javascript" type="text/javascript">
	var wsUri = "ws://localhost:8080/server.php";
	websocket = new WebSocket(wsUri);

	websocket.onopen = function(ev) { // connection is open
	}
	// Message received from server
	websocket.onmessage = function(ev) {
		var response 		= JSON.parse(ev.data); //PHP sends Json data
    console.log(response);
		var res_type 		= response.type; //message type
		var user_message 	= response.message; //message text
		var user_name 		= response.name; //user name
		var user_color 		= response.color; //color
		switch(res_type){
			case 'usermsg':
				break;
			case 'system':
				break;
		}

	};

	websocket.onerror	= function(ev){};
	websocket.onclose 	= function(ev){};

  $("#message-input").on("keydown", function(e){
    if(e.keyCode == 13 && !e.shiftKey){ //enter
      console.log("nai");
      e.preventDefault();
      send_message();
    }
  });

	//Send message
	function send_message(){
		var message_input = $('#message-input'); //user message text

		if(message_input.val() == ""){ //emtpy message?
			alert("Enter Some message Please!");
			return;
		}
		//prepare json data
		var msg = {
			message: message_input.val()
		};
		//convert and send data to server
		websocket.send(JSON.stringify(msg));
		message_input.val(''); //reset message input
	}
</script>
</body>

</html>






<!-- -->
