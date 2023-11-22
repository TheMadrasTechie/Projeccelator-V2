<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Popup/Modal without JS</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: Arial, sans-serif;
  background: #ddd;
}

h1 {
  text-align: center;
  font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
  color: #333;
  text-shadow: 0 1px 0 #fff;
  margin: 50px 0;
}

#wrapper {
  width: 500px;
  height: 200px;
  margin: 0 auto;
  background: #fff;
  padding: 20px;
  border: 10px solid #aaa;
  border-radius: 15px;
  background-clip: padding-box;
  text-align: center;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5);
  transition: opacity 200ms;
  visibility: hidden;
  opacity: 0;
}
.overlay.light {
  background: rgba(255, 255, 255, 0.5);
}
.overlay .cancel {
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: default;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 75px auto;
  padding: 20px;
  background: #fff;
  border: 1px solid #666;
  width: 300px;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
  position: relative;
}
.light .popup {
  border-color: #aaa;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
}
.popup h2 {
  margin-top: 0;
  color: #666;
  font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 20px;
  right: 20px;
  opacity: 0.8;
  transition: all 200ms;
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: #666;
}
.popup .close:hover {
  opacity: 1;
}
.popup .content {
  max-height: 400px;
  overflow: auto;
}
.popup p {
  margin: 0 0 1em;
}
.popup p:last-child {
  margin: 0;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <h1>rollno fetching from db</h1>
<div id="wrapper">

<form>
		

	<h2>Select list</h2>
             <select  style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color:#C9CEC3;" id = "myList">
               <option value = "1">one</option>
               <option value = "2">two</option>
               <option value = "3">three</option>
               <option value = "4">four</option>
             </select>
	<button class="button" style="vertical-align:middle;" href="#popup2"><span>Submit</span></button>
		</form>
		
</div>


  
</body>
</html>
