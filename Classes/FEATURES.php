<?php

class Features
{
    public $FEATURES =
        [
            '1' => ['title' => 'The Figure Element',
                'description' => 'There unfortunately is no t any easy or semantic way to associate the caption, wrapped in a paragraph tag, with the image element itself. HTML5 rectifies this, with the introduction of the figure element. When combined with the figcaption element, we can now semantically associate captions with their image counterparts.',
                'date_created' => '27.10.2020',
                'link' => 'figure_tag.php'],
            '2' => ['title' => 'No More Types for Scripts and Links',
                'description' => 'You possibly still add the type attribute to your link and script tags. This is no longer necessary. It is implied that both of these tags refer to stylesheets and scripts, respectively. As such, we can remove the type attribute all together. ',
                'date_created' => '27.10.2020',
                'link' => 'no_types.php'],
            '3' => ['title' => 'To Quote or Not to Quote.',
                'description' => '...That is the question. Remember, HTML5 is not XHTML. You don not have to close your elements. With that said, there is nothing wrong with doing so, if it makes you feel more comfortable. I find that this is true for myself. Make up your own mind on this one. If you prefer a more structured document, by all means, stick with the quotes. ',
                'date_created' => '27.10.2020',
                'link' => 'quote.php'],
            '4' => ['title' => 'Make your Content Editable',
                'description' => 'The new browsers have a nifty new attribute that can be applied to elements, called contenteditable. As the name implies, this allows the user to edit any of the text contained within the element, including its children. There are a variety of uses for something like this, including an app as simple as a to-do list, which also takes advantage of local storage. ',
                'date_created' => '27.10.2020',
                'link' => 'editable_content.php'],
            '5' => ['title' => 'HTML prefetch webpage.',
                'description' => 'What rel=”prefetch” do? Let me explain, Lets say you open up your website homepage and you have navigation menu of “ About, Blog,Contact ”. You know that after landing the homepage the user is more likely to navigate to about page then you can prefetch the CSS files that will necessary for that webpage in the background before user even clicks on the link to navigate to that page. What it does is speeds up the process and user feels little to no delay in a reloading of a webpage. What rel=”prerender” do? It works same but its used to render the whole webpage in the background rather than just CSS file. It only works in Chrome & IE.',
                'date_created' => '27.10.2020',
                'link' => 'prefetch.php'],
            '6' => ['title' => 'HTML anchor element tricks',
                'description' => 'Some of the things you can do with anchor tags that you may or may not be familiar with before reading this article. Well the good news is now you know these anchor element tricks.',
                'date_created' => '27.10.2020',
                'link' => 'anchor.php'],];


}
