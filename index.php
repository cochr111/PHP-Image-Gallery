<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GPC Final Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://flipsyd.dyndns-web.com:81/contact/final_project/css/thumbnail-gallery.css" rel="stylesheet">
</head>
<body>
 <!-- Start Simple Navigation -->
 <!--Here, we create a nav bar using the built in css in bootstrap. We set it to navbar-inverse to make it black, and fix it to the top with navbar-fixed-top -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!--Here, we create a container for the NAVIGATION--> 
        <div class="container-fluid">
            <!--Here, we are creating a button that will appear upon window resize again, using bootstraps built in functionality. Thus, that is why the id of #bs-example-navbar-collapse-1 is used on a button.  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<!--Here, we are again using the built in bootstrap functionality that requires sr-only as a class for the toggle navigation In essence, we are simply styling the button. <span class="icon-bar"></span> displays the # of bars on the button. -->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
					<!--Here, we add a logo/a brand. This is again, something used by bootstrap-->
                <a class="navbar-brand" href="#">LOGO TEXT</a>
            </div>
			
            <!-- Here, we have to basically add in the links to other pages on our "site" BUT!!!! we have to put them in a div with bootstraps class/id class="collapse navbar-collapse" id="bs-example-navbar-collapse-1". We also have to use an <ul> to display them  -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	
    <!-- Page Content -->
	<!--Here, we create a container that will handle all the rows/columns within the bootstrap framework-->
    <div class="container">
		<!--This one Row contains all of our different columns, which ironically, are all setup for 3-4-6 sizes within a set 12 spaces-->
        <div class="row">
			<!--begin first div which will be its own LARGE column, thus the col-lg-12 class. I also added a page-header class for better styles. -->
            <div class="col-lg-12">
                <h1 class="page-header">PHP Final Project Gallery</h1>
            </div>
				<!--Here, we begin making the different column sizes/thumbnails. Each physical thumbnail gets its own class of "thumb" which sets the margin from to bottom to 30px. We use a col-lg-3 col-md-4 col-xs-6 setup because, upon resize in large devices, we want full width showing 4 thumbnails each or, basically col-lg-3  + col-lg-3 + col-lg-3 + col-lg-3, which equals 12 total. In medium/tablet view we want three thumbnails upon resize (or col-md-4+col-md-4+col-md-4=12), and in small or extra smaller view, we want 2 thumbnails showing side by side. Thus, we applied this to XS, because bootstrap SCALES UP! so, if you want a 2 thumbnail setup or col-xs-6+col-xs-6=12, and you want that for both small and XS classes, all you have to do is set the xs class and Small will be set. The amount of divs on the page is directly related to how many images are in the image folder--->
<?php
/*Here, we create a variable that is a string that we will use as the name of the directory that holds the photos*/
$dir = "images";
/*You need to create another variable that will be the directory that the <a> tags will link to. Thus, you will have 2 "image folders" One for your 400wX300h thumbnails and another in this case called "movies" that contains the large images*/
$dir2 = "images/movies";


/*Here, we tell PHP:
IF variable $dir is actually a directory (hence the is_dir function), and if variable $photo = opendir($dir), thus, we are going to open "images" if it is a directory, and we are going to look for SOMETHING. 

now, we have to use a while loop. 

So, we set a variable called $file and we say, while reading the open image directory ("readdir($photo)") is not false, so essentially, if the directory is named images, if it is open, and we are able to read it (this is permission based) OR if this condition IS NOT FALSE, then we need to check the files to see if they are in the right format. We use a regular expression checking the names of the files set within the variable $file, and match the names with the ending or combination of ".jpg". IF ALL THIS HAPPENS,

echo the div for the gallery.

If it isn't, halt and catch fire.  

When coding the div within PHP there are also some considerations to be made.

<div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
<a class=\"thumbnail\" href=\"$dir/$file\" target=\"_blank\">
<img class=\"img-responsive\" src=\"$dir/$file\" title =\"This is the title of the picture\"alt=\"This is the alt text\">
</a>
</div>
";

First, we have to comment out all "" quotes. Next, we have to set the div according to the bootstrap sizes described in a previous comment. Now, we set the anchor tag's href value to \"$dir/$file\" or more simply, $dir/$file. So, our broswer will seek out the $dir or, the name (string) of the folder with the images, and we add a "/" to basically add $file which will add the name of the files within the folder itself. So, $dir/$file equals images/[image file name]. So, we basically are dynamically changing the href like this, and we do an identical process for the image src within the image tag, so upon click, the user can get that file in a new window, THROUGH the anchor tag.


*/
if (is_dir($dir)) {
    if ($photo = opendir($dir)) {
        while (($file = readdir($photo)) !== false) {
            if (preg_match("/.jpg/", $file)) {
				echo "
				<div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"$dir2/$file\" target=\"_blank\">
                    <img class=\"img-responsive\" src=\"$dir/$file\" title =\"This is the title of $file\"alt=\"This is a photo of $file\">
                </a>
				</div>
				";
           }
        }
		/*here, we close the directory*/
       closedir($photo);
   }
}
?>
</div>
	 <hr>

        <!-- Start Footer -->
        <footer>
			<!--here, we simply create another row and populate it with one column that is size 12.-->
            <div class="row">
                <div class="col-lg-12">
                    <p>I believe that the gallery will freak out when it comes to different photo dimensions so, make sure all photos are of ONE uniform size. Here, they are all at 500X741. The thumbnails are resized to .img-responsive by bootstrap or roughly 252.5X373.68</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- END container -->

    <!-- ADD jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>

    <!-- ADD Bootstrap Core -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</div>
</body>
</html>
