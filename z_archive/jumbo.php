<?php
//include_once('./includes/headers.php');
?>

<head>
    <link rel="stylesheet" type="text/css" href="jumbo.css">
    <script src="https://kit.fontawesome.com/58914d790c.js"></script>

</head>
<div id="wrapper">


    <header id="header">
        <div class="content-block" id="header-top">


            <a class="mms-icon hamburger-to-close mhm-lnk" id="mms-icon-blog" data-list="msml-blog">
                <span class="hamburger-middle"></span>
            </a>

            <div id="header-social-block">
                <a href="https://www.facebook.com/" class="hs-lnk wicon-facebook">
                    <svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693"
                         width="56.693px" xml:space="preserve" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path
                                fill="#191C1D"
                                d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"></path></svg>
                </a>
                <a href="http://twitter.com/" class="hs-lnk wicon-twitter">
                    <svg aria-labelledby="simpleicons-twitter-icon" role="img" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                        <path fill="#191C1D"
                              d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path>
                    </svg>
                </a>
                <a href="http://feeds2.feedburner.com/" class="hs-lnk wicon-rss">
                    <svg aria-labelledby="simpleicons-rss-icon" role="img" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><title
                                id="simpleicons-rss-icon">RSS icon</title>
                        <path fill="#191C1D"
                              d="M19.199 24C19.199 13.467 10.533 4.8 0 4.8V0c13.165 0 24 10.835 24 24h-4.801zM3.291 17.415c1.814 0 3.293 1.479 3.293 3.295 0 1.813-1.485 3.29-3.301 3.29C1.47 24 0 22.526 0 20.71s1.475-3.294 3.291-3.295zM15.909 24h-4.665c0-6.169-5.075-11.245-11.244-11.245V8.09c8.727 0 15.909 7.184 15.909 15.91z"></path>
                    </svg>
                </a>
            </div>


            <div id="top-center" class="d-flex flex-row justify-content-center">

                <div class="top-submenu-wrap d-flex flex-column justify-content-center ">
                    <nav class="top-submenu">
                        <a href="<?php echo $p; ?>" class="mn-item">Home
                            <span class="mn-stb">Home</span>
                        </a>
                        <div class="mn-wrap">
            <span class="mn-item"> Services
              <span class="mn-stb">Services</span>
            </span>

                            <div class="categories-drop-down">
                                <div>
                                    <a href="/category/news" class="category-link">News</a>
                                </div>
                                <div>
                                    <a href="/category/tools" class="category-link">Tools</a>
                                </div>
                                <div>
                                    <a href="/category/resources" class="category-link">Resources</a>
                                </div>
                                <div>
                                    <a href="/category/datasets" class="category-link">Datasets</a>
                                </div>
                                <div>
                                    <a href="/category/community" class="category-link">Community</a>
                                </div>
                                <div>
                                    <a href="/category/strategy" class="category-link">Strategy</a>
                                </div>
                                <div>
                                    <a href="/category/technology" class="category-link">Technology</a>
                                </div>
                                <div>
                                    <a href="/category/code" class="category-link">Code</a>
                                </div>


                            </div>
                        </div>

                    </nav>
                </div>

                <span class="logo-anim-mask">

         <a href="<?php echo $p; ?>" class="w-logo" title="HBDI@FSU">
             <div class="navbar-brand" style="text-align: center; margin: auto;  font-family: Noles_Unconquered, Open Sans, sans-serif;
 ">
                    <div style="display: block; font-size: 3.25em; padding-top: 14px; width: 250px">
                        <a href="<?php echo $p; ?>">
                            HBDI<i class="fas fa-ellipsis-v"></i>FSU
                        </a>
                    </div>
            </div>
            <!--           <span class="vi-logo">-->
            <!--           <svg id="Layer_1" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 489 304"><defs><style>.cls-1{fill:#f0353d;}.cls-2{fill:#d32633;}.cls-3{fill:#f29c2a;}.cls-4{fill:#fbb239;}</style></defs><polygon class="cls-1" points="220 0 139 0 314 304 314 164 220 0"></polygon><polygon class="cls-2" points="408 0 314 164 314 304 489 0 408 0"></polygon><polygon class="cls-3" points="190.17 137.53 175 164 175 304 230.5 207.59 190.17 137.53"></polygon><polygon class="cls-4" points="81 0 0 0 175 304 175 164 81 0"></polygon></svg>           </span>-->
            <!---->
            <!--           <span class="ghost-logo">-->
            <!--            <svg id="Layer_1" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 489 304"><defs><style>.cls-1{fill:#f0353d;}.cls-2{fill:#d32633;}.cls-3{fill:#f29c2a;}.cls-4{fill:#fbb239;}</style></defs><polygon class="cls-1" points="220 0 139 0 314 304 314 164 220 0"></polygon><polygon class="cls-2" points="408 0 314 164 314 304 489 0 408 0"></polygon><polygon class="cls-3" points="190.17 137.53 175 164 175 304 230.5 207.59 190.17 137.53"></polygon><polygon class="cls-4" points="81 0 0 0 175 304 175 164 81 0"></polygon></svg>           </span>-->
            </a>


            </span>

            <div class="top-submenu-wrap d-flex flex-column justify-content-center">
                <nav class="top-submenu">
                    <a href="/category/freebies" class="mn-item">Freebies
                        <span class="mn-stb">Freebies</span>
                    </a>

                    <a href="https://www.mightydeals.com/all_deals?ref=wddnavbar" class="mn-item">Deals
                        <span class="mn-stb">Deals</span>
                    </a>


                </nav>
            </div>


        </div>

        <div id="header-search">
            <div class="search-wrap">
                <a href="#" id="search-btn">
                    <svg id="search-icon-svg" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>search-icon</title>
                        <path fill="#ffffff"
                              d="M15.5,14h-.793l-.27637-.27637a6.51878,6.51878,0,1,0-.707.707L14,14.707V15.5l5,5L20.5,19ZM5,9.5A4.5,4.5,0,1,1,9.5,14,4.5,4.5,0,0,1,5,9.5Z"></path>
                    </svg>
                    <span class="l-icon-cancel-1"></span>
                </a>
            </div>
        </div>

</div>


</header>

<form method="get" action="https://www.webdesignerdepot.com" id="search-form">
    <input type="text" name="s" value="" id="search-field" class="h-holder non-active" data-value="Search articles...">
</form>


<div id="hp-dsk">

    <div class="content-block hp-cb-thw">


        <div id="article-header-stub">
        </div>


        <div id="article-header-wrap">

            <div id="article-header">


                <!--class="d-flex flex-row"-->

                <div class="content-block ah-cim ah-cim-img"
                     style="background-image:url(https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_rwd.jpg);">


                    <a href="https://www.webdesignerdepot.com/2020/02/5-simple-responsive-blunders-and-how-to-avoid-them/" class="ah-cv-lnk"></a>
                    <div class="single-title-im-wrap">


                        <div class="single-title-im-content clearfix">

                            <div class="single-title-im-inside clearfix">

                                <div class="hp-cat">
                                    <a data-tooltip="See all posts related to Interactive Design" class="hp-category"
                                       href="https://www.webdesignerdepot.com/category/interactive-design/">Interactive Design</a></div>
                                <h1 class="single-title">
                  <span>
                    5 Simple Responsive Blunders (And How To Avoid Them)                  </span>
                                </h1>

                                <div class="stiw-pinfo clearfix">
                                    <div class="hp-post-pub-info">
                                        <div class="hp-post-pub-info-content">
                                            <a data-tooltip="See all posts by Josip Mlinarić" class="hp-author-avatar-lnk"
                                               href="/author/Josip-Mlinari-">
                                                <img src="https://www.gravatar.com/avatar/d3398d3a4451280e0cc70aa87faf1793?s=48" alt="Josip Mlinarić"
                                                     class="hpppi-author-avatar">
                                            </a>

                                            <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Josip Mlinarić" href="/author/Josip-Mlinari-">Josip Mlinarić</a>
                </span>
                                            <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                            <span class="hppi-time">
          <span class="icon-clock-1"></span>
          3 hrs ago        </span>


                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div id="main-content-block">

        <div id="hp-contents-blocks">


            <div class="content-block hp-content">


                <div class="wrapper">
                    <div class="content">

                        <!--<div class="d-flex flex-column flex-wrap main-list-row mlr-0">-->
                        <div class="d-flex flex-row flex-wrap hp-list-row list-list-row llr-0">

                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/can-design-systems-work-for-freelancers/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="Can Design Systems Work for Freelancers?"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Strategy &amp; Workflow" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/strategy-workflow/">Strategy &amp; Workflow</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/can-design-systems-work-for-freelancers/"
                                                       class="anim-link">Can Design Systems Work for Freelancers?</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           There’s a lot riding on your shoulders as a freelance designer. You have to play the part of salesperson, project manager, web designer, accountant, and more. That’s why it’s critical to develop more efficient ways to work while maximizing results. One way that agencies and even small teams of designers do this is through design systems. By taking the time to create a collection of design standards, reusable components, and documentation,...        ">
                                                    There’s a lot riding on your shoulders as...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk"
                                                       href="/author/Suzanne-Scacca">
                                                        <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48"
                                                             alt="Suzanne Scacca" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          2 days ago        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/introducing-15-best-new-portfolios-february-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="Introducing 15 Best New Portfolios, February 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp;
                                                        Inspiration</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/introducing-15-best-new-portfolios-february-2020/"
                                                       class="anim-link">Introducing 15 Best New Portfolios, February 2020</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           Each month we publish a roundup of the best new portfolios, launched in the previous four weeks, by freelancers, agencies, and other creative professionals. This month’s edition is packed with color and animation. Almost every site in this list animates some part of its interface, and many are dependent on animation entirely. You’ll find tons of great interaction design, but the real trend in 2020 is that personality is making its way...        ">
                                                    Each month we publish a roundup of the...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Paddi MacDonnell" class="hp-author-avatar-lnk"
                                                       href="/author/Paddi-MacDonnell">
                                                        <img src="https://www.gravatar.com/avatar/9dcff61f2c14cbad17b2333648c60a59?s=48"
                                                             alt="Paddi MacDonnell" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Paddi MacDonnell" href="/author/Paddi-MacDonnell">Paddi MacDonnell</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          4 days ago        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-17-2020-february-23-2020/">
                                            <img width="842" height="480"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-1024x584.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="Popular design news of the week: February 17, 2020 - February 23, 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-768x438.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1.jpg 1200w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to News" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-17-2020-february-23-2020/"
                                                       class="anim-link">Popular Design News of the Week: February 17, 2020 - February 23, 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Every week users submit a lot of interesting stuff on our sister site Webdesigner News,
                                                    highlighting great content from around the web that can be of interest to web designers.&nbsp; The
                                                    best way to keep track of all the great stories and news being posted is simply to check out the
                                                    Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of
                                                    the most popular designer news&nbsp;that we curated from the past week. Note...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                                       href="/author/Cameron-Chapman">
                                                        <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48"
                                                             alt="Cameron Chapman" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          5 days ago        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/3-strategies-to-follow-when-your-site-is-failing/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="3 Strategies to Follow When Your Site is Failing"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Usability &amp; Testing" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/usability-testing/">Usability &amp; Testing</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/3-strategies-to-follow-when-your-site-is-failing/"
                                                       class="anim-link">3 Strategies to Follow When Your Site is Failing</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           Here are 3 strategies you should consider if your website is struggling. We’ll cover: Web analytics and split testing In-person testing Simplifying your sales process If possible, implement these strategies ahead of time before you run into any issues. I’m going to cover why these strategies are effective and what they are good at resolving. 1. Analytics and Split Testing If you don’t know when or where your users are leaving, then...        ">
                                                    Here are 3 strategies you should...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by splinterteal" class="hp-author-avatar-lnk"
                                                       href="/author/splinterteal">
                                                        <img src="https://www.gravatar.com/avatar/8851c1b18e35ccee0bac08cc9f234195?s=48"
                                                             alt="splinterteal" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by splinterteal" href="/author/splinterteal">splinterteal</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          7 days ago        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/6-best-browsers-for-developers-in-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-1024x563.png"
                                                 class="article-post-img wp-post-image" alt="6 Best Browsers for Developers in 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-1024x563.png 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-300x165.png 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-768x422.png 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/6-best-browsers-for-developers-in-2020/"
                                                       class="anim-link">6 Best Browsers for Developers in 2020</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           On the surface, web browsers seem very similar. They all provide you with a relatively straightforward way to get online and search for the content that you need.&nbsp; However, the more time you spend building your skills as a designer/developer, the more you’ll recognize the need for a unique kind of browsing experience.&nbsp;Fortunately, we’ve found some of the best browsers for web developers, to get you started. Let’s take a look at what...        ">
                                                    On the surface, web browsers seem very...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Rebekah Carter" class="hp-author-avatar-lnk"
                                                       href="/author/Rebekah-Carter">
                                                        <img src="https://www.gravatar.com/avatar/f52deb08bc37ec4a2ab225001195c7d8?s=48"
                                                             alt="Rebekah Carter" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Rebekah Carter" href="/author/Rebekah-Carter">Rebekah Carter</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 19, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/the-latest-research-for-web-designers-february-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="The Latest Research for Web Designers, February 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/the-latest-research-for-web-designers-february-2020/"
                                                       class="anim-link">The Latest Research for Web Designers, February 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    In the following roundup of the latest research for web designers, I’ve included reports and
                                                    surveys that shed light on: The battle between mobile and desktop,&nbsp;Why so many websites keep
                                                    getting hacked,&nbsp;What’s keeping ecommerce business owners awake at night, and&nbsp;What Google
                                                    is now saying about mobile-first indexing. Hootsuite Puts a Spotlight on Mobile Although Hootsuite
                                                    is a social media marketing tool, its Digital 2020 report...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk"
                                                       href="/author/Suzanne-Scacca">
                                                        <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48"
                                                             alt="Suzanne Scacca" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 17, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="sidebar">


                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-5778786047058798"
                             data-ad-slot="6337423170"></ins>
                        <script>
                            try {
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            } catch (ex) {
                            }
                        </script>


                    </div>

                </div>
            </div>

            <div class="content-block-w">


                <div class="popular-posts-block">


                    <div class="pop-block-title"><span>Popular posts</span></div>

                    <div class="pop-block-diline"></div>

                    <div class="d-flex flex-row pop-posts-items">

                    </div>
                </div>

            </div>
            <div class="content-block hp-content">


                <div class="wrapper">
                    <div class="content">

                        <!--<div class="d-flex flex-column flex-wrap main-list-row mlr-1">-->
                        <div class="d-flex flex-row flex-wrap hp-list-row list-list-row llr-1">

                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-10-2020-february-16-2020/">
                                            <img width="842" height="480"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1024x584.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="Popular design news of the week: February 10, 2020 - February 16, 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-768x438.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to News" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-10-2020-february-16-2020/"
                                                       class="anim-link">Popular Design News of the Week: February 10, 2020 - February 16, 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Every week users submit a lot of interesting stuff on our sister site Webdesigner News,
                                                    highlighting great content from around the web that can be of interest to web designers.&nbsp; The
                                                    best way to keep track of all the great stories and news being posted is simply to check out the
                                                    Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of
                                                    the most popular designer news&nbsp;that we curated from the past week. Note...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                                       href="/author/Cameron-Chapman">
                                                        <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48"
                                                             alt="Cameron Chapman" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 16, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/5-pitfalls-of-user-generated-content-and-how-to-avoid-them/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-1024x563.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="5 Pitfalls of User-Generated Content (And How to Avoid Them)"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Content Strategy" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/content-strategy/">Content Strategy</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/5-pitfalls-of-user-generated-content-and-how-to-avoid-them/"
                                                       class="anim-link">5 Pitfalls of User-Generated Content (And How to Avoid Them)</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           It brings with it a host of benefits. UGC can greatly increase engagement with websites, as well as shareability and authenticity. Of course, along with benefits are a host of pitfalls, from having to take the time to moderate content, to establishing an engaged community to submit the content in the first place. It’s important to know the pitfalls of user generated content and how they can be avoided. With a clear strategy, and contingency...        "></div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Natasha Colyer" class="hp-author-avatar-lnk"
                                                       href="/author/Natasha-Colyer">
                                                        <img src="https://www.gravatar.com/avatar/c7eb9314e7d8a38477335d4e455a79d2?s=48"
                                                             alt="Natasha Colyer" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Natasha Colyer" href="/author/Natasha-Colyer">Natasha Colyer</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 13, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/5-web-design-trends-for-2020-that-are-here-to-stay-with-us/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-1024x563.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="5 Web Design Trends For 2020 That Are Here To Stay With Us"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Sponsored" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/sponsored/">Sponsored</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/5-web-design-trends-for-2020-that-are-here-to-stay-with-us/"
                                                       class="anim-link">5 Web Design Trends For 2020 That Are Here To Stay With Us</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           We are always looking for ways to improve our skills and services and what we create. Sometimes that desire to improve is a conscious one. Most of the time it’s in the back of our minds, yet active. Short term results can be OK, but good long term results are what you want if you are to grow in your profession. In terms of web design, that means subscribing to, and adhering to, design trends that have staying power. You might have to stray from your...        "></div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by WebdesignerDepot Staff" class="hp-author-avatar-lnk"
                                                       href="/author/WebdesignerDepot-Staff">
                                                        <img src="https://www.gravatar.com/avatar/d12a9427abe9369fb2a4815fdc0d7ca7?s=48"
                                                             alt="WebdesignerDepot Staff" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by WebdesignerDepot Staff" href="/author/WebdesignerDepot-Staff">WDD Staff</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 12, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/exciting-new-tools-for-designers-february-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="Exciting New Tools for Designers, February 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/exciting-new-tools-for-designers-february-2020/"
                                                       class="anim-link">Exciting New Tools for Designers, February 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Are you starting 2020 off on the right foot? How about keeping up with those resolutions to learn
                                                    or try something new? Either way, you’re in luck. This roundup is packed with new tools to help
                                                    you through projects or learn new tricks to enhance your skillset. Here’s what’s new for designers
                                                    this month. Calcolor Calcolor is a color tool that provides deeper information and meaning for
                                                    every color in your palette so you can make better color...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Carrie Cousins" class="hp-author-avatar-lnk"
                                                       href="/author/Carrie-Cousins">
                                                        <img src="https://www.gravatar.com/avatar/bb0904c788fc7b53d870719f0334fbdc?s=48"
                                                             alt="Carrie Cousins" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Carrie Cousins" href="/author/Carrie-Cousins">Carrie Cousins</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 10, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/how-to-deal-with-confrontational-feedback/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="How to Deal with Confrontational Feedback"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Business &amp; Tech" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/business-tech/">Business &amp; Tech</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/how-to-deal-with-confrontational-feedback/"
                                                       class="anim-link">How to Deal with Confrontational Feedback</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           Sadly, some clients can be just as sensitive, and triggered as online trolls; You recommend an update to a logo they designed themselves (even though you didn’t know that at the time); You disagree with their suggestion that paying for backlinks is a legit marketing strategy; You ask them to clarify what “I don’t like it” means in response to the mockups you delivered. Before you know it, they’re providing irrelevant feedback, slinging...        ">
                                                    Sadly, some clients can be just as...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk"
                                                       href="/author/Suzanne-Scacca">
                                                        <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48"
                                                             alt="Suzanne Scacca" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          Feb. 07, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/3-lessons-ux-designers-can-take-from-netflix/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="3 Lessons UX Designers Can Take from Netflix"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to User Experience" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/user-experience/">User Experience</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/3-lessons-ux-designers-can-take-from-netflix/"
                                                       class="anim-link">3 Lessons UX Designers Can Take From Netflix</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           If we look at this from a design perspective, there’s definitely something about the way the user experiences are designed that makes them more attractive than other movie or TV viewing options. Especially Netflix. Today, I want to put the spotlight on Netflix and give you 3 lessons you can take away from the platform’s design and features. 1. Make Onboarding Painless Obviously, Netflix is a household name, so it doesn’t need to mince...        ">
                                                    If we look at this from a design...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk"
                                                       href="/author/Suzanne-Scacca">
                                                        <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48"
                                                             alt="Suzanne Scacca" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          Feb. 05, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="sidebar">
                        <div id="sb-bsap-rects-ads">


                            <div class="bsads-300">
                                <!-- Tag ID: WebDesignerDepot_300x250_sidebar_2 -->
                                <div align="center" id="WebDesignerDepot_300x250_sidebar_2">
                                    <script data-cfasync="false" type="text/javascript">
                                        freestar.queue.push(function () {
                                            googletag.display('WebDesignerDepot_300x250_sidebar_2');
                                        });
                                    </script>
                                    <div id="google_ads_iframe_/15184186/WebDesignerDepot_300x250_sidebar_2_0__container__"
                                         style="border: 0pt none; width: 300px; height: 250px;"></div>
                                </div>
                            </div>


                            <div class="bsads-300">
                                <!-- Tag ID: WebDesignerDepot_300x250_sidebar_1 -->
                                <div align="center" id="WebDesignerDepot_300x250_sidebar_1">
                                    <script data-cfasync="false" type="text/javascript">
                                        freestar.queue.push(function () {
                                            googletag.display('WebDesignerDepot_300x250_sidebar_1');
                                        });
                                    </script>
                                    <div id="google_ads_iframe_/15184186/WebDesignerDepot_300x250_sidebar_1_0__container__"
                                         style="border: 0pt none; width: 300px; height: 250px;"></div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="content-block-w">
                <div class="popular-posts-block">

                    <a class="pop-block-title" href="/category/freebies"><span>Popular freebies</span></a>

                    <div class="d-flex flex-row pop-posts-items">

                        <article class="article-diagonal-post adp-6">

                            <div class="adp-content" data-width="226.188" style="width: 226.188px;">

                                <a class="adp-img" href="https://www.webdesignerdepot.com/2019/03/free-download-sweet-buttermilk-font/">
                                    <img width="842" height="562" src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/003-1-1024x683.jpg"
                                         class="article-post-img wp-post-image vishi" alt="Free Download: Sweet Buttermilk Font"
                                         srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/003-1-1024x683.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/003-1-300x200.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/003-1-768x512.jpg 768w"
                                         sizes="(max-width: 842px) 100vw, 842px">


                                    <span class="adp-img-stub"
                                          style="background-image: url(&quot;https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/003-1-1024x683.jpg&quot;);"></span></a>

                                <div class="article-post-info-wrap">
                                    <div class="article-post-info">

                                        <div class="article-post-info-cont" style="max-width: 216.188px;">


                                            <h2 class="article-post-title">
                                                <a href="https://www.webdesignerdepot.com/2019/03/free-download-sweet-buttermilk-font/"
                                                   class="anim-link">Free Download: Sweet Buttermilk Font</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article>
                        <article class="article-diagonal-post adp-6">

                            <div class="adp-content" data-width="226.188" style="width: 226.188px;">

                                <a class="adp-img" href="https://www.webdesignerdepot.com/2019/04/free-download-julietta-messie/">
                                    <img width="842" height="413"
                                         src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/julietta-1024x502.jpg"
                                         class="article-post-img wp-post-image vishi" alt="Free Download: Julietta Messie Font"
                                         srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/julietta-1024x502.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/julietta-300x147.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/julietta-768x376.jpg 768w"
                                         sizes="(max-width: 842px) 100vw, 842px">


                                    <span class="adp-img-stub"
                                          style="background-image: url(&quot;https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/julietta-1024x502.jpg&quot;);"></span></a>

                                <div class="article-post-info-wrap">
                                    <div class="article-post-info">

                                        <div class="article-post-info-cont" style="max-width: 216.188px;">


                                            <h2 class="article-post-title">
                                                <a href="https://www.webdesignerdepot.com/2019/04/free-download-julietta-messie/" class="anim-link">Free
                                                    Download: Julietta Messie Font</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article>
                        <article class="article-diagonal-post adp-6">

                            <div class="adp-content" data-width="226.188" style="width: 226.188px;">

                                <a class="adp-img" href="https://www.webdesignerdepot.com/2019/05/free-download-rose-text-effect/">
                                    <img width="842" height="562" src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose-1024x683.jpg"
                                         class="article-post-img wp-post-image vishi" alt="Free Download: Rose Text Effect"
                                         srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose-1024x683.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose-300x200.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose-768x512.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose.jpg 1200w"
                                         sizes="(max-width: 842px) 100vw, 842px">


                                    <span class="adp-img-stub"
                                          style="background-image: url(&quot;https://www.webdesignerdepot.com/cdn-origin/uploads/2019/05/rose-1024x683.jpg&quot;);"></span></a>

                                <div class="article-post-info-wrap">
                                    <div class="article-post-info">

                                        <div class="article-post-info-cont" style="max-width: 216.188px;">


                                            <h2 class="article-post-title">
                                                <a href="https://www.webdesignerdepot.com/2019/05/free-download-rose-text-effect/" class="anim-link">Free
                                                    Download: Rose Text Effect</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article>
                        <article class="article-diagonal-post adp-6">

                            <div class="adp-content" data-width="226.188" style="width: 226.188px;">

                                <a class="adp-img" href="https://www.webdesignerdepot.com/2019/03/free-download-melvis-outline-melvis-rough/">
                                    <img width="842" height="562" src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/m1-1-1024x683.jpg"
                                         class="article-post-img wp-post-image vishi" alt="Free Download: Melvis Outline &amp; Melvis Rough"
                                         srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/m1-1-1024x683.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/m1-1-300x200.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/m1-1-768x512.jpg 768w"
                                         sizes="(max-width: 842px) 100vw, 842px">


                                    <span class="adp-img-stub"
                                          style="background-image: url(&quot;https://www.webdesignerdepot.com/cdn-origin/uploads/2019/03/m1-1-1024x683.jpg&quot;);"></span></a>

                                <div class="article-post-info-wrap">
                                    <div class="article-post-info">

                                        <div class="article-post-info-cont" style="max-width: 216.188px;">


                                            <h2 class="article-post-title">
                                                <a href="https://www.webdesignerdepot.com/2019/03/free-download-melvis-outline-melvis-rough/"
                                                   class="anim-link">Free Download: Melvis Outline &amp; Melvis Rough</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article>
                        <article class="article-diagonal-post adp-6">

                            <div class="adp-content" data-width="226.188" style="width: 226.188px;">

                                <a class="adp-img" href="https://www.webdesignerdepot.com/2019/04/free-download-abstract-business-cards/">
                                    <img width="842" height="508"
                                         src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract-1024x618.jpg"
                                         class="article-post-img wp-post-image vishi" alt="Free Download: Abstract Business Cards"
                                         srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract-1024x618.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract-300x181.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract-768x463.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract.jpg 1160w"
                                         sizes="(max-width: 842px) 100vw, 842px">


                                    <span class="adp-img-stub"
                                          style="background-image: url(&quot;https://www.webdesignerdepot.com/cdn-origin/uploads/2019/04/abstract-1024x618.jpg&quot;);"></span></a>

                                <div class="article-post-info-wrap">
                                    <div class="article-post-info">

                                        <div class="article-post-info-cont" style="max-width: 196.188px;">


                                            <h2 class="article-post-title">
                                                <a href="https://www.webdesignerdepot.com/2019/04/free-download-abstract-business-cards/"
                                                   class="anim-link">Free Download: Abstract Business Cards</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article>
                    </div>
                </div>
            </div>
            <div class="content-block hp-content">


                <div class="wrapper">
                    <div class="content">

                        <!--<div class="d-flex flex-column flex-wrap main-list-row mlr-2">-->
                        <div class="d-flex flex-row flex-wrap hp-list-row list-list-row llr-0">

                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/02/3-essential-design-trends-february-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="3 Essential Design Trends, February 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp;
                                                        Inspiration</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/02/3-essential-design-trends-february-2020/"
                                                       class="anim-link">3 Essential Design Trends, February 2020</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           Designers are embracing big, bold concepts with oversized elements, bright color, and even a little rule-breaking. (The best part? Most of these trends seem to overlap somewhat.) Here’s what’s trending in design this month. Homepage Headline Heroes Homepage hero areas are shifting again from website entryways with plenty of text, CTAs, and options for users, to simple displays with big headlines (and maybe not much else). Use of oversized...        ">
                                                    Designers are embracing big, bold...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Carrie Cousins" class="hp-author-avatar-lnk"
                                                       href="/author/Carrie-Cousins">
                                                        <img src="https://www.gravatar.com/avatar/bb0904c788fc7b53d870719f0334fbdc?s=48"
                                                             alt="Carrie Cousins" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Carrie Cousins" href="/author/Carrie-Cousins">Carrie Cousins</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 03, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/20-freshest-web-designs-january-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="20 Freshest Web Designs, January 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp;
                                                        Inspiration</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/20-freshest-web-designs-january-2020/"
                                                       class="anim-link">20 Freshest Web Designs, January 2020</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           January 2020 is picking up where 2019 left off, with lots of animation and even more bold, bright color schemes. We’re also seeing an unusual number of luxury sites this month, and as always there’s a strong set of startups trying to break into the market. Enjoy! Plink To take on giants like PayPal, you need a compelling brand and a simple message, that can also wow with its first impression. Plink hits the nail on the head with its 3D animation....        ">
                                                    January 2020 is picking up where 2019...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Paddi MacDonnell" class="hp-author-avatar-lnk"
                                                       href="/author/Paddi-MacDonnell">
                                                        <img src="https://www.gravatar.com/avatar/9dcff61f2c14cbad17b2333648c60a59?s=48"
                                                             alt="Paddi MacDonnell" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Paddi MacDonnell" href="/author/Paddi-MacDonnell">Paddi MacDonnell</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          Jan. 30, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/14-wordpress-themes-you-should-start-using-in-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="14 WordPress Themes You Should Start Using in 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Sponsored" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/sponsored/">Sponsored</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/14-wordpress-themes-you-should-start-using-in-2020/"
                                                       class="anim-link">14 WordPress Themes You Should Start Using in 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Even web designers who prefer to design websites from scratch eventually look for frameworks, past
                                                    work, or shortcuts. That way they speed up their workflow. And there are also those times when
                                                    it’s hard to find the right template. You need help to create a special page and you feel
                                                    compelled to build it from scratch. It only makes sense to take full advantage of drag and drop,
                                                    front-end editing, design modules, customizable demos, and other...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by WebdesignerDepot Staff" class="hp-author-avatar-lnk"
                                                       href="/author/WebdesignerDepot-Staff">
                                                        <img src="https://www.gravatar.com/avatar/d12a9427abe9369fb2a4815fdc0d7ca7?s=48"
                                                             alt="WebdesignerDepot Staff" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by WebdesignerDepot Staff" href="/author/WebdesignerDepot-Staff">WDD Staff</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 28, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/how-to-keep-designing-when-tragedy-strikes/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="How to Keep Designing When Tragedy Strikes"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Business &amp; Tech" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/business-tech/">Business &amp; Tech</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/how-to-keep-designing-when-tragedy-strikes/"
                                                       class="anim-link">How to Keep Designing When Tragedy Strikes</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           If it weren’t for bad luck, I’d have no luck at all! We all have personal tragedies. Sometimes those tragedies are more than anyone could handle, and that’s when you encounter some very basic, intense emotions. For some it’s the fiercely stark task of overcoming, shutting out all else; for others, it’s thoughts of helplessness. Unfortunately, most people will run the gamut of these polar emotions. I’ve been through all this and...        ">
                                                    If it weren’t for bad luck, I’d have no luck...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Speider Schneider" class="hp-author-avatar-lnk"
                                                       href="/author/Speider-Schneider">
                                                        <img src="https://www.gravatar.com/avatar/9f63c1a8d993666c929e4bd850a8d1cd?s=48"
                                                             alt="Speider Schneider" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Speider Schneider" href="/author/Speider-Schneider">Speider Schneider</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          Jan. 27, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-20-2020-january-26-2020/">
                                            <img width="842" height="479"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-1024x583.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="Popular design news of the week: January 20, 2020 - January 26, 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-1024x583.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-768x437.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3.jpg 1080w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to News" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-20-2020-january-26-2020/"
                                                       class="anim-link">Popular Design News of the Week: January 20, 2020 - January 26, 2020</a>
                                                </h2>


                                                <div class="hp-excerpt" data-init-text="
           Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from the past week. Note...        "></div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                                       href="/author/Cameron-Chapman">
                                                        <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48"
                                                             alt="Cameron Chapman" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                                    <span class="hpppi-separator" style="display: none;">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time" style="display: none;">
          <span class="icon-clock-1"></span>
          Jan. 26, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/10-best-wordpress-plugins-for-digital-marketing/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="10 Best WordPress Plugins for Digital Marketing"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/10-best-wordpress-plugins-for-digital-marketing/"
                                                       class="anim-link">10 Best WordPress Plugins for Digital Marketing</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Currently somewhere in the region of 34% of websites are built with WordPress, it’s the most
                                                    utilized CMS (Content Management System) in the world. Part of that popularity stems from its
                                                    underlying technologies—PHP and MySQL—which allows for dynamic content in posts, but also enables
                                                    a rich ecosystem of plugins. One of the trickiest aspects of launching a website is its digital
                                                    marketing, and so naturally there are a plethora of WordPress...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Daniel Segun" class="hp-author-avatar-lnk"
                                                       href="/author/Daniel-Segun">
                                                        <img src="https://www.gravatar.com/avatar/b1b3ff839b06c1fe87e61da30ee5b2a1?s=48"
                                                             alt="Daniel Segun" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Daniel Segun" href="/author/Daniel-Segun">Daniel Segun</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 24, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="sidebar">

                        <div class="bsads-300">

                            <!-- Tag ID: WDD_300x250 -->
                            <div align="center" id="WDD_300x250">
                                <script data-cfasync="false" type="text/javascript">
                                    freestar.queue.push(function () {
                                        googletag.display('WDD_300x250');
                                    });
                                </script>
                                <div id="google_ads_iframe_/15184186/WDD_300x250_0__container__"
                                     style="border: 0pt none; width: 300px; height: 250px;"></div>
                            </div>

                        </div>
                        <div id="sidebar-poll">
                            <script src="https://www.webdesignerdepot.com/wp-content/plugins/wp-fs-polls/widget/poll.js.php" async="true" data-id="97"
                                    data-sba="true" data-block-id="sb-poll-97"></script>
                            <div id="sb-poll-97">
                                <link rel="stylesheet" type="text/css"
                                      href="https://www.webdesignerdepot.com/wp-content/plugins/wp-fs-polls/css/styles.css?v=12">

                                <div class="empoll_box">
                                    <div class="empollsouter">

                                        <div class="empollheader">
                                            <span class="empoll_question">Is Neumorphism A Design Trend With Staying Power?</span>

                                            <div class="empollcta">
                                                <h2>
                                                    <span class="empollcta_vote">Vote!</span>
                                                    <span class="empollcta_here">Here</span>
                                                </h2>
                                                <div class="empollcta_arrow"></div>
                                            </div>

                                        </div>

                                        <div class="empoll_box_content">

                                            <!-- two-choice poll-->
                                            <ul class="pollvotes" style="display:none;">
                                                <li class="polloption polloption1 ">

                                                </li>
                                                <li class="pollor">Or</li>
                                                <li class="polloption polloption2">

                                                </li>
                                            </ul>

                                            <div class="pollimgbox" style="display:none;">
                                                <ul class="pollimgvotes">
                                                    <li>
                                                        <a href="javascript:;" class="pollimgvote pollimgvote1"></a>
                                                        <div class="pollimgresult pollimgresult1 " style="display:none;">
                                                            <span class="votecountimg">Voted<span class="votecountimgchk"></span></span>
                                                            <span class="votecount1"></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" class="pollimgvote pollimgvote2"></a>
                                                        <div class="pollimgresult pollimgresult2 " style="display:none;"> <!-- pollimgresultvoted -->
                                                            <span class="votecountimg">Voted<span class="votecountimgchk"></span></span>
                                                            <span class="votecount2"></span>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>

                                            <!-- many-choice poll-->

                                            <div class="sharembed" style="display:none;">
                                                <div class="sharembedcont">
                                                    <a href="javascript:;" class="js-link-cancel">Cancel</a>
                                                    <h3 class="shareh3"></h3>
                                                    <ul class="sharelinks">
                                                        <li class="shareli">
                                                            <a href="#" target="_blank" class="sharea twshare" data-share-type="twitter">
                                                                <span></span>Tweet
                                                            </a>
                                                        </li>
                                                        <li class="shareli">
                                                            <a href="#" target="_blank" class="sharea fbshare" data-share-type="facebook">
                                                                <span></span>Share
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                            <ul class="multiul polloption-4 ">
                                                <li class="multili group">
                                                    <div data-poll-choice-sort-index="1" class="multilia multilia1">
                                                        <div class="multiimgwrap multiimgwrap1">
                                                            <div class="multiimg multiimg1"
                                                                 style="background-image: url('https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/neu-what.jpg');">
                                                                <p class="multicheck multicheck1">80</p></div>
                                                        </div>
                                                        <p class="multitext">Neu… what?</p>
                                                        <div class="pollimgresultmulti"></div>
                                                    </div>
                                                </li>
                                                <li class="multili group">
                                                    <div data-poll-choice-sort-index="2" class="multilia multilia2">
                                                        <div class="multiimgwrap multiimgwrap2">
                                                            <div class="multiimg multiimg2"
                                                                 style="background-image: url('https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/it-was-for-about-a-week.jpg');">
                                                                <p class="multicheck multicheck2">63</p></div>
                                                        </div>
                                                        <p class="multitext">It was, for about a week</p>
                                                        <div class="pollimgresultmulti"></div>
                                                    </div>
                                                </li>
                                                <li class="multili group">
                                                    <div data-poll-choice-sort-index="3" class="multilia multilia3">
                                                        <div class="multiimgwrap multiimgwrap3">
                                                            <div class="multiimg multiimg3"
                                                                 style="background-image: url('https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/it-s-just-skeuomorphism-isn-t-it.jpg');">
                                                                <p class="multicheck multicheck3">35</p></div>
                                                        </div>
                                                        <p class="multitext">It’s just Skeuomorphism isn’t it?</p>
                                                        <div class="pollimgresultmulti"></div>
                                                    </div>
                                                </li>
                                                <li class="multili group">
                                                    <div data-poll-choice-sort-index="4" class="multilia multilia4">
                                                        <div class="multiimgwrap multiimgwrap4">
                                                            <div class="multiimg multiimg4"
                                                                 style="background-image: url('https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/ignore-the-haters-it-s-awesome.jpg');">
                                                                <p class="multicheck multicheck4">27</p></div>
                                                        </div>
                                                        <p class="multitext">Ignore the haters, it’s awesome</p>
                                                        <div class="pollimgresultmulti"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content-block hp-content">


                <div class="wrapper">
                    <div class="content">

                        <!--<div class="d-flex flex-column flex-wrap main-list-row mlr-3">-->
                        <div class="d-flex flex-row flex-wrap hp-list-row list-list-row llr-1">

                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/what-does-5g-mean-for-web-designers/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="What Does 5G Mean for Web Designers?"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Interactive Design" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/interactive-design/">Interactive Design</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/what-does-5g-mean-for-web-designers/"
                                                       class="anim-link">What Does 5G Mean for Web Designers?</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    However, 5G isn’t just set to have an impact on mobile browsing. Changes in mobile connectivity
                                                    will have an impact on web design too. As a web designer, it’s up to you to consider how the
                                                    latest connectivity tools will impact the way users browse the web. Additionally, you may find
                                                    that you have more space to explore the advantages of using larger content (like 4K video) within
                                                    a client’s website. Here’s how you can prepare for the fifth...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Rebekah Carter" class="hp-author-avatar-lnk"
                                                       href="/author/Rebekah-Carter">
                                                        <img src="https://www.gravatar.com/avatar/f52deb08bc37ec4a2ab225001195c7d8?s=48"
                                                             alt="Rebekah Carter" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Rebekah Carter" href="/author/Rebekah-Carter">Rebekah Carter</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 22, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/the-latest-research-for-web-designers-january-2020/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="The Latest Research for Web Designers, January 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to User Experience" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/user-experience/">User Experience</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/the-latest-research-for-web-designers-january-2020/"
                                                       class="anim-link">The Latest Research for Web Designers, January 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    One of the most powerful tools we have in web design is consumer and industry data. It’s like a
                                                    gauge that tells us whether we’re still heading in the right direction or it’s time to change
                                                    course and adopt a new strategy or approach. Unless you’re combing the web for the latest news and
                                                    reports in the areas of design, marketing, and SEO, it’s easy to miss this pertinent data. So, in
                                                    this roundup, I’m going to take care of that for you....
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk"
                                                       href="/author/Suzanne-Scacca">
                                                        <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48"
                                                             alt="Suzanne Scacca" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 20, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-13-2020-january-19-2020/">
                                            <img width="842" height="480"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-1024x584.jpg"
                                                 class="article-post-img wp-post-image"
                                                 alt="Popular design news of the week: January 13, 2020 - January 19, 2020"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-768x438.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2.jpg 1519w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to News" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-13-2020-january-19-2020/"
                                                       class="anim-link">Popular Design News of the Week: January 13, 2020 - January 19, 2020</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Every week users submit a lot of interesting stuff on our sister site Webdesigner News,
                                                    highlighting great content from around the web that can be of interest to web designers.&nbsp; The
                                                    best way to keep track of all the great stories and news being posted is simply to check out the
                                                    Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of
                                                    the most popular designer news&nbsp;that we curated from the past week. Note...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                                       href="/author/Cameron-Chapman">
                                                        <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48"
                                                             alt="Cameron Chapman" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 19, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                            <article class="list-post d-flex">

                                <div class="article-hp-content-wrap">
                                    <div class="article-hp-content d-flex flex-wrap">


                                        <a class="main-col-img"
                                           href="https://www.webdesignerdepot.com/2020/01/can-best-practice-replace-design-research/">
                                            <img width="842" height="463"
                                                 src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-1024x563.jpg"
                                                 class="article-post-img wp-post-image" alt="Can Best Practice Replace Design Research?"
                                                 srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-768x422.jpg 768w"
                                                 sizes="(max-width: 842px) 100vw, 842px">

                                        </a>


                                        <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                            <div class="main-col-post-info-content">

                                                <div class="hp-cat">
                                                    <a data-tooltip="See all posts related to Strategy &amp; Workflow" class="hp-category"
                                                       href="https://www.webdesignerdepot.com/category/strategy-workflow/">Strategy &amp; Workflow</a>
                                                </div>

                                                <h2 class="main-post-title">
                                                    <a href="https://www.webdesignerdepot.com/2020/01/can-best-practice-replace-design-research/"
                                                       class="anim-link">Can Best Practice Replace Design Research?</a>
                                                </h2>


                                                <div class="hp-excerpt">
                                                    Heart-warming or not, co-creation with a client—the utopian ideal of shared vision—has its
                                                    drawbacks. There are only so many times you can hear the words “brand strategy” before actually
                                                    chewing your own face off. In the age of Wordpress, Drupal and, dare I say it, Wix, it’s never
                                                    been more tempting to pay lip-service to research and consultation. Instead of building a
                                                    principles framework from scratch, why not roll out something...
                                                </div>


                                                <div class="hp-post-pub-info">

                                                    <a data-tooltip="See all posts by Chris Crawshaw" class="hp-author-avatar-lnk"
                                                       href="/author/Chris-Crawshaw">
                                                        <img src="https://www.gravatar.com/avatar/3d1bc86bbea28e5b1cc5be00ea22c6fb?s=48"
                                                             alt="Chris Crawshaw" class="hpppi-author-avatar">
                                                    </a>

                                                    <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Chris Crawshaw" href="/author/Chris-Crawshaw">Chris Crawshaw</a>
                </span>
                                                    <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                                    <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 16, 2020        </span>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- hp-contents-blocks -->

        <div class="pagination-wrap">
            <ul class="w-pagination">
                <li><a href="https://www.webdesignerdepot.com/page/2/" class="navbutton nb-next"><span>Next <span
                                    class="icon-right-dir"></span></span></a></li>
            </ul>

        </div>

    </div> <!-- main-content -->


</div>

<div id="hp-mb">

    <div class="wrapper">
        <div class="content">


            <div class="d-flex flex-row flex-wrap list-list-row llr-tw">

                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/5-simple-responsive-blunders-and-how-to-avoid-them/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_rwd-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="5 Simple Responsive Blunders (And How To Avoid Them)"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_rwd-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_rwd-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_rwd-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Interactive Design" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/interactive-design/">Interactive Design</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/5-simple-responsive-blunders-and-how-to-avoid-them/"
                                           class="anim-link">5 Simple Responsive Blunders (And How To Avoid Them)</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Nearly 49% of all the web traffic worldwide originates from mobile devices (excluding tablets). If you don’t design mobile-friendly websites, you’ll likely lose out on this massive chunk of your target audience. Additionally if you wish to improve your SEO, you can’t afford to ignore smartphones; Google gives priority to mobiles with mobile-first indexing. All of this calls for responsive web design through which your website’s...        ">
                                        Nearly 49% of all the web traffic worldwide originates from mobile devices (excluding tablets). If you don’t
                                        design mobile-friendly websites, you’ll likely lose out on this massive chunk of your target audience.
                                        Additionally if you wish to improve your SEO, you can’t afford to ignore smartphones; Google gives priority to
                                        mobiles with mobile-first indexing. All of this calls for responsive web design through which your
                                        website’s...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Josip Mlinarić" class="hp-author-avatar-lnk" href="/author/Josip-Mlinari-">
                                            <img src="https://www.gravatar.com/avatar/d3398d3a4451280e0cc70aa87faf1793?s=48" alt="Josip Mlinarić"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Josip Mlinarić" href="/author/Josip-Mlinari-">Josip Mlinarić</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          4 hrs ago        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/can-design-systems-work-for-freelancers/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="Can Design Systems Work for Freelancers?"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_designsystems-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Strategy &amp; Workflow" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/strategy-workflow/">Strategy &amp; Workflow</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/can-design-systems-work-for-freelancers/" class="anim-link">Can
                                            Design Systems Work for Freelancers?</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           There’s a lot riding on your shoulders as a freelance designer. You have to play the part of salesperson, project manager, web designer, accountant, and more. That’s why it’s critical to develop more efficient ways to work while maximizing results. One way that agencies and even small teams of designers do this is through design systems. By taking the time to create a collection of design standards, reusable components, and documentation,...        ">
                                        There’s a lot riding on your shoulders as a freelance designer. You have to play the part of salesperson,
                                        project manager, web designer, accountant, and more. That’s why it’s critical to develop more efficient ways
                                        to work while maximizing results. One way that agencies and even small teams of designers do this is through
                                        design systems. By taking the time to create a collection of design standards, reusable components, and
                                        documentation,...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk" href="/author/Suzanne-Scacca">
                                            <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48" alt="Suzanne Scacca"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          2 days ago        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/introducing-15-best-new-portfolios-february-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="Introducing 15 Best New Portfolios, February 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_folios-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp; Inspiration</a>
                                    </div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/introducing-15-best-new-portfolios-february-2020/"
                                           class="anim-link">Introducing 15 Best New Portfolios, February 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        Each month we publish a roundup of the best new portfolios, launched in the previous four weeks, by
                                        freelancers, agencies, and other creative professionals. This month’s edition is packed with color and
                                        animation. Almost every site in this list animates some part of its interface, and many are dependent on
                                        animation entirely. You’ll find tons of great interaction design, but the real trend in 2020 is that
                                        personality is making its way...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Paddi MacDonnell" class="hp-author-avatar-lnk"
                                           href="/author/Paddi-MacDonnell">
                                            <img src="https://www.gravatar.com/avatar/9dcff61f2c14cbad17b2333648c60a59?s=48" alt="Paddi MacDonnell"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Paddi MacDonnell" href="/author/Paddi-MacDonnell">Paddi MacDonnell</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          4 days ago        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-17-2020-february-23-2020/">
                                <img width="842" height="480"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-1024x584.jpg"
                                     class="article-post-img wp-post-image"
                                     alt="Popular design news of the week: February 17, 2020 - February 23, 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1-768x438.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1.jpg 1200w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to News" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-17-2020-february-23-2020/"
                                           class="anim-link">Popular Design News of the Week: February 17, 2020 - February 23, 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from the past week. Note...        ">
                                        Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great
                                        content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all
                                        the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you
                                        missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from
                                        the past week. Note...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                           href="/author/Cameron-Chapman">
                                            <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48" alt="Cameron Chapman"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          5 days ago        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/3-strategies-to-follow-when-your-site-is-failing/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="3 Strategies to Follow When Your Site is Failing"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_testing-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Usability &amp; Testing" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/usability-testing/">Usability &amp; Testing</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/3-strategies-to-follow-when-your-site-is-failing/"
                                           class="anim-link">3 Strategies to Follow When Your Site is Failing</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Here are 3 strategies you should consider if your website is struggling. We’ll cover: Web analytics and split testing In-person testing Simplifying your sales process If possible, implement these strategies ahead of time before you run into any issues. I’m going to cover why these strategies are effective and what they are good at resolving. 1. Analytics and Split Testing If you don’t know when or where your users are leaving, then...        ">
                                        Here are 3 strategies you should consider if your website is struggling. We’ll cover: Web analytics and split
                                        testing In-person testing Simplifying your sales process If possible, implement these strategies ahead of time
                                        before you run into any issues. I’m going to cover why these strategies are effective and what they are good
                                        at resolving. 1. Analytics and Split Testing If you don’t know when or where your users are leaving, then...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by splinterteal" class="hp-author-avatar-lnk" href="/author/splinterteal">
                                            <img src="https://www.gravatar.com/avatar/8851c1b18e35ccee0bac08cc9f234195?s=48" alt="splinterteal"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by splinterteal" href="/author/splinterteal">splinterteal</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          7 days ago        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/6-best-browsers-for-developers-in-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-1024x563.png"
                                     class="article-post-img wp-post-image" alt="6 Best Browsers for Developers in 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-1024x563.png 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-300x165.png 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_devbrowsers-768x422.png 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/6-best-browsers-for-developers-in-2020/" class="anim-link">6
                                            Best Browsers for Developers in 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        On the surface, web browsers seem very similar. They all provide you with a relatively straightforward way to
                                        get online and search for the content that you need.&nbsp; However, the more time you spend building your
                                        skills as a designer/developer, the more you’ll recognize the need for a unique kind of browsing experience.&nbsp;Fortunately,
                                        we’ve found some of the best browsers for web developers, to get you started. Let’s take a look at what...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Rebekah Carter" class="hp-author-avatar-lnk" href="/author/Rebekah-Carter">
                                            <img src="https://www.gravatar.com/avatar/f52deb08bc37ec4a2ab225001195c7d8?s=48" alt="Rebekah Carter"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Rebekah Carter" href="/author/Rebekah-Carter">Rebekah Carter</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 19, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/the-latest-research-for-web-designers-february-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="The Latest Research for Web Designers, February 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_stats-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/the-latest-research-for-web-designers-february-2020/"
                                           class="anim-link">The Latest Research for Web Designers, February 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        In the following roundup of the latest research for web designers, I’ve included reports and surveys that shed
                                        light on: The battle between mobile and desktop,&nbsp;Why so many websites keep getting hacked,&nbsp;What’s
                                        keeping ecommerce business owners awake at night, and&nbsp;What Google is now saying about mobile-first
                                        indexing. Hootsuite Puts a Spotlight on Mobile Although Hootsuite is a social media marketing tool, its
                                        Digital 2020 report...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk" href="/author/Suzanne-Scacca">
                                            <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48" alt="Suzanne Scacca"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 17, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-10-2020-february-16-2020/">
                                <img width="842" height="480" src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1024x584.jpg"
                                     class="article-post-img wp-post-image"
                                     alt="Popular design news of the week: February 10, 2020 - February 16, 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured-768x438.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to News" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/popular-design-news-of-the-week-february-10-2020-february-16-2020/"
                                           class="anim-link">Popular Design News of the Week: February 10, 2020 - February 16, 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from the past week. Note...        ">
                                        Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great
                                        content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all
                                        the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you
                                        missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from
                                        the past week. Note...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                           href="/author/Cameron-Chapman">
                                            <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48" alt="Cameron Chapman"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 16, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/5-pitfalls-of-user-generated-content-and-how-to-avoid-them/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="5 Pitfalls of User-Generated Content (And How to Avoid Them)"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/12/featured_contribution-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Content Strategy" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/content-strategy/">Content Strategy</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/5-pitfalls-of-user-generated-content-and-how-to-avoid-them/"
                                           class="anim-link">5 Pitfalls of User-Generated Content (And How to Avoid Them)</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           It brings with it a host of benefits. UGC can greatly increase engagement with websites, as well as shareability and authenticity. Of course, along with benefits are a host of pitfalls, from having to take the time to moderate content, to establishing an engaged community to submit the content in the first place. It’s important to know the pitfalls of user generated content and how they can be avoided. With a clear strategy, and contingency...        ">
                                        It brings with it a host of benefits. UGC can greatly increase engagement with websites, as well as
                                        shareability and authenticity. Of course, along with benefits are a host of pitfalls, from having to take the
                                        time to moderate content, to establishing an engaged community to submit the content in the first place. It’s
                                        important to know the pitfalls of user generated content and how they can be avoided. With a clear strategy,
                                        and contingency...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Natasha Colyer" class="hp-author-avatar-lnk" href="/author/Natasha-Colyer">
                                            <img src="https://www.gravatar.com/avatar/c7eb9314e7d8a38477335d4e455a79d2?s=48" alt="Natasha Colyer"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Natasha Colyer" href="/author/Natasha-Colyer">Natasha Colyer</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 13, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/02/5-web-design-trends-for-2020-that-are-here-to-stay-with-us/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="5 Web Design Trends For 2020 That Are Here To Stay With Us"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_betheme-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Sponsored" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/sponsored/">Sponsored</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/5-web-design-trends-for-2020-that-are-here-to-stay-with-us/"
                                           class="anim-link">5 Web Design Trends For 2020 That Are Here To Stay With Us</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        We are always looking for ways to improve our skills and services and what we create. Sometimes that desire to
                                        improve is a conscious one. Most of the time it’s in the back of our minds, yet active. Short term results can
                                        be OK, but good long term results are what you want if you are to grow in your profession. In terms of web
                                        design, that means subscribing to, and adhering to, design trends that have staying power. You might have to
                                        stray from your...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by WebdesignerDepot Staff" class="hp-author-avatar-lnk"
                                           href="/author/WebdesignerDepot-Staff">
                                            <img src="https://www.gravatar.com/avatar/d12a9427abe9369fb2a4815fdc0d7ca7?s=48"
                                                 alt="WebdesignerDepot Staff" class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by WebdesignerDepot Staff" href="/author/WebdesignerDepot-Staff">WDD Staff</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 12, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/exciting-new-tools-for-designers-february-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="Exciting New Tools for Designers, February 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_new-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/exciting-new-tools-for-designers-february-2020/"
                                           class="anim-link">Exciting New Tools for Designers, February 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Are you starting 2020 off on the right foot? How about keeping up with those resolutions to learn or try something new? Either way, you’re in luck. This roundup is packed with new tools to help you through projects or learn new tricks to enhance your skillset. Here’s what’s new for designers this month. Calcolor Calcolor is a color tool that provides deeper information and meaning for every color in your palette so you can make better color...        ">
                                        Are you starting 2020 off on the right foot? How about keeping up with those resolutions to learn or try
                                        something new? Either way, you’re in luck. This roundup is packed with new tools to help you through projects
                                        or learn new tricks to enhance your skillset. Here’s what’s new for designers this month. Calcolor Calcolor is
                                        a color tool that provides deeper information and meaning for every color in your palette so you can make
                                        better color...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Carrie Cousins" class="hp-author-avatar-lnk" href="/author/Carrie-Cousins">
                                            <img src="https://www.gravatar.com/avatar/bb0904c788fc7b53d870719f0334fbdc?s=48" alt="Carrie Cousins"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Carrie Cousins" href="/author/Carrie-Cousins">Carrie Cousins</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 10, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/how-to-deal-with-confrontational-feedback/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="How to Deal with Confrontational Feedback"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_feedback-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Business &amp; Tech" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/business-tech/">Business &amp; Tech</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/how-to-deal-with-confrontational-feedback/"
                                           class="anim-link">How to Deal with Confrontational Feedback</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Sadly, some clients can be just as sensitive, and triggered as online trolls; You recommend an update to a logo they designed themselves (even though you didn’t know that at the time); You disagree with their suggestion that paying for backlinks is a legit marketing strategy; You ask them to clarify what “I don’t like it” means in response to the mockups you delivered. Before you know it, they’re providing irrelevant feedback, slinging...        ">
                                        Sadly, some clients can be just as sensitive, and triggered as online trolls; You recommend an update to a
                                        logo they designed themselves (even though you didn’t know that at the time); You disagree with their
                                        suggestion that paying for backlinks is a legit marketing strategy; You ask them to clarify what “I don’t like
                                        it” means in response to the mockups you delivered. Before you know it, they’re providing irrelevant feedback,
                                        slinging...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk" href="/author/Suzanne-Scacca">
                                            <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48" alt="Suzanne Scacca"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 07, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/3-lessons-ux-designers-can-take-from-netflix/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="3 Lessons UX Designers Can Take from Netflix"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_netflix-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to User Experience" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/user-experience/">User Experience</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/3-lessons-ux-designers-can-take-from-netflix/"
                                           class="anim-link">3 Lessons UX Designers Can Take From Netflix</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           If we look at this from a design perspective, there’s definitely something about the way the user experiences are designed that makes them more attractive than other movie or TV viewing options. Especially Netflix. Today, I want to put the spotlight on Netflix and give you 3 lessons you can take away from the platform’s design and features. 1. Make Onboarding Painless Obviously, Netflix is a household name, so it doesn’t need to mince...        ">
                                        If we look at this from a design perspective, there’s definitely something about the way the user experiences
                                        are designed that makes them more attractive than other movie or TV viewing options. Especially Netflix.
                                        Today, I want to put the spotlight on Netflix and give you 3 lessons you can take away from the platform’s
                                        design and features. 1. Make Onboarding Painless Obviously, Netflix is a household name, so it doesn’t need to
                                        mince...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk" href="/author/Suzanne-Scacca">
                                            <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48" alt="Suzanne Scacca"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 05, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/02/3-essential-design-trends-february-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="3 Essential Design Trends, February 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/02/featured_trends-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp; Inspiration</a>
                                    </div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/02/3-essential-design-trends-february-2020/" class="anim-link">3
                                            Essential Design Trends, February 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Designers are embracing big, bold concepts with oversized elements, bright color, and even a little rule-breaking. (The best part? Most of these trends seem to overlap somewhat.) Here’s what’s trending in design this month. Homepage Headline Heroes Homepage hero areas are shifting again from website entryways with plenty of text, CTAs, and options for users, to simple displays with big headlines (and maybe not much else). Use of oversized...        ">
                                        Designers are embracing big, bold concepts with oversized elements, bright color, and even a little
                                        rule-breaking. (The best part? Most of these trends seem to overlap somewhat.) Here’s what’s trending in
                                        design this month. Homepage Headline Heroes Homepage hero areas are shifting again from website entryways with
                                        plenty of text, CTAs, and options for users, to simple displays with big headlines (and maybe not much else).
                                        Use of oversized...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Carrie Cousins" class="hp-author-avatar-lnk" href="/author/Carrie-Cousins">
                                            <img src="https://www.gravatar.com/avatar/bb0904c788fc7b53d870719f0334fbdc?s=48" alt="Carrie Cousins"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Carrie Cousins" href="/author/Carrie-Cousins">Carrie Cousins</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Feb. 03, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/20-freshest-web-designs-january-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="20 Freshest Web Designs, January 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_sites-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Community &amp; Inspiration" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/community-inspiration/">Community &amp; Inspiration</a>
                                    </div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/20-freshest-web-designs-january-2020/" class="anim-link">20
                                            Freshest Web Designs, January 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        January 2020 is picking up where 2019 left off, with lots of animation and even more bold, bright color
                                        schemes. We’re also seeing an unusual number of luxury sites this month, and as always there’s a strong set of
                                        startups trying to break into the market. Enjoy! Plink To take on giants like PayPal, you need a compelling
                                        brand and a simple message, that can also wow with its first impression. Plink hits the nail on the head with
                                        its 3D animation....
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Paddi MacDonnell" class="hp-author-avatar-lnk"
                                           href="/author/Paddi-MacDonnell">
                                            <img src="https://www.gravatar.com/avatar/9dcff61f2c14cbad17b2333648c60a59?s=48" alt="Paddi MacDonnell"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Paddi MacDonnell" href="/author/Paddi-MacDonnell">Paddi MacDonnell</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 30, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/01/14-wordpress-themes-you-should-start-using-in-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="14 WordPress Themes You Should Start Using in 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_bawmedia-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Sponsored" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/sponsored/">Sponsored</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/14-wordpress-themes-you-should-start-using-in-2020/"
                                           class="anim-link">14 WordPress Themes You Should Start Using in 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Even web designers who prefer to design websites from scratch eventually look for frameworks, past work, or shortcuts. That way they speed up their workflow. And there are also those times when it’s hard to find the right template. You need help to create a special page and you feel compelled to build it from scratch. It only makes sense to take full advantage of drag and drop, front-end editing, design modules, customizable demos, and other...        ">
                                        Even web designers who prefer to design websites from scratch eventually look for frameworks, past work, or
                                        shortcuts. That way they speed up their workflow. And there are also those times when it’s hard to find the
                                        right template. You need help to create a special page and you feel compelled to build it from scratch. It
                                        only makes sense to take full advantage of drag and drop, front-end editing, design modules, customizable
                                        demos, and other...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by WebdesignerDepot Staff" class="hp-author-avatar-lnk"
                                           href="/author/WebdesignerDepot-Staff">
                                            <img src="https://www.gravatar.com/avatar/d12a9427abe9369fb2a4815fdc0d7ca7?s=48"
                                                 alt="WebdesignerDepot Staff" class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by WebdesignerDepot Staff" href="/author/WebdesignerDepot-Staff">WDD Staff</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 28, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/how-to-keep-designing-when-tragedy-strikes/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="How to Keep Designing When Tragedy Strikes"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_tragedy-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Business &amp; Tech" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/business-tech/">Business &amp; Tech</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/how-to-keep-designing-when-tragedy-strikes/"
                                           class="anim-link">How to Keep Designing When Tragedy Strikes</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           If it weren’t for bad luck, I’d have no luck at all! We all have personal tragedies. Sometimes those tragedies are more than anyone could handle, and that’s when you encounter some very basic, intense emotions. For some it’s the fiercely stark task of overcoming, shutting out all else; for others, it’s thoughts of helplessness. Unfortunately, most people will run the gamut of these polar emotions. I’ve been through all this and...        ">
                                        If it weren’t for bad luck, I’d have no luck at all! We all have personal tragedies. Sometimes those tragedies
                                        are more than anyone could handle, and that’s when you encounter some very basic, intense emotions. For some
                                        it’s the fiercely stark task of overcoming, shutting out all else; for others, it’s thoughts of helplessness.
                                        Unfortunately, most people will run the gamut of these polar emotions. I’ve been through all this and...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Speider Schneider" class="hp-author-avatar-lnk"
                                           href="/author/Speider-Schneider">
                                            <img src="https://www.gravatar.com/avatar/9f63c1a8d993666c929e4bd850a8d1cd?s=48" alt="Speider Schneider"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Speider Schneider" href="/author/Speider-Schneider">Speider Schneider</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 27, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-20-2020-january-26-2020/">
                                <img width="842" height="479"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-1024x583.jpg"
                                     class="article-post-img wp-post-image" alt="Popular design news of the week: January 20, 2020 - January 26, 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-1024x583.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3-768x437.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-3.jpg 1080w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to News" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-20-2020-january-26-2020/"
                                           class="anim-link">Popular Design News of the Week: January 20, 2020 - January 26, 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great
                                        content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all
                                        the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you
                                        missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from
                                        the past week. Note...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                           href="/author/Cameron-Chapman">
                                            <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48" alt="Cameron Chapman"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 26, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/10-best-wordpress-plugins-for-digital-marketing/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="10 Best WordPress Plugins for Digital Marketing"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2019/11/featured_plugins-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Tools &amp; Resources" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/tools-resources/">Tools &amp; Resources</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/10-best-wordpress-plugins-for-digital-marketing/"
                                           class="anim-link">10 Best WordPress Plugins for Digital Marketing</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        Currently somewhere in the region of 34% of websites are built with WordPress, it’s the most utilized CMS
                                        (Content Management System) in the world. Part of that popularity stems from its underlying technologies—PHP
                                        and MySQL—which allows for dynamic content in posts, but also enables a rich ecosystem of plugins. One of the
                                        trickiest aspects of launching a website is its digital marketing, and so naturally there are a plethora of
                                        WordPress...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Daniel Segun" class="hp-author-avatar-lnk" href="/author/Daniel-Segun">
                                            <img src="https://www.gravatar.com/avatar/b1b3ff839b06c1fe87e61da30ee5b2a1?s=48" alt="Daniel Segun"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Daniel Segun" href="/author/Daniel-Segun">Daniel Segun</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 24, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/what-does-5g-mean-for-web-designers/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="What Does 5G Mean for Web Designers?"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_5g-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Interactive Design" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/interactive-design/">Interactive Design</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/what-does-5g-mean-for-web-designers/" class="anim-link">What
                                            Does 5G Mean for Web Designers?</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           However, 5G isn’t just set to have an impact on mobile browsing. Changes in mobile connectivity will have an impact on web design too. As a web designer, it’s up to you to consider how the latest connectivity tools will impact the way users browse the web. Additionally, you may find that you have more space to explore the advantages of using larger content (like 4K video) within a client’s website. Here’s how you can prepare for the fifth...        ">
                                        However, 5G isn’t just set to have an impact on mobile browsing. Changes in mobile connectivity will have an
                                        impact on web design too. As a web designer, it’s up to you to consider how the latest connectivity tools will
                                        impact the way users browse the web. Additionally, you may find that you have more space to explore the
                                        advantages of using larger content (like 4K video) within a client’s website. Here’s how you can prepare for
                                        the fifth...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Rebekah Carter" class="hp-author-avatar-lnk" href="/author/Rebekah-Carter">
                                            <img src="https://www.gravatar.com/avatar/f52deb08bc37ec4a2ab225001195c7d8?s=48" alt="Rebekah Carter"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Rebekah Carter" href="/author/Rebekah-Carter">Rebekah Carter</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 22, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/01/the-latest-research-for-web-designers-january-2020/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="The Latest Research for Web Designers, January 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-2-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to User Experience" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/user-experience/">User Experience</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/the-latest-research-for-web-designers-january-2020/"
                                           class="anim-link">The Latest Research for Web Designers, January 2020</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           One of the most powerful tools we have in web design is consumer and industry data. It’s like a gauge that tells us whether we’re still heading in the right direction or it’s time to change course and adopt a new strategy or approach. Unless you’re combing the web for the latest news and reports in the areas of design, marketing, and SEO, it’s easy to miss this pertinent data. So, in this roundup, I’m going to take care of that for you....        ">
                                        One of the most powerful tools we have in web design is consumer and industry data. It’s like a gauge that
                                        tells us whether we’re still heading in the right direction or it’s time to change course and adopt a new
                                        strategy or approach. Unless you’re combing the web for the latest news and reports in the areas of design,
                                        marketing, and SEO, it’s easy to miss this pertinent data. So, in this roundup, I’m going to take care of that
                                        for you....
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Suzanne Scacca" class="hp-author-avatar-lnk" href="/author/Suzanne-Scacca">
                                            <img src="https://www.gravatar.com/avatar/7329dca38bbe832fd69f4184ef3a654b?s=48" alt="Suzanne Scacca"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Suzanne Scacca" href="/author/Suzanne-Scacca">Suzanne Scacca</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 20, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img"
                               href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-13-2020-january-19-2020/">
                                <img width="842" height="480"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-1024x584.jpg"
                                     class="article-post-img wp-post-image" alt="Popular design news of the week: January 13, 2020 - January 19, 2020"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-1024x584.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-300x171.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2-768x438.jpg 768w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured-2.jpg 1519w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to News" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/news/">News</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/popular-design-news-of-the-week-january-13-2020-january-19-2020/"
                                           class="anim-link">Popular Design News of the Week: January 13, 2020 - January 19, 2020</a>
                                    </h2>


                                    <div class="hp-excerpt">
                                        Every week users submit a lot of interesting stuff on our sister site Webdesigner News, highlighting great
                                        content from around the web that can be of interest to web designers.&nbsp; The best way to keep track of all
                                        the great stories and news being posted is simply to check out the Webdesigner News site, however, in case you
                                        missed some here’s a quick and useful compilation of the most popular designer news&nbsp;that we curated from
                                        the past week. Note...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Cameron Chapman" class="hp-author-avatar-lnk"
                                           href="/author/Cameron-Chapman">
                                            <img src="https://www.gravatar.com/avatar/4b705c3a0e16bbe30fb5919c53ce2fb2?s=48" alt="Cameron Chapman"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Cameron Chapman" href="/author/Cameron-Chapman">Cameron Chapman</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 19, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
                <article class="list-post d-flex">

                    <div class="article-hp-content-wrap">
                        <div class="article-hp-content d-flex flex-wrap">


                            <a class="main-col-img" href="https://www.webdesignerdepot.com/2020/01/can-best-practice-replace-design-research/">
                                <img width="842" height="463"
                                     src="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-1024x563.jpg"
                                     class="article-post-img wp-post-image" alt="Can Best Practice Replace Design Research?"
                                     srcset="https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-1024x563.jpg 1024w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-300x165.jpg 300w, https://www.webdesignerdepot.com/cdn-origin/uploads/2020/01/featured_research-1-768x422.jpg 768w"
                                     sizes="(max-width: 842px) 100vw, 842px">

                            </a>


                            <div class="main-col-post-info d-flex  flex-column justify-content-center">

                                <div class="main-col-post-info-content">

                                    <div class="hp-cat">
                                        <a data-tooltip="See all posts related to Strategy &amp; Workflow" class="hp-category"
                                           href="https://www.webdesignerdepot.com/category/strategy-workflow/">Strategy &amp; Workflow</a></div>

                                    <h2 class="main-post-title">
                                        <a href="https://www.webdesignerdepot.com/2020/01/can-best-practice-replace-design-research/"
                                           class="anim-link">Can Best Practice Replace Design Research?</a>
                                    </h2>


                                    <div class="hp-excerpt" data-init-text="
           Heart-warming or not, co-creation with a client—the utopian ideal of shared vision—has its drawbacks. There are only so many times you can hear the words “brand strategy” before actually chewing your own face off. In the age of Wordpress, Drupal and, dare I say it, Wix, it’s never been more tempting to pay lip-service to research and consultation. Instead of building a principles framework from scratch, why not roll out something...        ">
                                        Heart-warming or not, co-creation with a client—the utopian ideal of shared vision—has its drawbacks. There
                                        are only so many times you can hear the words “brand strategy” before actually chewing your own face off. In
                                        the age of Wordpress, Drupal and, dare I say it, Wix, it’s never been more tempting to pay lip-service to
                                        research and consultation. Instead of building a principles framework from scratch, why not roll out
                                        something...
                                    </div>


                                    <div class="hp-post-pub-info">

                                        <a data-tooltip="See all posts by Chris Crawshaw" class="hp-author-avatar-lnk" href="/author/Chris-Crawshaw">
                                            <img src="https://www.gravatar.com/avatar/3d1bc86bbea28e5b1cc5be00ea22c6fb?s=48" alt="Chris Crawshaw"
                                                 class="hpppi-author-avatar">
                                        </a>

                                        <span class="hpppi-author">
                      By <a data-tooltip="See all posts by Chris Crawshaw" href="/author/Chris-Crawshaw">Chris Crawshaw</a>
                </span>
                                        <span class="hpppi-separator">&nbsp;|&nbsp;</span>

                                        <span class="hppi-time">
          <span class="icon-clock-1"></span>
          Jan. 16, 2020        </span>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
            </div>
            <div class="pagination-wrap">
                <ul class="w-pagination">
                    <li><a href="https://www.webdesignerdepot.com/page/2/" class="navbutton nb-next"><span>Next <span
                                        class="icon-right-dir"></span></span></a></li>
                </ul>

            </div>

        </div>
    </div>

</div>


</div>