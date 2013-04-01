=== flickr-slideshow-wrapper ===
Contributors: jeannot.muller
Donate link: http://www.ramgad.com/fssw.html
Tags: flickr, gallery,slideshow,wrapper,inline,pictures,images,slide show,fssw,sideflickr,flickr,embedded gallery,picshow,slide show
Requires at least: 2.5.0
Tested up to: 3.5.1
Stable tag: 5.4.0

Including standard flickr slideshows into your blog. Call your Flickr slideshow by adding [set_id=XYZ] to your content.

== Description ==
I didn't find any gallery which fulfilled my expectations. I don't need private pictures from flickr to be included to my blog, as once included they are not private anymore. That's why I wanted to use the standard functionality of flickr to embed slideshows.

You can change the border, scrolling (yes/no), and width and height of the linked iframe under settings. I haven't found yet any parameter or hint to change the black background color. Please post me in case you have an advice and I'll change the coding accordingly. I might need some time to do so, as maintaing this  plugin is a hobby only. The influence on the standard functionality of the flickr API is very limited. Adapting width and height of the iframe might result in artefacts which can't be influenced by any wrapper coding out of wordpress.

== Installation ==
1. Upload 'flickr-slideshow-wrapper.php' to the '/wp-content/plugins/flickr-slideshow-wrapper' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Customize the settings under /Settings/FSSW/
4. For your convenience please use [set_id=XYZ] and/or [slidef=XYZ]. This is even the better choice as the code is not destroyed by switching from visual to html view (I'm mainly using html view only ;-) ). If you chose not to use [set_id=XYZ] and/or [slidef=XYZ] you shall continue to read about the following caveats: 
5. Place &lt;set&#95;id="123213231231231"&gt; from your <a href="http://www.flickr.com" target="_blank">flickr.com</a> set into your content. Please pay attention to put the coding into the HTML section (HTML view).
6. You can call as well a  <a href="http://www.slideflickr.com/" target="_blank">slideflickr.com</a> slideshow by putting the slideflickr id into &lt;slidef="XYZ"&gt;
7. With &lt;set&#95;tag="tag1, tag2, etc."&gt; your are able to compile your own tag-based set from flickr. Please refer to <a href="http://idgettr.com/" target="_blank">idgettr.com</a> to get the relevant information.
8. Please be informed that slideflickr needs the same width and height values you defined during creation of your slideshow on their webpage - otherwise you'll see an endless loading bar.
9. Ensure that you have put the code into your html section of your blog, not the visual one! Again, using the shortcodes [] is the recommended way to go.
10. Have fun, and drop me a comment on <a href="http://www.ramgad.com" target="_blank">ramgad.com</a> if you have any comments, remarks, advices, wishes or if you're just happy.

== Frequently Asked Questions ==
Please read the FAQ <a href="http://www.ramgad.com/fssw.html" target="_blank">here</a>.

== Screenshots ==
1. Option panel. Many thanks to <a href="http://www.pixelagogo.com">Cory Shubert</a> who authorized me to use some of his pictures for the screenshots you can find in the deployment package and here!
2. Slideshow (main view)
3. Slideshow (detailed view)

== Arbitrary section ==
Written by Jeannot Muller, please feel free to post a comment at <a href="http://www.ramgad.com/fssw.html" target="_blank">http://www.ramgad.com/fssw.html</a>
