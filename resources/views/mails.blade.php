<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="padding-top:10%;padding-left:40%;">
<h2>Hi! {{$contain['email']}} </h2>
<h3>You  can reset password</h3>
<h3><b>below is your verification code</h3><b>
 <h1><b>{{$contain['code']}}  </b></h1> 

</div>

<div style="padding-top:5%;padding-left:40%;">  
<a href="http://localhost:8080/resetpassword" class="button">Reset Password</a>
</div>
</body>
</html>
