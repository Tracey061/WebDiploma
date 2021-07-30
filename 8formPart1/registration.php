<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

		
		<form action="processRegistration.php" method="post">
            <fieldset>
                <h1>Registration Form</h1>
		        <p>Please fill out the details to register</p>
                <div>
                    <label for="firstName">First name</label>
                    <input type="text" name="firstName" id="firstName" value="">
                </div>

                <div>
                    <label for="lastName">Last name</label>
                    <input type="text" name="lastName" id="lastName" value="">
                </div>

                <div>
                    <label for="password1">Choose a password</label>
                    <input type="password" name="password1" id="password1" value="">
                </div>

                <div>
                    <label for="password2">Retype password</label>
                    <input type="password" name="password2" id="password2" value="">
                </div>

                <div>
                    <label for="course">Enrolled in</label>
                    <select name="course[]" id="course" size="3" multiple>
                        <option value="WebCert4">Web Cert 4</option>
                        <option value="WebDiploma">Web Diploma</option>
                        <option value="ProgrammingCert4">Programming Cert 4</option>
                        <option value="WebCert2">Web Cert 2</option>
                        <option value="WebDiploma1">Web Diploma1</option>
                        <option value="ProgrammingCert2">Programming Cert 2</option>
                    </select>
                </div>

                <div>
                    <input type="radio" name="mode" id="modeFT" value="FT">
                    <label for="modeFT" class="shorterLabel">Full time</label>
                    <input type="radio" name="mode" id="modePT" value="PT">
                    <label for="modePT" class="shorterLabel">Part time</label>  
                </div>

                <div>
                    <label for="newsletter" class="longerLabel">Do you want to receive our newsletter?</label>
                    <input type="checkbox" name="newsletter[]" id="newsletter" value="yes">
                </div>
                <div>
                    <label for="special" class="longerLabel">Do you want to receive our specials?</label>
                    <input type="checkbox" name="newsletter[]" id="special" value="special">
                </div>
                
                <div>
                    <label for="comments">Any comments?</label>
                    <textarea name="comments" id="comments" rows="4" cols="50"> </textarea>
                </div>

                <div>
                    <button type="submit" name="submitButton" id="submitButton">Send Details</button>
                </div>
            </fieldset>
		</form>

</body>
</html>