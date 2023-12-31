<?php
    $curauth = isset($_GET['author_name']) ? get_user_by('slug', $author_name) : get_userdata($author);
    get_header();
?>            
<div class="content">
    <div class="container">

        <!-- START: PAGE CONTENT -->
        <section id="about" class="section section-about">
            <div class="animate-up">
                <div class="section-box">
                    <div class="profile">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="profile-photo"><img src="img/uploads/rs-photo-v1.jpg" alt="Robert Smith"/></div>
                            </div>
                            <div class="col-xs-7">
                                <div class="profile-info">
                                    <div class="profile-preword"><span>Hello</span></div>
                                    <h1 class="profile-title"><span>I'm</span> Robert Smith</h1>
        
                                    <h2 class="profile-position">Developer and businessman</h2></div>
                                <ul class="profile-list">
                                    <li class="clearfix">
                                        <strong class="title">Age</strong>
                                        <span class="cont">29</span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title">Address</strong>
                                        <span class="cont">24058, Belgium, Brussels, Liutte 27, BE</span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title">E-mail</strong>
                                        <span class="cont"><a href="mailto:robertsmith@company.com">robertsmith@company.com</a></span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title">Phone</strong>
                                        <span class="cont"><a href="tel:+12562548456">+1 256 254 84 56</a></span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title">Freelance</strong>
                                        <span class="cont">till April 15, 2016</span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title"><span class="button">On Vacation</span></strong>
                                        <span class="cont"><i class="rsicon rsicon-calendar"></i>till March 25, 2016</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="profile-social">
                        <ul class="social">
                            <li><a class="ripple-centered" href="https://www.facebook.com" target="_blank"><i
                                    class="rsicon rsicon-facebook"></i></a></li>
                            <li><a class="ripple-centered" href="https://twitter.com" target="_blank"><i
                                    class="rsicon rsicon-twitter"></i></a></li>
                            <li><a class="ripple-centered" href="https://www.linkedin.com" target="_blank"><i
                                    class="rsicon rsicon-linkedin"></i></a></li>
                            <li><a class="ripple-centered" href="https://plus.google.com" target="_blank"><i
                                    class="rsicon rsicon-google-plus"></i></a></li>
                            <li><a class="ripple-centered" href="https://dribbble.com" target="_blank"><i
                                    class="rsicon rsicon-dribbble"></i></a></li>
                            <li><a class="ripple-centered" href="https://www.instagram.com" target="_blank"><i
                                    class="rsicon rsicon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
        
                <div class="section-txt-btn">
                    <p><a class="btn btn-lg btn-border ripple" target="_blank"
                        href="http://dev.novembit.com/rs_card/wp-content/uploads/2015/11/test-1.pdf">Download Resume</a></p>
        
                    <p>Hello! I'm Robert Smith. Senior Web Developer specializing in front end development. Experienced with all
                        stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages
                        including JavaScript, SQL, and C. Stng background in project management and customer relations.</p>
                </div>
            </div>
        </section>
        <!-- #about -->
    
    <section id="skills" class="section section-skills">
        <div class="animate-up">
            <h2 class="section-title">Professional Skills</h2>
    
            <div class="section-box">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">Wordpress</span>
                                <span class="bar-value">80%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="51%"></span>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">JavaScript</span>
                                <span class="bar-value">52%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="67%"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">Drupal</span>
                                <span class="bar-value">61%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="79%"></span>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">HTML & CSS</span>
                                <span class="bar-value">89%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="67%"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">PHP & MySQL</span>
                                <span class="bar-value">99%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="54%"></span>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">Photoshop</span>
                                <span class="bar-value">97%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="80%"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #skills -->
    
    <section id="portfolio" class="section section-portfolio">
    <div class="animate-up">
    <h2 class="section-title">Portfolio</h2>
    
    <div class="filter">
        <div class="filter-inner">
            <div class="filter-btn-group">
                <button data-filter="*">All</button>
                <button data-filter=".photography">Photography</button>
                <button data-filter=".nature">Nature</button>
            </div>
            <div class="filter-bar">
                <span class="filter-bar-line"></span>
            </div>
        </div>
    </div>
    
    <div class="grid">
        <div class="grid-sizer"></div>
    
        <div class="grid-item size22 photography">
            <div class="grid-box">
                <figure class="portfolio-figure">
                    <img src="img/uploads/portfolio/portfolio-thumb-05-610x600.jpg" alt=""/>
                    <figcaption class="portfolio-caption">
                        <div class="portfolio-caption-inner">
                            <h3 class="portfolio-title">Street Photography</h3>
                            <h4 class="portfolio-cat">Photography</h4>
    
                            <div class="btn-group">
                                <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i
                                        class="rsicon rsicon-link"></i></a>
                                <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1"
                                href="#portfolio1-inline1"><i class="rsicon rsicon-eye"></i></a>
                                <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1"
                                href="#portfolio1-inline2"></a>
                                <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1"
                                href="#portfolio1-inline3"></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
    
                <!-- Start: Portfolio Inline Boxes -->
                <div id="portfolio1-inline1" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="image"
                        data-embed-url="img/uploads/portfolio/portfolio-thumb-05-large.jpg"></div>
                    <div class="inline-cont">
                        <h2 class="inline-title">Street photography is photography that features the chance
                            encounters and random accidents within public places.</h2>
    
                        <div class="inline-text">
                            <p>Street photography does not necessitate the presence of a street or even the urban
                                environment. Though people usually feature directly, street photography might be
                                absent of people and can be an object or environment where the image projects a
                                decidedly human character in facsimile or aesthetic.</p>
                        </div>
                    </div>
                </div>
    
                <div id="portfolio1-inline2" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="image"
                        data-embed-url="img/uploads/portfolio/portfolio-thumb-01-large.jpg"></div>
                    <div class="inline-cont">
                        <div class="inline-text">
                            <h2 class="inline-title">Framing and timing</h2>
    
                            <p>Framing and timing can be key aspects of the craft with the aim of some street
                                photography being to create images at a decisive or poignant moment. Street
                                photography can focus on emotions displayed, thereby also recording people's history
                                from an emotional point of view.</p>
                        </div>
                    </div>
                </div>
    
                <div id="portfolio1-inline3" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="iframe"
                        data-embed-url="https://player.vimeo.com/video/118244244"></div>
                    <div class="inline-cont">
                        <div class="inline-text">
                            <h2 class="inline-title">A Look Into Documenting Street Fashion Photography</h2>
    
                            <p>HB Nam is an internationally known street fashion photographer. In this Leica Camera
                                Portrait, Nam explains how he started in photography and what photography means to
                                him. For Nam, it's about documenting what's around him and the concentration
                                required to achieve a good shot.</p>
                        </div>
                    </div>
                </div>
                <!-- End: Portfolio Inline Boxes -->
            </div>
        </div>
        <!-- .grid-item -->
    
        <div class="grid-item size11 bridge">
            <div class="grid-box">
                <figure class="portfolio-figure">
                    <img src="img/uploads/portfolio/portfolio-thumb-11-289x281.jpg" alt=""/>
                    <figcaption class="portfolio-caption">
                        <div class="portfolio-caption-inner">
                            <h3 class="portfolio-title">Suspension Bridge</h3>
                            <h4 class="portfolio-cat">Bridge</h4>
    
                            <div class="btn-group">
                                <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i
                                        class="rsicon rsicon-link"></i></a>
                                <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox2"
                                href="#portfolio2-inline1"><i class="rsicon rsicon-eye"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
    
                <!-- Start: Portfolio Inline Boxes -->
                <div id="portfolio2-inline1" class="fancybox-inline-box">
                    <div class="inline-cont">
                        <h2 class="inline-title">Suspension Bridges - Design Technology</h2>
    
                        <div class="inline-text">
                            <p>Suspension bridges in their simplest form were originally made from rope and wood.
                                Modern suspension bridges use a box section roadway supported by high tensile
                                strength cables.
                                In the early nineteenth century, suspension bridges used iron chains for cables. The
                                high tensile cables used in most modern suspension
                                bridges were introduced in the late nineteenth century.<br/>
                                Today, the cables are made of thousands of individual steel wires bound tightly
                                together. Steel, which is very strong under tension, is
                                an ideal material for cables; a single steel wire, only 0.1 inch thick, can support
                                over half a ton without breaking.</p>
    
                            <p>Light, and strong, suspension bridges can span distances from 2,000 to 7,000 feet far
                                longer than any other kind of bridge. They are
                                ideal for covering busy waterways.</p>
    
                            <p>With any bridge project the choice of materials and form usually comes down to cost.
                                Suspension bridges tend to be the most expensive to build. A suspension bridge
                                suspends the roadway from huge main cables, which extend
                                from one end of the bridge to the other. These cables rest on top of high towers and
                                have to be securely anchored into the bank at either
                                end of the bridge. The towers enable the main cables to be draped over long
                                distances. Most of the weight or load of the bridge is
                                transferred by the cables to the anchorage systems. These are imbedded in either
                                solid rock or huge concrete blocks. Inside the anchorages,
                                the cables are spread over a large area to evenly distribute the load and to prevent
                                the cables from breaking free.</p>
    
                            <p>The Arthashastra of Kautilya mentions the construction of dams and bridges.A Mauryan
                                bridge near Girnar was surveyed by James Princep.
                                The bridge was swept away during a flood, and later repaired by Puspagupta, the
                                chief architect of emperor Chandragupta I. The bridge
                                also fell under the care of the Yavana Tushaspa, and the Satrap Rudra Daman. The use
                                of stronger bridges using plaited bamboo and iron
                                chain was visible in India by about the 4th century. A number of bridges, both for
                                military and commercial purposes, were constructed by
                                the Mughal administration in India.</p>
                        </div>
                    </div>
                </div>
                <!-- End: Portfolio Inline Boxes -->
            </div>
        </div>
        <!-- .grid-item -->
    
        <div class="grid-item size11 nature photography">
            <div class="grid-box">
                <figure class="portfolio-figure">
                    <img src="img/uploads/portfolio/portfolio-thumb-08-289x281.jpg" alt=""/>
                    <figcaption class="portfolio-caption">
                        <div class="portfolio-caption-inner">
                            <h3 class="portfolio-title">Rocky Mountains</h3>
                            <h4 class="portfolio-cat">Nature, Photography</h4>
    
                            <div class="btn-group">
                                <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i
                                        class="rsicon rsicon-link"></i></a>
                                <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox3"
                                href="#portfolio3-inline1"><i class="rsicon rsicon-eye"></i></a>
                                <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3"
                                href="#portfolio3-inline2"></a>
                                <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3"
                                href="#portfolio3-inline3"></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
    
                <!-- Start: Portfolio Inline Boxes -->
                <div id="portfolio3-inline1" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="image"
                        data-embed-url="img/uploads/portfolio/portfolio-thumb-08-large.jpg"></div>
                </div>
    
                <div id="portfolio3-inline2" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="image"
                        data-embed-url="img/uploads/portfolio/portfolio-thumb-04-large.jpg"></div>
                </div>
    
                <div id="portfolio3-inline3" class="fancybox-inline-box">
                    <div class="inline-embed" data-embed-type="image"
                        data-embed-url="img/uploads/portfolio/portfolio-thumb-02-large.jpg"></div>
                </div>
                <!-- End: Portfolio Inline Boxes -->
            </div>
        </div>
        <!-- .grid-item -->
    </div>
    
    <div class="grid-more">
        <span class="ajax-loader"></span>
        <button class="btn btn-border ripple"><i class="rsicon rsicon-add"></i></button>
    </div>
    </div>
    </section>
    <!-- #portfolio -->
    
    <section id="experience" class="section section-experience">
        <div class="animate-up">
            <h2 class="section-title">Work Experience</h2>
    
            <div class="timeline">
                <div class="timeline-bar"></div>
                <div class="timeline-inner clearfix">
                    <div class="timeline-box timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date">2014 - 2016</div>
                            <h3>PINEAPPLE</h3>
                            <h4>Full Stack developer</h4>
    
                            <p>Worked as part of a multi-disciplinary team, carrying out ad-hoc tasks as requested by the IT
                                Manager. Had a specific brief to ensure the websites build for customer’s precisely matched
                                their requirements.developers and marketers.</p>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-right">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
    
                            <div class="date">2011 - 2014</div>
                            <h3>MACROSOOFT</h3>
                            <h4>Web Developer</h4>
    
                            <p>I was responsible for working on a range of projects, designing appealing websites and
                                interacting on a daily basis with graphic designers, back-end developers and marketers.</p>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date">2003 - 2006</div>
                            <h3>JOOJLE</h3>
                            <h4>Systems Analyst / Web Developer</h4>
    
                            <p>Rebuilt and enhanced existing ASP B2C site with ASP.NET 2.0 Framework and tools. Technology
                                consists of ASP.NET 2.0 (C#), IIS, Microsoft SQL Server 2005, Stored Procedures & PayPal
                                Instant Payment Notification.</p>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-right">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
    
                            <div class="date">2004 - 2008</div>
                            <h3>IBBBM</h3>
                            <h4>Webmaster / Web Developer</h4>
    
                            <p>Developed, managed, operated and promoted an Internet business.Handled customer support
                                issues.Planned and managed business finances.</p>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date">2003 - 2004</div>
                            <h3>HEADBOOK</h3>
                            <h4>Intern</h4>
    
                            <p>This was beginning of my career. Developed, managed, operated and promoted an Internet
                                business.Handled customer support issues.</p>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-right">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
    
                            <div class="date">2000 - 2003</div>
                            <h3>UBEAR</h3>
                            <h4>Taxi Driver</h4>
    
                            <p>Driving from point A to point B and if necessary to point C and sometimes even to point R and
                                point S. I was known as experienced driver. Once my passenger who was a web developer told
                                me about his job and I have made my decision at that moment to became a developer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #experience -->
    
    <section id="education" class="section section-education">
        <div class="animate-up">
            <h2 class="section-title">Education</h2>
    
            <div class="timeline">
                <div class="timeline-bar"></div>
                <div class="timeline-inner clearfix">
    
                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date"><span>2012 - 2014</span></div>
                            <h3>Master of Information Technology</h3>
                            <h4>MIT&T</h4>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-compact timeline-box-right">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
    
                            <div class="date"><span>2008 - 2012</span></div>
                            <h3>Bachelor Computer Engineering</h3>
                            <h4>Harwarg Universitey</h4>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date"><span>2007 - 2008</span></div>
                            <h3>Certificate for courses of Computer Science</h3>
                            <h4>Stanfoorb Universitey</h4>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-compact timeline-box-right">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
    
                            <div class="date"><span>2007 - 2008</span></div>
                            <h3>1 week Courses of Information Systems</h3>
                            <h4>Oxforz Universitey</h4>
                        </div>
                    </div>
    
                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>
    
                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
    
                            <div class="date"><span>2006 - 2007</span></div>
                            <h3>Software Engineering</h3>
                            <h4>Sordonne University</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #education -->
    
    <section id="clients" class="section section-clients">
        <div class="animate-up">
    
            <div class="clients-carousel">
                <div class="client-logo">
                    <a href="http://market.envato.com" target="_blank"><img src="img/uploads/logos/logo-envato.png"
                                                                            title="envato" alt="envato"/></a>
                </div>
    
                <div class="client-logo">
                    <img src="img/uploads/logos/logo-angularjs.png" title="angular js" alt="angular js"/>
                </div>
    
                <div class="client-logo">
                    <a href="https://www.omniref.com/ruby/gems/teaspoon/0.7.9" target="_blank"><img
                            src="img/uploads/logos/logo-teaspoon.png" title="teaspoon" alt="teaspoon"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="https://wordpress.com" target="_blank"><img src="img/uploads/logos/logo-wordpress.png" title="wordpress" alt="wordpress"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="https://evernote.com" target="_blank"><img src="img/uploads/logos/logo-evernote.png" title="evernote" alt="evernote"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="http://compass-style.org" target="_blank"><img src="img/uploads/logos/logo-compass.png" title="compass" alt="compass"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="http://getbootstrap.com" target="_blank"><img src="img/uploads/logos/logo-bootstrap.png" title="bootstrap" alt="bootstrap"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="http://jasmine.github.io" target="_blank"><img src="img/uploads/logos/logo-jasmine.png" title="jasmine" alt="jasmine"/></a>
                </div>
    
                <div class="client-logo">
                    <a href="https://jquery.com" target="_blank"><img src="img/uploads/logos/logo-jquery.png" title="jquery" alt="jquery"/></a>
                </div>
            </div>
        </div>
    </section>
    <!-- #clients -->
    
    <section id="references" class="section section-references">
        <div class="animate-up">
            <h2 class="section-title">References</h2>
    
            <div class="section-box">
                <ul class="ref-slider">
                    <li>
                        <div class="ref-box">
                            <div class="person-speech">
                                <p>I confirm that I have dealt with New Company Ltd since 1998. Their work has been a major
                                    factor in our
                                    website's success, helping it to become one of the most visited resources of its kind on
                                    the Internet.</p>
                            </div>
                            <div class="person-info clearfix">
                                <img class="person-img" src="img/uploads/rs-avatar-60x60.jpg" alt="Headshot">
    
                                <div class="person-name-title">
                                    <span class="person-name">Alexander Jokovich</span>
                                    <span class="person-title">Modern LLC , HR</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ref-box">
                            <div class="person-speech">
                                <p>I confirm that New Company Ltd has been a customer of ours since 1998, during which time
                                    they have always made payments reliably,
                                    in full and on time.</p>
                            </div>
                            <div class="person-info clearfix">
                                <img class="person-img" src="img/uploads/rs-avatar-60x60.jpg" alt="Headshot">
    
                                <div class="person-name-title">
                                    <span class="person-name">Alexander Jokovich</span>
                                    <span class="person-title">Modern LLC , HR</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ref-box">
                            <div class="person-speech">
                                <p>I have known Robert Smith for 10 years as web developer. I can confirm that he is a man
                                    of great integrity, is extremely dedicated
                                    to his family and work, and is entirely peace-loving.</p>
                            </div>
                            <div class="person-info clearfix">
                                <img class="person-img" src="img/uploads/rs-avatar-60x60.jpg" alt="Headshot">
    
                                <div class="person-name-title">
                                    <span class="person-name">Alexander Jokovich</span>
                                    <span class="person-title">Modern LLC , HR</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="ref-slider-nav">
                    <span id="ref-slider-prev" class="slider-prev"></span>
                    <span id="ref-slider-next" class="slider-next"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- #references -->
    
    <section id="prices" class="section section-prices">
        <div class="animate-up">
            <h2 class="section-title">Pricing</h2>
    
            <div class="row price-list">
                <div class="col-sm-4">
                    <div class="price-box">
                        <div class="price-box-top">
                            <span>$16</span>
                            <small>/mo</small>
                        </div>
                        <div class="price-box-content">
                            <h3>Basic</h3>
                            <ul>
                                <li>Manage tasks</li>
                                <li>Discussions in tasks</li>
                                <li>File sharing <span class="new">new</span></li>
                                <li>
                                    <del>Real-time Activity Stream</del>
                                </li>
                                <li>
                                    <del>Spreadsheet View</del>
                                </li>
                                <li>
                                    <del>iPhone and Android apps</del>
                                </li>
                                <li>
                                    <del>Advanced email integration</del>
                                </li>
                                <li>
                                    <del>Basic Integrations</del>
                                </li>
                            </ul>
                            <div class="btn-wrap">
                                <a class="btn btn-lg btn-border" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="price-box box-primary">
                        <div class="price-box-top">
                            <span>$50</span>
                            <small>/mo</small>
                        </div>
                        <div class="price-box-content">
                            <h3>Professional</h3>
                            <ul>
                                <li>Manage tasks</li>
                                <li>Discussions in tasks</li>
                                <li>File sharing <span class="new">new</span></li>
                                <li>Real-time Activity Stream</li>
                                <li>Spreadsheet View <span class="new">new</span></li>
                                <li>
                                    <del>iPhone and Android apps</del>
                                </li>
                                <li>
                                    <del>Advanced email integration</del>
                                </li>
                                <li>
                                    <del>Basic Integrations</del>
                                </li>
                            </ul>
                            <div class="btn-wrap">
                                <a class="btn btn-lg btn-border" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="price-box">
                        <div class="price-box-top">
                            <span>$250</span>
                            <small>/mo</small>
                        </div>
                        <div class="price-box-content">
                            <h3>Enterprise</h3>
                            <ul>
                                <li>Manage tasks</li>
                                <li>Discussions in tasks</li>
                                <li>File sharing <span class="new">new</span></li>
                                <li>Real-time Activity Stream</li>
                                <li>Spreadsheet View <span class="new">new</span></li>
                                <li>iPhone and Android apps</li>
                                <li>Advanced email integration</li>
                                <li>Basic Integrations</li>
                            </ul>
                            <div class="btn-wrap">
                                <a class="btn btn-lg btn-border" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #prices -->
    
    <section id="blog" class="section section-blog">
        <div class="animate-up">
            <h2 class="section-title">From The Blog</h2>
    
            <div class="blog-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item">
                    <article class="post-box">
                        <div class="post-media">
                            <div class="post-image">
                                <a href="single.html"><img src="img/uploads/thumb-449x286-1.jpg" alt=""> </a>
                            </div>
                        </div>
    
                        <div class="post-data">
                            <time class="post-datetime" datetime="2015-03-13T07:44:01+00:00">
                                <span class="day">03</span>
                                <span class="month">MAY</span>
                            </time>
    
                            <div class="post-tag">
                                <a href="">#Photo</a>
                                <a href="">#Architect</a>
                            </div>
    
                            <h3 class="post-title">
                                <a href="single-image.html">Image Post</a>
                            </h3>
    
                            <div class="post-info">
                                <a href=""><i class="rsicon rsicon-user"></i>by admin</a>
                                <a href=""><i class="rsicon rsicon-comments"></i>56</a>
                            </div>
                        </div>
                    </article>
                </div>
    
                <div class="grid-item">
                    <article class="post-box">
                        <div class="post-media">
                            <div class="post-image">
                                <a href="single-vimeo.html">
                                    <img src="img/uploads/thumb-449x286-5.jpg" alt="">
                                    <span class="post-type-icon"><i class="rsicon rsicon-play"></i></span>
                                </a>
                            </div>
                        </div>
    
                        <div class="post-data">
                            <time class="post-datetime" datetime="2015-03-13T07:44:01+00:00">
                                <span class="day">03</span>
                                <span class="month">MAY</span>
                            </time>
    
                            <div class="post-tag">
                                <a href="">#Photo</a>
                                <a href="">#Architect</a>
                            </div>
    
                            <h3 class="post-title">
                                <a href="single-vimeo.html">Vimeo Video Post</a>
                            </h3>
    
                            <div class="post-info">
                                <a href=""><i class="rsicon rsicon-user"></i>by admin</a>
                                <a href=""><i class="rsicon rsicon-comments"></i>56</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- #blog -->  
    <!-- END: PAGE CONTENT -->

    </div>
<!-- .container -->
</div>
<!-- .content -->

<?php get_footer(); ?>