# img_upload_preview

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





