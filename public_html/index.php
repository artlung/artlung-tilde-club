<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML>
<HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <TITLE>artlung @ ~ club</TITLE>
  <LINK rel="stylesheet" href="tilde.css<?php
    echo '?' . filemtime('tilde.css');
  ?>">
    <LINK rel="me authn" href="https://github.com/artlung">
    <LINK rel="me" href="https://artlung.com/">
    <LINK rel="webmention" href="https://webmention.io/artlung.com/webmention">
    <?php
    // let's feed preview images to certain user agents
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    print "<!-- User Agent: " . htmlspecialchars($userAgent) . " -->\n";
    $mightBeBluesky = stristr($userAgent, 'bluesky') || stristr($userAgent, 'bsky.app') || stristr($userAgent, 'cardyb');
    $mightBeMastodon = stristr($userAgent, 'mastodon') || stristr($userAgent, 'fediverse');
    if ($mightBeBluesky || $mightBeMastodon) {
?><LINK property="og:image" content="https://tilde.club/%7Eartlung/og-tilde-club-artlung.jpg"><?php
    }
    ?>
</HEAD>
<BODY>

<H1>artlung @ ~ &#9827;</H1>

<P>Welcome to my Tilde Club WWW space! My name is Joe and I have been using the World-Wide Web since 1994 and making pages on it since 1996 and I really like it.</P>

<P> The World-Wide Web is a hypertext-based, distributed
            information system created by researchers at CERN in
            Switzerland. <I>See also <A href="https://www.w3.org">
www.w3.org</A></I></P>

<HR>

<h2>Index</h2>

<A NAME="INDEX"></A>
<OL>
<?php
    $text_fragments = [
      ['Webmentions', 'Updates'],
       ['little web pages.', 'FRIEND~1.HTM'],
        ['MATT','About This Site'],
        ['slash links!', 'Webmentions'],
    ];

    foreach($text_fragments as $text_fragment) {
        // #:~:text=
        // first textPrefix is "Webmentions
        $textPrefix = $text_fragment[0];
        $textFragment = $text_fragment[1];

        printf(
            '<LI><A HREF="https://tilde.club/~artlung/#:~:text=%s,%s">%s</A></LI>',
                rawurlencode($textPrefix . '-'),
            rawurlencode($textFragment),
            $textFragment
        );
        $textPrefix = $textFragment;
    }



?>
</OL>


<HR>
<H2>Updates</H2>

<P>
    This site has turned into a changelog for all the different weird stuff I put up on the web.
</P>

<DL>
    <DT>
        December 2026
    </DT>
    <DD>
        <P>
            I made so many things. The <a href="https://artlung.com/mixtapes/">mixtapes</a>
            are getting pretty good. I have a statement on AI
            <a href="https://artlung.com/ai/">here</a>. I continue to do my
            Front End Study Hall meetings. I mirror the IndieWeb page
            of that <a href="https://artlung.com/fresh/">here</a>. And <a href="https://artlung.com/cssbattles/">CSS Battles</a>
            I've been doing daily a long time. The <a href="https://artlung.com/firehose/">Firehose</a> and <a href="https://artlung.com/colophon/">Colophon</a> pages
            tell about how my site works, and shows the latest from each and every RSS and Atom <a href="https://artlung.com/feeds/">feed</a> on the site, and on other silos, too.


        </P>

    </DD>

    <DT>
        November 2025
    </DT>
    <DD>

        <P>
            <EM>
            <a href="https://artlung.com/understandingcomics-ibc/">Understanding Comics</a>
            </EM>
            is the IndieWeb Book Club book. Read it! Write about it on your website! Tell me about it!
        </P>
        <P>
            Updated <a href="https://github.com/artlung/artlung-cssbattle-plugins">ArtLung CSS Battle Plugins</a>

        </P>

    </DD>
    <DT>
        October 2025
    </DT>
    <DD>
        <P>
            I did <A HREF="https://weirdweboctober.website">Weird Web October</A> 2025. I did it every day. I surprised myself with that. I love the web so much.
        </P>
        <ol>
            <li><a href="https://artlung.com/wwo/">Weird Web October 2025: Transparent Images</a></li>
            <li><a href="https://artlung.com/wwo/2/">Weird Web October: Maps</a></li>
            <li><a href="https://artlung.com/wwo/3/">Weird Web October: Scramble</a></li>
            <li><a href="https://artlung.com/wwo/4/">We dance (Filter Weird Web October)</a></li>
            <li><a href="https://lab.artlung.com/squish-stretch-web/">Squish &amp; Stretch Web Pages Bookmarklet</a></li>
            <li><a href="https://artlung.com/wwo/6/">Solids (Weird Web October 2025: 6)</a></li>
            <li><a href="https://artlung.com/wwo/7/">Weird Web October 2025: Sub-Optimal</a></li>
            <li><a href="https://artlung.com/wwo/8/">WWO #8: It is clicky and griddy</a></li>
            <li><a href="https://artlung.com/wwo/9/">Blink (Happy Halloween 2025)</a></li>
            <li><a href="https://artlung.com/wwo/10/">Warning: No hope is on offer in this place. WWO 2025</a></li>
            <li><a href="https://artlung.com/wwo/11/">Affirmations Mirror (WWO 2025 #11)</a></li>
            <li><a href="https://artlung.com/wwo/12/">Battles (Weird Web October 12)</a></li>
            <li><a href="https://lab.artlung.com/upside-down/">Upside Down Web Page Bookmarklet</a></li>
            <li><a href="https://artlung.com/wwo/14/">Doubles Weird Web October #14 2025</a></li>
            <li><a href="https://artlung.com/wwo/15/">Unicode: Nobody wins (WWO #15)</a></li>
            <li><a href="https://artlung.com/wwo/16/">WWO/2025/#16/Transition</a></li>
            <li><a href="https://artlung.com/wwo/17/">Illumination (Weird Web October 2025 #17)</a></li>
            <li><a href="https://artlung.com/wwo/18/">WeirdCoin (Trading) WWO 2025 #18</a></li>
            <li><a href="https://artlung.com/wwo/19/">Bounce (Weird Web October 2025 #19)</a></li>
            <li><a href="https://artlung.com/wwo/20/">Paste Image Thingee (WWO 2020 #20)</a></li>
            <li><a href="https://artlung.com/wwo/21/">Weird Web October 2025 ~ Prompt #21: Language</a></li>
            <li><a href="https://artlung.com/wwo/22/">Weird Web October 2025 Prompt #22: Memory</a></li>
            <li><a href="https://artlung.com/wwo/23/">Style (Pinwheels for Weird Web October 2025 #23)</a></li>
            <li><a href="https://artlung.com/wwo/24/">JUST A COUNTER (WWO #24)</a></li>
            <li><a href="https://artlung.com/wwo/25/">Empty (take a trip and run out of gas) WWO 2025 #25</a></li>
            <li><a href="https://lab.artlung.com/bookmarklet-pattern/">Web Page Pattern Bookmarklet</a></li>
            <li><a href="https://artlung.com/wwo/27/">Spell (WWO 27) 2025</a></li>
            <li><a href="https://artlung.com/wwo/28/">Lincoln's Second Inaugural as Tables (WWO #28)</a></li>
            <li><a href="https://artlung.com/wwo/29/">Surprise (a snowflake maker) (WWO 2025 #29)</a></li>
            <li><a href="https://artlung.com/wwo/30/">ISO/IEC 15445:2000 HTML (Weird Web October 2025 #30)</a></li>
            <li><a href="https://artlung.com/wwo/31/">Spooky Gallery ArtLung Weird Web October 2025</a></li>
        </ol>

    </DD>
    <DD>
        I did some other website stuff too. Updated more pages than I can remember:
        <a href="https://artlung.com/cv/">my CV</a>,
        <a href="https://artlung.com/blank/">this page intentionally left blank</a>,
        and I created two pages of pages:
        <a href="https://artlung.com/slashes/">Slashes</a> and
        <a href="https://artlung.com/site-index/">Site Index</a>.
    </DD>

    <DT>September 2025</DT>
    <DD>
        <UL>
            <LI>
                I made some <A HREF="https://codepen.io/artlung/full/RNWzYpY">Windmills</A>. There's a bird.
            </LI>
            <LI>
                Using <A HREF="https://indielogin.com/">
                    IndieLogin</A> I created myself
                a profile page on the IndieWeb wiki associated just for this page:
                <A HREF="https://indieweb.org/User:Tilde.club_~artlung">
                    User:Tilde.club_~artlung
                </A>.
            </LI>
            <LI>
                This page now has support for
                dark mode. It is effectively the same as
                <A HREF="https://developer.mozilla.org/en-US/docs/Web/CSS/@media/prefers-color-scheme">
                    <CODE>prefers-color-scheme</CODE>
                </A>
                but mostly works via <CODE><A HREF="https://developer.mozilla.org/en-US/docs/Web/CSS/color-scheme">
                        color-scheme</A>: light dark;</CODE> and a few
                usages of the function <A HREF="https://developer.mozilla.org/en-US/docs/Web/CSS/color_value/light-dark">
                    <CODE>light-dark()</CODE></A>. I don't offer a toggle. It works based on
                your own system preference.
            </LI>
            <LI>
                I made a mini-clock with very minimal HTML and CSS and JavaScript:
                <a href="https://tilde.club/~artlung/miniclock/">JOE MINI CLOCK</a>
            </LI>
            <LI>I submitted this site to <a href="https://xhtml.club/">XHTML Club</a>. And used <a href="https://codeberg.org/">Codeberg</a> for the <a href="https://codeberg.org/btxx/xhtml-club/pulls/1">first time</a>.</LI>
        </UL>
    </DD>
    <DT>August 2025</DT>
    <DD>
        <UL>
            <LI>I keep making <a href="https://artlung.com/likes/">Likes</a> and love adding to my <a href="https://artlung.com/blogroll/">Blogroll</a>.</LI>
            <LI>
More pages: <a href="https://artlung.com/projects/">Projects</a>, <A href="https://artlung.com/elsewhere/">Elsewhere</A> (for current and also dead social media accounts), and the, the
                biggie new page: <a href="https://artlung.com/toys/">Toys</a> for digital toys! Super happy with that one.
            </LI>
            <li>
                For HTML Day (<a href="https://html.energy/">HTML.Energy</a>) I created a page
                which listed every HTML element in HTML5:
                <a href="https://artlung.com/html-day/">HTML Day</a>. That was really fun. It's got a logo that randomly wanders around the page.
            </li>
            <LI>
                IndieWeb Carnivals, recently:
                    <a href="https://artlung.com/blog/2025/08/07/colors-indieweb-carnival/">
                        Colors
                    </a> (August 2025),
                    <a href="https://artlung.com/blog/2025/07/29/totems/">
                        Totems
                    </a> (July 2025).

            </LI>
            <LI>
                I made a second video reel hosted on my own site: the <a href="https://artlung.com/videos/reels/ti994a-iwc">IndieWeb Logo as a TI-BASIC</a> graphic. The first video
                was <a href="https://artlung.com/videos/reels/pelican">When I met a pelican in the water</a>.
            </LI>
            <LI>
                I am collecting examples of the markup used to make webcomics accessibile. <a href="https://lab.artlung.com/comics-a11y/">Comics Accessibilty</a>. Provide examples! Give feedback!
            </LI>
            <LI>
                I discovered last night that <A HREF="https://rossabaker.com">Ross</A> has a Tildeverse page as well! His validates to the HTML 4.01 DOCTYPE! I love it!
                <A HREF="https://tilde.town/~rossabaker/">Ross's Tilde Town</A>
            </LI>
        </UL>

    </DD>


    <DT>
        July 2025
    </DT>
    <DD>
        <UL>
            <LI>
                <A HREF="https://lab.artlung.com/slideorama-pinwheels/">
                    Slideorama Pinwheels
                </A>
            </LI>
            <LI>
                Comic Con month. FrESH has continued biweekly and I'm really happy with that.
                I also showed work at WOCA in Orange County. In honor of
                that I created a page for my <A HREF="https://artlung.com/art/">
                    Art
                </A>.
            </LI>
            <LI>
                barnold, a fellow ~♣ user, created a mechanism
                <A HREF="https://tilde.club/~barnold/how-to-comment.html">
                    for commenting on Tildeverse pages
                </A>
            </LI>


        </UL>
    </DD>

    <DT>
        June 2025
    </DT>
    <DD>
        <UL>
            <LI>
                <A href="https://lab.artlung.com/wml/faux">
                    WML, WAP, &amp; Microformats Demo! by ArtLung
                </A>
            </LI>
            <LI>
                Not new, but I made a <a href="https://artlung.com/now/">NOW</a> slash page which pulls things in dynamically.
            </LI>
            <LI>
                Hey! I found another Tilde Club user who accepts webmentions!
                    <A href="https://tilde.club/~schussat/">Alan S</A>. Nice!
            </LI>
        </UL>
    </DD>

    <DT>May 2025</DT>
    <DD>

        <UL>
            <LI>
                Since I last posted I completed my goal of making videos of myself doing <A HREF="https://artlung.com/cssbattles/">the daily CSS Battle</A> targets. There's over 700 videos and  117¼ hours of video.
            </LI>
            <LI>
                <A HREF="https://artlung.com/blog/2025/06/02/youtube-mystery/">
                    “📣 YOUTUBE REMOVED YOUR CONTENT” (A GOOGLE MYSTERY)
                </A> was a recent adventure worth a read.
            </LI>

            <LI>
                I added a number of links to the <A HREF="https://lab.artlung.com/">Lab</A> including:
                    <A HREF="https://lab.artlung.com/ventcheck/">Ventcheck Bot</A>,
                    <A HREF="https://lab.artlung.com/kanban/">Kanban board in CSS</A>,
                    <A HREF="https://lab.artlung.com/kanban/">Kanban board in CSS, Part 2</A> (dynamic with PHP and SCSS),
                    <A HREF="https://lab.artlung.com/rudysbg/">Rudy's Background Colour Picker</A>, and the
                    <A HREF="https://lab.artlung.com/bookmarklets/">Bookmarklets</A> were updated.
            </LI>
            <LI>
                I made my <A HREF="https://artlung.com/blogroll/">Blogroll</A> dynamic! I've also been updating
                my <A HREF="https://artlung.com/likes/">Likes</A> page.
            </LI>
            <LI>
                I made a stopwatch in CSS, <A HREF="https://codepen.io/artlung/pen/bNNXRXb">it works well</A>.
                Also on CodePen is
                <A HREF="https://codepen.io/artlung/pen/ZYYNJOx">
                    a simulated lined green and white printer paper</A>.
            </LI>
        </UL>





    </DD>


    <DT>April 2025</DT>
    <DD>
        <UL>
            <LI>
                It's been more than a month since my last update! Missed March entirely due to how busy I was! But I've made so many things since then!
            </LI>
            <LI>
                <A HREF="https://artlung.com/cssbattles/">CSS Battle Progress</A> is at 94%. 343 Videos about 635 Daily Targets on <A HREF="https://cssbattle.dev/">CSS Battle.dev</A>. 3 dozen to go. And a new one rolling out daily.
            </LI>
            <LI>
                I am mirroring my <A HREF="https://artlung.com/indieweb/">Profile page from indieweb.org</A> as well as the <A HREF="https://artlung.com/front-end-study-hall/">Front End Study Hall</A> page. The latter picks up the webmentions sent to it. And FrESH celebrated a one year anniversary and I wrote about it
                <A HREF="https://artlung.com/blog/2025/04/25/study-hall-reflections/">Study Hall Reflections</A>. I'm quite proud that I've put the effort to continue the event and folks enjoy it.
            </LI>
            <LI>
                The Front Page of <A HREF="https://artlung.com/">ARTLUNG.COM</A> is no longer under WordPress and it has been fun choosing and playing with tuning what's on it and pulling in content via RSS. And kudos to <A HREF="https://gregorlove.com/">gRegor</A> for finding bugs with both search and my webmention endpoints which I rely on!
            </LI>
            <LI>
                Silly things added to <A HREF="https://smorgasborg.artlung.com/">Smorgasborg</A>:
                <A HREF="https://smorgasborg.artlung.com/maarva/">Maarva Carassi Andor HAS A POSSE</A>;
                <A HREF="https://smorgasborg.artlung.com/indieweb-sickos/">IndieWeb Sickos</A>;

                <A HREF="https://smorgasborg.artlung.com/guru-meditation/">Software Failure. Guru Meditation</A>;
                and
                <A HREF="https://smorgasborg.artlung.com/this-man-velvet-touch/">
                    This Man Wants To Clean Your Clothes (Velvet Touch Dry Cleaners &amp; Laundry)
                </A>.


            </LI>
            <LI>I've been saying "everyone's carrying web browsers around, make a web page" and I rather like that sentiment amidst our world drowning in malevolent people gutting the notion of aid and comfort to our fellow human beings.</LI>

            <LI>Until next time, <B>GO MAKE A WEB PAGE</B></LI>
        </UL>
    </DD>


    <DT>February 2025</DT>
    <DD>
        <UL>
            <LI>
                Progress on the effort to <A HREF="https://artlung.com/cssbattles/">make videos</A> of myself doing the daily CSS Battle: 66% complete.
            </LI>
            <LI>
                <A HREF="https://artlung.com/blog/2025/01/24/use-it/"><I>"USE IT"</I></A> is a comic I'm proud of.
            </LI>
            <LI>
                I created a <A HREF="https://artlung.com/projects/">Projects</A> page. It contains its own updates. RSS is rad.
            </LI>
            <LI>
                The IndieWeb Carnival for this month has the theme of "affirmations." If you want to participate, <A HREF="https://artlung.com/affirmations-ic/">check it out</A>.
            </LI>
            <LI>
                I don't use Instagram <I>much</I>, but I do use it: <a href="https://www.instagram.com/artlung">@ARTLUNG</a>.
                And Strava: <a href="https://www.strava.com/athletes/artlung">ARTLUNG</a>. Mastodon: <A href="https://xoxo.zone/@artlung">@ARTLUNG</A>. Bluesky: <A href="https://bsky.app/profile/artlung.com">ARTLUNG</A>.
            </LI>

        </UL>
    </DD>


    <DT>January 2025</DT>
    <DD>
        <UL>
            <LI>
                <I><A href="https://smorgasborg.artlung.com/foods/">All The Foods I Cannot Eat</A></I> is a zine by <A href="https://leohblooms.com/">Leoh Blooms</A> which was made in 2017 and now has a proper home on the web.
            </LI>
            <LI>
                On the Lab: there's
                <A href="https://lab.artlung.com/spoiler/">Spoiler Widget</A> &amp;
                <A href="https://lab.artlung.com/root-color-properties-editor/">:root Color Properties Editor</A>
            </LI>
            <LI>
                My affirmations bot is back up and  running and I'm very pleased about that:
                <A HREF="https://thisbot.day/@affirmations">@affirmations@thisbot.day</A> on Mastodon &amp;
                <A HREF="https://bsky.app/profile/thisbot.day">thisbot.day on Bluesky</A>.
            </LI>
            <LI>
                <A HREF="https://www.youtube.com/@artlung">YouTube</A> is still where  I am doing videos of <A href="https://cssbattle.dev/">CSS Battle Daily Targets</A>. I've done a third of them and won't stop until I've done all of them. I have done 192. I have 376 undone.
            </LI>
            <LI>
                And at the <a href="https://smorgasborg.artlung.com/">Smorgasborg</a>:
                Interviews with
                <A HREF="https://smorgasborg.artlung.com/davidletterman/">David Letterman</A> &amp;
                <A HREF="https://smorgasborg.artlung.com/douglasadams/">Douglas Adams</A>.<BR>
                Plus a revamped copy of
                <I><A HREF="https://smorgasborg.artlung.com/power-of-the-powerless/">The Power  of the Powerless</A></I> by Václav Havel<BR> Lastly, I just put up a
                <A HREF="https://smorgasborg.artlung.com/sageman/">2006 talk by Marc Sageman</A> which I think about a lot.
            </LI>
        </UL>

    </DD>
    <DT>December 2024</DT>
    <DD>

        <UL>
            <LI>
                I revamped two websites. Both started years ago as pages on artlung.com and made their way to subdomains.
                There, I could ignore them. And this year, they have been exhumed and polished up! And so:
                <a href="https://smorgasborg.artlung.com">Smorgasborg</a> is a collection of random stuff. It's not on GitHub. And <a href="https://lab.artlung.com">THE LAB</a>
                is also a collection of random stuff, with a more programming, especially <I>web programming</I> focus.
                It <I><a href="https://github.com/artlung/lab.artlung.com/">is on GitHub</a></I>
            </LI>
            <LI>
                I'm particularly proud of my recent page about
                <a href="https://lab.artlung.com/webmentions/">Webmentions</a>.
            </LI>
            <LI>
                There have been a few more <a href="https://indieweb.org/Front_End_Study_Hall">Front End Study Hall</a> events since then. Still wonderful.
            </LI>
            <LI>
                I started making videos of myself haphazardly doing the daily CSS Battle.
                <a href="https://www.youtube.com/@artlung">@artlung on YouTube</a>
            </LI>
            <LI>
                <a href="https://events.indieweb.org/2024/12/indiewebcamp-san-diego-2024-7C9aq9A4Zv9m">
                    San Diego IndieWeb Camp 2024
                </a> was a delight! Excellent people and excellent ideas at an excellent local zine publisher and shop:

                <a href="https://www.babandfriends.com">Burn All Books &amp; Friends</a>.
            </LI>
        </UL>

    </DD>

  <DT>November 2024</DT>
  <DD>
<UL>
<LI>I am still <A href="https://artlung.com/blog/">blogging</A>.</LI>
<LI>I have added a <A href="https://artlung.com/blog/tag/indienews/">number of IndieNews</A> pieces.</LI>
<LI>I&#39;m still going <A href="https://artlung.com/blog/tag/swim2024/">in the water</A>.</LI>
<LI><A href="https://artlung.com/">My website</A> continues to evolve including more stuff pulled into my WordPress instance.</LI>
<LI>I&#39;m doing videos <A href="https://www.youtube.com/@artlung">on YouTube</A>.</LI>
<LI>I love doing <A href="https://cssbattle.dev/player/artlung">CSS Battles</A>!</LI>
<LI>I added support for accepting webmentions via <A href="https://webmention.io/">webmention.io</A>.</LI>
<LI>The code for this Tilde.Club page is now on <A HREF="https://github.com/artlung/artlung-tilde-club/">GitHub</A></LI>
</UL>
    </DD>
  <DT>July 2024</DT>
  <DD>
It's Comic-Con month. It ought to be fun! Rock on people!
  </DD>
  
  <DT>June 2024</DT>
  <DD><A href="https://indieweb.org/Front_End_Study_Hall">FrESH</A> is ongoing and fun to host. I've learned a lot.</DD>
  <DD>I will be going to San Diego Comic-Con in July. And I'll be going to <A href="https://artlung.com/blog/tag/xoxofest/">XOXO Festival</A> in Portland in August. That's nifty.</DD>
  <DT>May 2024</DT>
  <DD>I took over maintenance of <A href="https://blogofthe.day">blogofthe.day</A></DD>
  <DD>I added to my <A href="https://github.com/artlung">github profile</A></DD>
  <DD>Since my last update the first and a second <A href="https://indieweb.org/Front_End_Study_Hall">Front End Study Hall</A> were run. They were both great. And another is upcoming! I created a <A href="https://artlung.com/headers/-20240511">new header</A>. The water in the ocean is getting a bit warmer too. Life is pretty good.</DD>
  <DT>April 2024</DT>
  <DD>I have a new gig I'm enjoying. And I'll be doing a learning and teaching <A href="https://artlung.com/blog/2024/04/15/front-end-study-hall/">event I call "Front End Study Hall"</A> this month and I hope it'll be fun and useful.</DD>
  
  <DT>March 2024</DT>
  <DD>Now I have <A href="https://artlung.com/guestbook/">a Guestbook again</A>, and a <A href="https://artlung.com/contact/">Contact form</A> too, <EM>you know, for the attempted spammers</EM>.
  </DD>
  <DD>I had fun updating the <A href="https://artlung.com/visualization/">Blog Visualization</A> on my site. So many years blogging! Who knew Instagram was the majority of what I'm doing for many years?</DD>
  <DD><A href="https://artlung.com/cosplay/">Updated my Cosplay page</A></DD> 
  <DT>
    February 2024:
<DD><A href="https://artlung.com/blog/2024/02/21/tilde-club/">I wrote about updating this page</A> over on my other website.
  <DD>
    I added a "Lincoln Baio." I think that's what people are saying when they say that.
    <DD>I added a tiny style sheet.
    </DD>
    <DT>2014:
    <DD>It's fun to make little web pages.
</DL>

<HR>

<FORM>
<h2>
    <SAMP>FRIEND~1.HTM</SAMP>
    <B>(<INPUT TYPE="CHECKBOX">?)</B>
    <I>If I had a list of friends in a file called <CODE>Friendship.html</CODE> and copied it to, say, Windows 3.1 -- it would render that filename as <SAMP>FRIEND~1.HTM</SAMP><BR><BR>

        If you and I have had a conversation, please hit me with a message and I will add a link to your <A href="https://indieweb.org/tilde">Tildeverse</A> page! If I don't know you? Get to know me. <CODE>^_^</CODE>
    </I>
</h2>
</FORM>

<UL>
    <LI>
    <a HREF="https://tilde.town/~rossabaker/">ROSS</a>
    </LI>
    <LI>
        <A HREF="https://tilde.club/~gRegorLove/">GREGOR</A>
    </LI>
    <LI>
        <A HREF="https://tilde.club/~vanderwal/">THOMAS</A>
    </LI>
    <LI>
        <A HREF="https://tilde.club/~mattl/">MATT</A>
    </LI>
</UL>


<HR>

<H2>About This Site</h2>
<DL>
    <DT>Why does this page look old?
  <DD>It's written in HTML 2.0, an older spec. HTML 2.0 was created in 1995 (<A href="https://www.ietf.org/rfc/rfc1866.txt">RFC 1866</A>). It works just fine. The great thing about conforming to an HTML standard is that it's likely to keep working in decades later.
  <DD>HTML 2.0 referred to style sheets being linkable in LINK tags: <I>"<CODE>&lt;LINK&gt;</CODE> hyperlinks may also be processed without explicit user request; for example, style sheet resources may be processed before or during the processing of the document."</I>
  <DD>It would be another year before a browser shipped CSS.
    <DD>
        <I>Fun fact:</I> In HTML 2.0, the allowed attributes of the <CODE>&lt;IMG&gt;</CODE> tag are only <CODE>ALIGN</CODE>, <CODE>ALT</CODE>, <CODE>ISMAP</CODE>, and <CODE>SRC</CODE>.
    </DD>
  <DD>HTML 2 was superseded in 1997 by <A href="https://www.w3.org/TR/2018/SPSD-html32-20180315/">HTML 3.2</A>. Also now superseded.
</DD>
</DL>

<HR>

<P>More about me at <A href="https://artlung.com/links/">artlung dot com slash links</A>!

  <HR>


<?php require __DIR__ . '/webmention.php'; ?>


<HR>

<P><A href="https://validator.w3.org/check?uri=https://tilde.club/~artlung/"><IMG src="https://lab.artlung.com/html-2.0/valid_html.gif" alt="Checked - HTML 2.0"></A>

 <A href="https://validator.w3.org/check?uri=https://tilde.club/~artlung/"><IMG src="https://www.w3.org/Icons/valid-html20" ALT="VALID HTML 2.0"></A>

    <A href="https://artlung.com/"><img src="https://apps.artlung.com/logo-i-zer/88x31.php?c0=FECB65&amp;c1=447FB2" alt="ARTLUNG ❤️ Joe Crawford"></A>

  <HR>

<P>

  <A href="./tilde.map.php"><IMG src="https://tilde.club/~harper/webring.png" ismap ALT="IndieWeb Webring"></A>

  <I>
Click for the [
<A href="https://tilde.club/~harper/link.html?action=random">Random page</A> ],
Want to join the ring? Click here for
<A href="https://tilde.club/~harper/link.html?action=info">info</A>.
</I>

<HR>

<P><I>Created September 2014. <?php
$index_php = /* this file */  __FILE__;
$index_php_last_modified = filemtime($index_php);
$month = date('F', $index_php_last_modified);
$year = date('Y', $index_php_last_modified);
printf("Updated %s %s.", $month, $year);
 ?></I>
    (Source is on <A HREF="https://github.com/artlung/artlung-tilde-club/">GitHub</A>)

</BODY>
</HTML>
