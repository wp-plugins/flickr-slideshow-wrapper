=== flickr-slideshow-wrapper ===
Contributors: jeannot.muller
Donate link: http://www.ramgad.com/
Tags: flickr, gallery,slideshow,wrapper,inline,pictures,images,slide show,fssw,sideflickr,flickr,embedded gallery,picshow
Requires at least: 2.5.0
Tested up to: 2.5.1
Stable tag: 3.4.0

Including standard flickr slideshow into your blog. Call your FlickrSlideshow by adding &lt;set&#95;id="XYZ"&gt; to your content. 

== Description ==

I didn't find any gallery which fulfilled my expectations. I don't need private pictures from flickr to be included to
my block, as once included they are not private anymore. That's why I wanted to use the standard functionality
of flickr to embed slideshows.

You can change the border, scrolling (yes/no), and width and height of the linked iframe under settings. I haven't found yet any parameter or hint to change the black background color. Please post me in case you have an advice and I'll change the coding accordingly.

== Installation ==
1. Upload 'FlickrSlideShowWrapper.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Customize the settings under /Settings/FSSW/
4. Place &lt;set&#95;id="123213231231231"&gt; from your <a href="www.flickr.com">flickr set</a> into your content. Please pay attention to put the coding into the HTML section (HTML view)
5. You can call as well a  <a href="http://www.slideflickr.com/">www.slideflickr.com</a> slideshow by putting the slideflickr id into &lt;slidef="XYZ"&gt;
6. Have fun, and drop me a comment on www.ramgad.com if you have any comments, remarks, advices, wishes or if you're just happy.

== Frequently Asked Questions ==
<strong>I have issues to get the set_id code implemented.</strong></br>
The syntax is &lt;set&#95;id="XYZ"&gt; or &lt;slidef="XYZ"&gt; where XYZ has to be replaced by the numeric string you see on flickr in the URL once you have chosen a set.

Please have a look at a public set from my page:
http://www.flickr.com/photos/jeannot_muller/sets/72157605227221245/
The numeric string between sets/ and / is your set&#95;id ... for the above example = 72157605227221245, hence the syntax is &lt;set&#95;id="72157605227221245"&gt;
Ensure that you have put the code into your html section of your blog, not the visual one!

== Screenshots ==
1. Option panel

2. Slideshow (main view)

3. Slideshow (detailed view)

== Arbitrary section ==
Written by Dr. Jeannot Muller, please feel free to contact me under jeannot.muller@ramgad.com
