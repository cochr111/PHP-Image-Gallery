# PHP-Image-Gallery

This code will allow users to create an image gallery on their website and upload images by simply dragging them into the root image folder in their Webroot folder. The developer will have to create additional 400X300px images in a separate folder as well. Details are below. The Gallery will resize for mobile deployment. 

Languages Used:

HTML, CSS, jQuery, PHP

Your Webroot folder should contain a folder entitled "images" where you will place your thumbnail version of the images in 400pxH X 300pxW for the script to work. In that SAME image folder, create another and change the php variable "dir2" (in the php) to the path to that folder you created INSIDE the images folder. Doing this makes the <a> tags in the PHP link to the full size images. You can edit this on the index page, OR edit the php code separately, and the notes in the code also point this out.


Made With

https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css

https://code.jquery.com/jquery-1.12.1.min.js

https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js

AND

Custom CSS - Small, and could be included in the head of the document if you wish.

You can find a full tutorial on this at 
http://startbootstrap.com/template-overviews/thumbnail-gallery/

BUT,

The PHP is custom and its original conception can be found at http://www.techrepublic.com/article/create-a-dynamic-photo-gallery-with-php-in-three-steps/5873251/
