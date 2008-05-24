=== Flickr-SlideShow-Wrapper ===
Contributors: jeannot.muller
Donate link: http://www.ramgad.com/
Tags: flickr, gallery, slideshow, wrapper, inline, pictures, images
Requires at least: 2.5.0
Tested up to: 2.5.1
Stable tag: 1.3

Including standard flickr slideshow into your blog. Call your FlickrSlideshow by adding <set_id="XYZ"> to your content. 

== Description ==

I didn't find any gallery which fulfilled my expectations. I don't need private pictures from flickr to be included to
my block, as once included they are not private anymore. That's why I wanted to use the standard functionality
of flickr to embed slideshows.

You can change the border, scrolling (yes/no), and width and height of the linked iframe under settings. I haven't found yet any parameter or hint to change the black background color. Please post me in case you have an advice and I'll change the coding accordingly.

== Installation ==
1. Upload 'FlickrSlideShowWrapper.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Customize the settings under /Settings/FSSW/
4. Place '<set_id="123213231231231">' in your content. Please pay attention to put the coding into the HTML section (HTML view) or in case you use other plugins, that the HTML code show <set_id="........"> and not for instance &lt;set_id etc.
5. Have fun, and drop me a comment on www.ramgad.com if you have any comments, remarks, advices, wishes or if you're just happy.2

== Frequently Asked Questions ==
1. I have issues to get the set_id code implemented. The syntax is <set_id="XYZ"> where XYZ has to be replaced by the numeric string you see on flickr in the URL once you have chosen a set.

Please have a look at a public set from my page:
http://www.flickr.com/photos/jeannot_muller/sets/72157605227221245/

the numeric string between sets/ and / is your set_id ... for the above example = 72157605227221245, hence the syntax is <set_id="72157605227221245">

Ensure that you have put the code into your html section of your blog, it should not have been converted to something like &lt;set_id="XYZ"&gt;
== Screenshots ==
1. example 1
2. example 2
3. example settings

== Arbitrary section ==
Written by Dr. Jeannot Muller, please feel free to contact me under jeannot.muller@ramgad.com
