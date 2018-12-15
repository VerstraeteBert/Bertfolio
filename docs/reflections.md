# Reflections CMS

## WordPress
 CMS's aren't really my thing, however I did want to to hone my CSS and designing skills. 
 Turns out this is the perfect assignment for this.   
  
  Afterwards I want to migrate this WP site to a static site generator [gohugo](https://gohugo.io/), which is great static site generator written in golang. In my opinion this is a much better choice for developers, there's just a lot more flexibility, but it's not as non-developer friendly as WP.
  It basically builds static pages from your content files (markdown) which you can host on Amazon S3, which is a lot cheaper than a WP/Drupal alternative and has the advantage of speed (no server side renedering needed).
  
  ### Mockups
 
 I started out by scouring the web for cool designs, picking out my favourite ones and combining their best features in  terms of design and functionality.  
 
 Following this I made a mockup for the landing page, simple and aesthetically pleasing. Decided not to clutter the landing page too much, by not including blog posts, a huge about me section or previous work experience and projects.
 
 
 Very pleased with the look and feel of this first mockup. Didn't make any mockups for the other pages, found this page to be more than enough to base my further design upon.
 Didn't shy away from the details either, responsive design, the right typography, ...
 
 
### WordPress
Then came the time to actually start looking into WordPress. Guided by the lovely [Susan  Simkins](https://app.pluralsight.com/library/courses/wordpress-custom-theme-development/table-of-contents) I started developing the WP theme. 
Starting with the theme details, settings, ect.   

Took a little bit to get accustomed to the template hierarchy and the loop. What really did suprise me, since I've never worked with a CMS, was it's extensibility through plugins. For example, the great SEO that's possible with little configuration through Yoast SEO, ect...   

Currently using placeholder content, need to have some more time to think about great content.

### Plugins Used

- Yoast SEO   
SEO made easy with little configuration, inserting the right headers, generating sitemap.xml for search engine indexers, ... It also does on the fly content analysis that analyzes how SEO friendly your posts are.     

- Reading Time WP   
Displays reading time for your blog posts, fully configurable, see example in any normal blog posts, it looks at the word count and displays how long it would take to read (like on Medium).     

- WPForms Lite   
For my contact page, I decided to use WPForms, which provides highly customizable contact forms.   
   
- Disqus (Conditional Load)   
With this plugin you can use the disqus comment section that's used in many blogs. Providing a good design, shareability of the post with a single plugin.   
The original plugin can be slow to load, for SEO and page speed reasons I decided on installing the conditional load version. Which only loads the script and section when absolutely necessary.     

- Google Analytics Dashboard For WP (GADWP)   
Knowledge is power, an easily integrated analytics plugin, which display all relevant data in the WP dashboard. 


