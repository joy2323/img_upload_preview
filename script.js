function triggerClick(e) {
    document.querySelector('#profileImage').click();
  }
  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e){
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }


//   Now when the user clicks on the round image area, 
//   the function triggerClick() will trigger a click event on 
//   the hidden file input element. When the user selects an 
//   image, an onChange event is triggered on the file input 
//   field and we can use JavaScript's FileReader() class to 
//   temporarily display the image for preview.