<html>
   <h1><u>Registration form</u></h1>
    </head>
    <body>
        <div id="container">
            <form  id="registration" action="http://blooming-beach-2334.herokuapp.com/users.json" method="post">
                <br/> <br/>
			
                <div>
		    <label for="name">Name</label>
		    <input id="name" name="name" type="text" />
		    <span >What's your name?</span>
		</div>

		<div>
		    <label for="age">Age</label>
		    <input id="age" name="age" type="text" />
		    <span >How old are you?</span>
		</div>
				
		<div >
		    <label for="gender">Gender:&nbsp;Male<input type="radio" id="male" name="gender" value="male" checked="checked">
		    &nbsp;Female<input type="radio" id="female" name="gender" value="female"></label>
				
		</div>

		<div>
		    <label for="email">Email-Id</label>
		    <input id="email" name="email" type="text" />
		    <span >Where can we mail you?</span>
		</div>
				
		<div>
		    <label for="address">Address</label>
		    <input id="address" name="address" type="text" />
		    <span >You put up at..?</span>
		</div>
				
		<div>
		    <label for="pincode">Pincode</label>
		    <input id="pincode" name="pincode" type="text" />
		    <span >Zip Code..!</span>
		</div>
				
		<div>
		    <label for="description">About yourself</label>
		    <input id="description" name="description" type="text" />
		    <span >Help us know more about you..</span>
		</div>
				
		<div>	
		    <input type="submit" id="submit" onclick=" return checkForm(this.form)" value="Submit" name="submit" />
		    
		</div>
			
            </form>
	
	    <form  id="fetch" action="http://blooming-beach-2334.herokuapp.com/users.json" method="get">
	        <input type="submit" id="showUsers" value="Show Users" name="showUsers"/>
	    </form>

        </div>

    </body>
</html>
