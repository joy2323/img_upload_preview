
# On form.php file:
#we are including a file(processForm.php) that contains our PHP script responsible for receiving the form values 
and processing them (that is, saving the image in the images folder and creating a corresponding 
record in the users table in the database).

##we set the value of the CSS property display to none; We are doing this because we don't want to 
display the default HTML input element for file upload. Instead, we will create a different element and style 
it the way we want and then when the user clicks on our element, we will use JavaScript under the hood to trigger 
the HTML file input element which is hidden to us.

###When the user clicks the 'Save User' button, the input form will be submitted to the same page.


# On script.js:
#when the user clicks on the round image area, the function triggerClick() will trigger a click event on the hidden file input element. 

##When the user selects an image, an onChange event is triggered on the file input field and 
we can use JavaScript's FileReader() class to temporarily display the image for preview.


# On processForm.php:
#This code receives the input values that was submitted from the form. This input consists of the user image and the bio. 
On the server, we can access the image file and all related image information 
such as the image name, size, extension, etc, in the $_FILE[] super global variable while 
other information such as text is found in the $_POST[] superglobal variable. 


##Using the information in the $_FILE[] super global variable, we can validate the image. 
For instance, our source code can only accept images whose sizes are less than 200kb. 
Of course, you can always change this value if you want.


###we are connecting to a database called img-upload.


# images table:
Create this database and create a table called users with the following fields:

CREATE TABLE `images` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `image` varchar(255) NOT NULL,
 `image_text` text NOT NULL
);


# profiles.php: 
#This file connects to the database, queries all profile info from the users table and 
lists the user profiles in a tabular format displaying each user's profile image against 
their bio. An image is displayed simply by using the image name from the database and pointing 
to the images folder where the image resides.


