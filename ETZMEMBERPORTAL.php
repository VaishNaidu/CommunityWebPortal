<?php
 include('session.php');
	 
?>

<!doctype html>
<html class="no-js"  lang="en">
	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<link rel="stylesheet" href="assets/css/newpop.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">		
		<!-- TITLE OF SITE -->
		<title>ETZ CHAYIM</title>
		<!-- favicon img -->
		<link rel="icon" type="image/icon" href="assets/images/nlogo.ico"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!----------------------------
             Home Section links
        ----------------------------->

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
            rel="stylesheet"
        />

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Libraries CSS Files -->
        <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/lib/animate/animate.min.css" rel="stylesheet" />
        <link href="assets/lib/venobox/venobox.css" rel="stylesheet" />
        <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

        <!-- Home Stylesheet File -->
        <link href="assets/css/homestyle.css" rel="stylesheet" />

		<!--------End of home section links ------------>

		<!-----------------------------------------------
			Event Plans Links
		------------------------------------------------>
    
		<link rel="stylesheet" href="assets/css/eventplans.css" />		

		<!-------- End of Event Plan Links ------------->
		
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!----------------------------------------------------------------
				Event Links
		----------------------------------------------------------------->

	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!---------------- End of Event Links -------------------------------->

	<!----------------------------------------------------------------------------------
			Payment Links
	----------------------------------------------------------------------------------->

    <link rel="stylesheet" href="assets/css/payments.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

	<!--------------- End of Payment Links -------------------------------------------->


<script>
		function validateForm() 
		{
			var a = document.forms["myForm"]["fname"].value;
			var b = document.forms["myForm"]["password"].value;
			var c =document.forms["myForm"]["email"].value;
			var d =document.forms["myForm"]["cpassword"].value;
			var e =document.forms["myForm"]["gender"].value;
			var f =document.forms["myForm"]["dob"].value;
			var g =document.forms["myForm"]["phone"].value;
			if (a == "") 
			{
				alert("Name must be filled out");
				return false;
			}
			else if (b == "") 
			{
				alert("Password must be filled out");
				return false;
			}
			else if (c == "") 
			{
				alert("Email must be filled out");
				return false;
			}
			else if (d == "") 
			{
				alert("Confrim Password must be filled out");
				return false;
			}
			else if (e == "") 
			{
				alert("Gender must be filled out");
				return false;
			}
			else if (f == "") 
			{
				alert("Date Of Birth must be filled out");
				return false;
			}
			else if (g == "") 
			{
				alert("Phone must be filled out");
				return false;
			}
		}
		</script>
		<script>
		function validatesecondForm() 
		{
			var a = document.forms["mynewForm"]["Memberid"].value;
			var b = document.forms["mynewForm"]["email"].value;
			var c =document.forms["mynewForm"]["password"].value;
			if (a == "") 
			{
				alert("ID must be filled out");
				return false;
			}
			else if (b == "") 
			{
				alert("Email must be filled out");
				return false;
			}
			else if (c == "") 
			{
				alert("Password must be filled out");
				return false;
			}
		}
		</script>
<script>document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, 300, 10000);
 counter("count2", 100, 500, 15000);
 counter("count3", 0, 450, 10000);
 counter("count4",0,500,10000);
});
</script>

		<style>
			.btnSubmit {
			padding: 10px 20px;
			background: #00d8ff;
			border: 1px solid #00d8ff;
			color: #FFF;
			border-radius:4px;}


			@import url(https://fonts.googleapis.com/css?family=Cantarell:400,400italic,700italic,700);
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);




 * {
  padding:0;
  margin:0;
  position:relative;
  box-sizing:border-box;
  -webkit-font-smoothing: subpixel-antialiased !important; 
  -webkit-backface-visibility: hidden; 
}
			.btnSubmit {
			padding: 10px 20px;
			background: #00d8ff;
			border: 1px solid #00d8ff;
			color: #FFF;
			border-radius:4px;}
.ebcf_modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.ebcf_modal-content {
    background: rgb(194,175,175);
background: linear-gradient(0deg, rgba(194,175,175,1) 21%, rgba(117,60,64,1) 73%);
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
	width: 80%;
	border-radius: 15px;

}

/* The Close Button */
.ebcf_close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.ebcf_close:hover,
.ebcf_close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-area input[type="radio"]:checked + label {
  background:fff;
  color:#424242;
}
.tab-list {
  display:block;
  padding:0;
  margin:0;
  list-style-type:none;
  width:120%;
  overflow:auto;
  height:280px;
}
.tab-list:before {
  content:"";
  display:block;
  height:0;
  clear:both;
}
.modal-tab {
  display:inline-block;
height:80%;
width:80%;
  padding-top:20px;
  transform:translateX(-150%);
  transition:all 300ms cubic-bezier(0, 0, .40, 1);
  opacity:0;
  top:0px;
  position:absolute;
  
  perspective:1000;
}
#opentab1:checked ~ .tab-list .tab1 {
  transform:translateX(0%);
  opacity:1;
}
#opentab2:checked ~ .tab-list .tab2 {
  transform:translateX(0%);
  opacity:1;
}
#opentab3:checked ~ .tab-list .tab3 {
  transform:translateX(0%);
  opacity:1;
}
.modal-area input[type="radio"] {
  display:none;
}
.modal-area label {
  float:left;
  display:block;
  padding:10px 20px;
  font-weight:700;
  cursor:pointer;
  z-index:+2;
  background:#BB1313;
  color:#fff;
  transition:all .5s ease-in-out;
overflow: default;

}
.modal-area {
  padding:20px;
overflow: default;
 

}

.modal-close {
  float:right;
  text-decoration:none;
  padding:22px 22px;
  color:#424242;
  font-weight:800;
  transition:all .5s ease-in-out;
  z-index:+1;
  background:rgba(0,0,0,0.1);
  text-align:center;
  border-radius:0 4px 0 0;
}
.modal-close:hover {
  color:#fff;
  background:rgba(0,0,0,0.5);
}
.modal-content h3 {
  padding:20px;
  display:block;
  text-align:center;
  border-bottom:1px solid #e0e0e0;
  text-transform:uppercase;
  background:rgba(2,162,239,1);
  color:#BB1313;
  border-radius:4px 4px 0 0;
}

.button {
  background-color: #BB1313;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


:root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}
.msger {
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  max-width: 900px;
  margin: 25px 100px;
  height: calc(200% - 50px);
  border: var(--border);
  border-radius: 5px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
}

.msger-header {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom: var(--border);
  background: #eee;
  color: #666;
}

.msger-chat {
  flex: 1;
  overflow-y: auto;
  padding: 10px;
}
.msger-chat::-webkit-scrollbar {
  width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
  background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
  background: #bdbdbd;
}
.msg {
  display: flex;
  align-items: flex-end;
  margin-bottom: 10px;
}
.msg:last-of-type {
  margin: 0;
}
.msg-img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
  background: #ddd;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
}
.msg-bubble {
  max-width: 450px;
  padding: 15px;
  border-radius: 15px;
  background: var(--left-msg-bg);
}
.msg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}
.msg-info-name {
  margin-right: 10px;
  font-weight: bold;
}
.msg-info-time {
  font-size: 0.85em;
}

.left-msg .msg-bubble {
  border-bottom-left-radius: 0;
}

.right-msg {
  flex-direction: row-reverse;
}
.right-msg .msg-bubble {
  background: var(--right-msg-bg);
  color: #fff;
  border-bottom-right-radius: 0;
}
.right-msg .msg-img {
  margin: 0 0 0 10px;
}

.msger-inputarea {
  display: flex;
  padding: 10px;
  border-top: var(--border);
  background: #eee;
}
.msger-inputarea * {
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 1em;
}
.msger-input {
  flex: 1;
  background: #ddd;
}
.msger-send-btn {
  margin-left: 10px;
  background: rgb(0, 196, 65);
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.23s;
}
.msger-send-btn:hover {
  background: rgb(0, 180, 50);
}

.msger-chat {
  background-color: #fcfcfe;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23dddddd' fill-opacity='0.4'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}


.org-bun {
	text-align: center;
	color: #b30606;
}



	</style>

	</head>
    <body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="ETZMEMBERPORTAL.php">
									ETZ<span>CHAYIM</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#intro">Home</a></li>
										
										<li class="smooth-menu"><a href="#blog">About Us</a></li>
										<li class="smooth-menu"><a href="#pack">Events</a></li>
										<li class="smooth-menu"><a href="#contact-us">Contact</a></li>
										
										<li>
											<button class="book-btn" id="mySizeChart" ><i class="fa fa-fw fa-user"></i>Profile
											</button>
										</li><!--/.project-btn--> 
										<!--<li>
											<button class="book-btn" data-toggle="modal" data-target="#mySizeChart"><i class="fa fa-fw fa-user"></i>Profile
											</button>
										</li>-->
															
										<li>
											<button data-toggle="modal" data-target="#payModal" class="book-btn">Donate
											</button>
											
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->
		
		<!--===========================================================
             Profile Section
		 ===========================================================-->
		 
		 <div id="mySizeChartModal" class="ebcf_modal">
	<?php
$sql="SELECT * FROM members where Memid=$loggedin_id";
$result=mysqli_query($conn,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
  <div class="ebcf_modal-content">

<button type="button" id="close"  data-dismiss="modal" aria-label="Close" style="color: #aaaaaa;
    margin: 2px 1100px; 
    font-size: 28px;
    font-weight: bold;">
                <span aria-hidden="true">&times;</span>
              </button>
<div class="modal-area">
     
      <input id="opentab1" type="radio" name="modaltabs" checked="checked"/>
      <label for="opentab1">My Account</label>
      <input id="opentab2" type="radio" name="modaltabs"/>
      <label for="opentab2">Chat</label>
      <input id="opentab3" type="radio" name="modaltabs"/>
      <label for="opentab3">Settings</label>
      <ul class="tab-list"><li class="modal-tab tab1">
	  <div class="col-xl-8 order-xl-1">
          <div class="pro-card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                
                <div class="col-4 text-right">
                  
<form method="get" action="logout.php">
    <button type="submit" class="button">Log Out</button>
</form>

                </div>
              </div>
            </div>
<br>
            <div class="card-body">
              <form>
              
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $rows['Name'];?>">
                   
		</div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="<?php echo $rows['Email'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">PHONE</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $rows['Phone'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">DOB</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $rows['DOB'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div></p>
		  </li>
<li class="modal-tab tab2"><section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> SimpleChat
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>

  <main class="msger-chat">
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">ADMIN</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
          Hi, welcome to ETZ Chayim Portal Messenger! Go ahead and send me a message.„
        </div>
      </div>
    </div>

    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Sajad</div>
          <div class="msg-info-time">12:46</div>
        </div>

        <div class="msg-text">
          Thankyou for your warm welcome!
        </div>
      </div>
    </div>
  </main>

  <form class="msger-inputarea">
    <input type="text" class="msger-input" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
</section>








</li>
<li class="modal-tab tab3"><p>Tab 3 Content</p></li>
      </ul>
     </div>
    
  </div>

</div>

<?php 
// close while loop 
}
?>
		<!------------------------------------------------------------
				 End of Profile
		--------------------------------------------------------------->

		<!--===========================================================
             Home Section
		 ===========================================================-->
		 
		 <section id="intro">
            <div class="intro-container wow fadeIn">
                <h1 class="mb-4 pb-0">Together We Are<br /><span>Stronger</span></h1>
                <p class="mb-4 pb-0">Connecting Jewish families from generations</p>
               
                <div class="play-btn"></div>
                <br />
                 <a href="#blog" class="about-btn scrollto">About ETZ CHAYIM</a>
            </div>
        </section>

        <!-- The Modal -->
        <div id="myModal" class="modal">
      
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">+</span>
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/XpBxAVxBva4?autoplay"
                    frameborder="0"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
		
		<!---=============================================================
				Join Section
		===============================================================--->
			
		
        </section><!--/.travel-box-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
							
								<img src="assets/images/service/s1.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Become  a  member   
									</a>
								</h2>
								<p>“There is no greater reward than working from your heart, and making a difference in the world.”<br> -Carlos Santana</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="assets/images/service/s2.jpg" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										Volunteer
									</a>
								</h2>
								<p>“The unselfish effort to bring cheer to others will be the beginning of a happier life for ourselves.”<br>-Helen Keller </p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="assets/images/service/s3.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										Donate
									</a>
								</h2>
								<p>"You have not lived today until you have done something for someone who can never repay you."<br>-John Bunyan </p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		
		<!--=================================================================================================
				Urgent Cause
		===================================================================================================-->
		

		
		<section class="donate_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 for-padding">
                        <h3>URGENT CAUSE</h3>
                        <h3>COVID-19 RELIEF AND RECOVERY FUND</h3><BR>
                        <p> Emergency Support Fund to provide relief and support for people of our community who are experiencing financial hardship as a result of COVID-19.</p>
                        <div class="progress-text">
                            <p class="progress-top">50%</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                            </div>
                            <p class="progress-left">Raised: $1200</p>
                            <p class="progress-right">Goal: $2400</p>
                        </div>
						<!-- Trigger the modal with a button -->
                        <h2><button type="button" class="btn btn-info btn-lg" id="donate-btn" data-toggle="modal" data-target="#payModal">Donate now</button></h2>
						
                    </div>
                </div>
            </div>
        </section>
		
		<!--===========================================================================================
				Payments
		============================================================================================-->

    <!-- Modal -->
    <div id="payModal" class="modal fade" data-backdrop="false" role="dialog">
     <!-- <div class="modal-dialog"> -->
        
      <!-- Modal content -->      
      <div class="pay-modal-content">
        
        <div class="pay-modal-body">
          <span class="pay-close" data-dismiss="modal" onClick="window.location.reload();">+</span>
          <div class="p-row">
            <div class="col-75">
              <div class="payments-container">
                <form action="/action_page.php">
                  <div class="p-row">
                    <div class="col-50">
                      <h1 id="pay-name">Payment</h1>
                      <h3 for="fname" id="cards-content">Accepted Cards</h3>
                      <div class="pay-icon-container">
                        <i class="fa fa-cc-visa" style="color: navy"></i>
                        <i class="fa fa-cc-amex" style="color: blue"></i>
                        <i class="fa fa-cc-mastercard" style="color: red"></i>
                        <i class="fa fa-cc-discover" style="color: orange"></i>
                      </div>
                     
                      <label for="other" id="amt">Enter Amount</label>
                        <input
                          type="text"
                          id="other"
                          name="otheramount"
                          placeholder="$150"
                        />
    
                      <label for="cname">Name on Card</label>
                        <input
                          type="text"
                          id="cname"
                          name="cardname"
                          placeholder="John More Doe"
                        />
                      
                      <label for="ccnum">Credit card number</label>
                      <input
                        type="text"
                        id="ccnum"
                        name="cardnumber"
                        placeholder="1111-2222-3333-4444"
                      />
                      
                      <label for="expmonth">Exp Month</label>
                      <input
                        type="text"
                        id="expmonth"
                        name="expmonth"
                        placeholder="September"
                      />
    
                      <div class="p-row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input
                            type="text"
                            id="expyear"
                            name="expyear"
                            placeholder="2018"
                          />
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input
                            type="text"
                            id="cvv"
                            name="cvv"
                            placeholder="352"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <label>
                    <input type="checkbox" checked="checked" name="savecard" />
                    Save card details
                  </label>
                
                  <input type="submit" value="Continue to checkout" class="sub-btn" />
                </form>
              </div> <!-- pay container -->  
            </div> <!-- col 75 -->
          </div> <!-- p-row -->
        </div> <!-- Modal body -->
      </div> <!-- Modal Content -->
      </div> <!-- Modal Dialog -->
    </div> <!-- pay modal -->
    
		
		<!--------------------------- End of Payments ------------------------------------>

		

		<!--=========================================================================
				About Us
		==========================================================================-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								ABOUT US
							</h2>
							
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>OUR VISION</h2>
										
										<div class="abt-container">
  											<img src="assets/images/about/vsn.jpg" class="abt-image">
  											<div class="abt-overlay">
    											<div class="abt-text">
													<p>Etz Chayim is an inclusive, vibrant and evolving progressive Jewish Community, connecting generation to generation. Etz Chayim’s Rabbi and Board are ably supported but a small, enthusiastic team of professional staff.
														</p>
													</div>
  											</div>
										</div>
										<a href="#">+ Read More</a>
											
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>OUR MISSION</h2>
										<div class="abt-container">
  											<img src="assets/images/about/mission41.JPG" class="abt-image">
  											<div class="abt-overlay">
    											<div class="abt-text">
													<p>
														We provide a whole life experience including life cycles, festivals and social engagement. Our safe and welcoming space supports the development and expression of your individual relationship with Judaism.
													</p>
													</div>
  											</div>
										</div>
										<a href="#">+ Read More</a>
											
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>OUR COMMUNITY</h2>
										<div class="abt-container">
  											<img src="assets/images/about/logo.jpg" class="abt-image">
  											<div class="abt-overlay">
    											<div class="abt-text">
													<p>
													Etz Chayim would not be ‘a wonderful place to be Jewish’ without the help of our volunteers and community. Whether focusing on youth or seniors, fun or finances, learning or playing, we welcome your support and new ideas.
													</p>
													</div>
  											</div>
										</div>
										<a href="#">+ Read More</a>
									</div><!--/.thumbnail-->

								</div><!--/.col-->

							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		<div class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">favorite</i></p>
							<div class="text-blocknew">
							<span id="count1" class="display-4"></span>
							</div>
							 <p class="text-block">DONATIONS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">location_on</i></p>
                            <div class="text-blocknew">
							<span id="count2" class="display-4"></span>
							</div>
                            <p class="text-block">EVENTS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">person_add</i></p>
                            <div class="text-blocknew">
							<span id="count3" class="display-4"></span>
							</div>
                            <p class="text-block">MEMBERS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">people</i></p>
                            <div class="text-blocknew">
							<span id="count4" class="display-4"></span>
							</div>
                            <p class="text-block">VOLUNTEERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!--============================================================================
				Events
		==============================================================================-->
		
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Events
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
					</p>
				</div><!--/.gallery-header-->
				
				<!---------------- Event Plans ------------------------------------------->
		
				<section class="evpln">
      				<div class="container-fluid">
			  			<h5 Style= "float: center">Plan for a better Comfort</h5>
						<div class="row">
            				<div class="col-sm-4">
              					<div class="card text-center">
                					<div class="title">
                  						<i class="fa fa-paper-plane" aria-hidden="true"></i>
                  						<h2>Standard</h2>
                					</div>
                					<div class="price">
                  						<h4><sup>$</sup>25</h4>
                					</div>
                					<div class="option">
                  						<ul>
                   							<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Regular Seating
                    						</li>
                   							<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Coffee Break
                    						</li>
                    						<li>
                      							<i class="fa fa-times" aria-hidden="true"></i> Free Lunch
                							</li>
                   							<li>
                      							<i class="fa fa-times" aria-hidden="true"></i> 5% Discount Offer on events
                    						</li>
                  						</ul>
                					</div>
              					</div>
            				</div>
            				<!-- END Col one -->
					
							<!-- Col 2 -->
							<div class="col-sm-4">
              					<div class="card text-center">
                					<div class="title">
                  						<i class="fa fa-plane" aria-hidden="true"></i>
                  						<h2>Pro</h2>
                					</div>
            						<div class="price">
              							<h4><sup>$</sup>50</h4>
            						</div>
            						<div class="option">
                  						<ul>
                    						<li>
                    							<i class="fa fa-check" aria-hidden="true"></i> Regular Seating
                							</li>
                							<li>
                  								<i class="fa fa-check" aria-hidden="true"></i> Coffee Break 
                							</li>
                							<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Free Lunch
                    						</li>
                    						<li>
                      							<i class="fa fa-times" aria-hidden="true"></i> 5% Discount Offer on events
                    						</li>
                  						</ul>
                					</div>
            					</div>
        					</div>
            				<!-- END Col two -->

							<!-- Col 3 -->
            
							<div class="col-sm-4">
              					<div class="card text-center">
                					<div class="title">
                  						<i class="fa fa-rocket" aria-hidden="true"></i>
                  						<h2>Premium</h2>
                					</div>
                					<div class="price">
                  						<h4><sup>$</sup>100</h4>
                					</div>
                					<div class="option">
                  						<ul>
                    						<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Regular Seating
                    						</li>
                    						<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Coffee Break
                    						</li>
                    						<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> Free Lunch
                    						</li>
                    						<li>
                      							<i class="fa fa-check" aria-hidden="true"></i> 5% Discount Offer on events
                    						</li>
                  						</ul>
                					</div>
              					</div>
            				</div>
            				<!-- END Col three -->
          				</div> <!-- /.row -->
        			</div> <!-- /.container-fluid -->
		  		</section> <!-- /.evpln -->
		  
		  		<!------------------------ End of Event Plans ----------------------------->

				<div class="packages-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e1.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME:
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>
										</p>	
									</div><!--/.packages-para-->
									<div class="about-btn" >
										<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0002" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>
									
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e4.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME:
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>			
										</p>	
									</div><!--/.packages-para-->
									<div class="about-btn" >
										<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0002" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>	
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e3.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME:
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>						
										</p>	
									</div><!--/.packages-para-->
									<div class="about-btn" >
							 			<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0005" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>	
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e8.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME:
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>			
										</p>	
									</div> <!--/.packages-para-->
									<div class="about-btn" >
										<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0005" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>	
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e5.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME: 
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>
										</p>	
									</div> <!--/.packages-para-->
									<div class="about-btn" >
										<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0005" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>	
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/events/e6.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3><span class="event_right"><i class="material-icons">location_on</i>California Street</span> <span class="pull-right"><i class="material-icons">access_time</i> 1:00 pm</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> EVENT NAME:
											</span><br>
											<span>
												<i class="fa fa-angle-right"></i> EVENT DESCRIPTION:
											</span>			
										</p>	
									</div> <!--/.packages-para-->
									<div class="about-btn" >
										<button id="1" class="reg-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modal" onclick="reply_click(this)" data-product-name="E0009" style="float:left">Register</button>
								
										<button id="1" class="book-btn packages-btn" data-toggle="modal" data-target="#buy-ticket-modalnew" onclick="reply_clicknew(this)" data-product-namenew="E0002" style="float:right">Volunteer</button><br>	
									</div> <!--/.about-btn-->
								</div> <!--/.single-package-item-txt-->
							</div> <!--/.single-package-item-->
						</div> <!--/.col-->
					</div><!--/.row-->
				</div><!--/.packages-content-->
				<!-- Button trigger modal -->
				<div class="org-bun">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evntmodal">
 					 Organize Event
				</button>
				</div>

				<div id="evntmodal" class="modal fade" data-backdrop="false">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="float:left" >Register</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<form action="addevent.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Event Name</label>
                            <input type="text" name="EventName" class="form-control" placeholder="Enter event name">

                        </div>
                        <div class="form-group">
                            <label>Event Description</label>
                            <input type="text" name="EventDescription" class="form-control" placeholder="Enter event description">
                        </div>
                        <div class="form-group">
                            <label>Event Start Date and Time</label>
                            <input type="datetime-local" name="StartDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Event End Date and Time</label>
                            <input type="datetime-local" name="EndDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Choose Event Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="addevent" class="btn btn-primary">Add event</button>
                    </div>
                </form>
              
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


			</div><!--/.container-->
		</section><!--/.packages-->

		<div id="buy-ticket-modal" class="modal fade" data-backdrop="false">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="float:left" >Register</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
			  
			  
			  <div class="form-group">
			  <input type="text" id="product_name" name="eventcode" class="form-control"/>
                  
                </div>
			  
			 
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Your Email">
                </div>
				<div class="form-group">
                  <select id="ticket-type" name="guests" class="form-control" >
                    <option value="">-- Number of guests --</option>
                    <option value="1">One</option>
                    <option value="2">two</option>
					<option value="3">three</option>
                    <option value="4">four</option>
                  </select>
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="regtype" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" name="register_event" class="btn">Register</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

   
		
		
		
		
		
		
		  <div id="buy-ticket-modalnew" class="modal fade" data-backdrop="false">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="float:left" >Volunteer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
			  
			  
			  <div class="form-group">
			  <input type="text" name="eventcode" id="product_namenew" class="form-control"/>
                  
                </div>
			  
			 
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Your Email">
                </div>
				
                
                <div class="text-center">
                  <button type="submit" name="volunteer_event" class="btn">Volunteer</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


		<!--=================================================================================================
				End of Events
		==================================================================================================-->
		
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Join our Subscribers List to Get Regular Update
					</h2>
					<p>
						Subscribe Now
					</p>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>

		<!--=======================================================================================
				Donations
		========================================================================================-->
		
		<section id="eventnew"   class="testemonial" >
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Donations
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
					</p>

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/support.PNG" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<!--<div class="home1-testm-img">
								<img src="assets/images/client/testimonial1.jpg" alt="img"/>
							</div>--><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/donate.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/food-donate.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/candle.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/tzedakah.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/giving.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/candle.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/food-donate.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
						<div class="d-container">
  							<img src="assets/images/donate/tzedakah.jpg" class="d-image" >
  							<div class="d-middle">
							  <div class="donate_text">
								  <a data-toggle="modal" data-target="#payModal" class="dname">Donate</a></div>
  							</div>
						</div>
							<div class="home1-testm-txt">
								
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<div class="events_single">
								<p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><br><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
								</div>
								
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->
		
	<!--===========================================================================================
			Contact Us
	============================================================================================-->

	<div id="contact-us" class="bg-contact2" style="background-image: url('assets/images/contact/map1.jpg');">
		<div class="container-contact2">
		
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										ETZ<span>Chayim</span>
									</a>
									<p>
										Connecting Jewish Families
									</p>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
								<p><a href="#intro">Home</a></p>
									<p><a href="#JoinUS">Join</a></p>
									<p><a href="#blog">About Us</a></p>
									<p><a href="#pack">Events</a></p>
									<p><a href="#contact-us">Contact</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular events</h2>
								<div class="single-footer-txt">
									<p><a href="#">event 1</a></p>
									<p><a href="#">event 2</a></p>
									<p><a href="#">event 4</a></p>
									<p><a href="#">event 6</a></p>
									
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+61 xxxxx xxxx</p>
									<p class="foot-email"><a href="#">info@etzchayim.org.au</a></p>
									<p>Etz Chayim Progressive Synagogue, 549 Centre Rd</p>
									<p>Melbourne, Australia</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jss/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


	<!----=======================================================================
				Home JS Links
	==========================================================================-->

	 <!-- Home Javascript File -->
	 <script src="assets/js/homescript.js"></script>

	<!-- Home JS Libs-->
	<script src="assets/lib/venobox/venobox.min.js"></script>
	<script src="assets/lib/wow/wow.min.js"></script>
	
	<!------------------- End of Home JS Links -------------------------->

 	
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script  src="assets/js/function.js"></script>

    <script src="assets/js/animationCounter.js"></script>
		<script src="assets/js/jquery.js"></script>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>

		<!---------------------------------------------------------
			Profile links
		----------------------------------------------------------->
		

		<script>
var ebModal = document.getElementById('mySizeChartModal');

// Get the button that opens the modal
var ebBtn = document.getElementById("mySizeChart");

// Get the <span> element that closes the modal
var ebSpan = document.getElementById("close");

// When the user clicks the button, open the modal 
ebBtn.onclick = function() {
    ebModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
ebSpan.onclick = function() {
    ebModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == ebModal) {
        ebModal.style.display = "none";
    }
}
</script>





<script>
const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

const BOT_MSGS = [
  "Hi, how are you?",
  "Welcome back!!",
  
];

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "BOT";
const PERSON_NAME = "Sajad";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  botResponse();
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse() {
  const r = random(0, BOT_MSGS.length - 1);
  const msgText = BOT_MSGS[r];
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

</script>

<!-----------------------------------------------------------
 End of Profile Links
------------------------------------------------------------->





		

		
		</body>

</html>