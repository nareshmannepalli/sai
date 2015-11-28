<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
  background: #2ecc71 url("http://38.media.tumblr.com/d23deac40b06633b79520a8552f40b94/tumblr_nb1uhrRrge1st5lhmo1_1280.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: "Roboto";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  &::before {
    z-index: -1;
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    background: #2ecc71; /* IE Fallback */
    background: rgba(46,204,113,.8);
    width: 100%;
    height: 100%;
  }
}

.form {
  position: absolute;
  top: 50%;
  left: 50%;
  background: #fff;
  width: 285px;
  margin: -140px 0 0 -182px;
  padding: 40px;
  box-shadow: 0 0 3px rgba(0,0,0,.3);
  & h2 {
    margin: 0 0 20px;
    line-height: 1;
    color: #2ecc71;
    font-size: 18px;
    font-weight: 400;
  }
  & input {
    outline: none;
    display: block;
    width: 100%;
    margin: 0 0 20px;
    padding: 10px 15px;
    border: 1px solid #ccc;
    color: #ccc;
    font-family: "Roboto";
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    font-wieght: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
    &:focus {
      color: #333;
      border: 1px solid #2ecc71;
    }
  }
  
  & button {
    cursor: pointer;
    background: #2ecc71;
    width: 100%;
    padding: 10px 15px;
    border: 0;
    color: #fff;
    font-family: "Roboto";
    font-size: 14px;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
    &:hover {
      background: #27ae60;
    }
  }
}
</style>
</head>

<body>
<form
 $("input[type=submit]").click(function () {
        $.ajax({
          url: "http://lnd.cardatastore.net/api/Auth/Login",
            type: "POST",
            contentType: "application/json;charset=utf-8",
            data: JSON.stringify({
                UserName: $("input[placeholder=Username]").val(),
                Password: $("input[placeholder=Password]").val()
            }),
            success: function (response) {
                alert("success");
            },
            error: function (e) {
                alert("error");
            }
        });
    });
.form.animated.flipInX
 %h2 Login To Your Account
 %form
  %input{:type => "text", :placeholder => "Username"}
  %input{:type => "password", :placeholder => "Password"}
  %button.animated.infinite.pulse Login
  </form>
</body>
</html>