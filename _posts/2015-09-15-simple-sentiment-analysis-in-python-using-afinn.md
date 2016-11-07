---
title: Simple sentiment analysis in python using AFINN
description: The python module AFINN makes adding sentiment analysis to your project insanely easy.
tags: [code, python]
---


<style>
    #header-image {
        margin: 10px -40px;
        background-color: #2e353f;
    }
    #header-image img {
        max-width: 70%;
        margin-left: 40px;
    }
    #header-image a img {
        border: none;
    }
</style>

<div id="header-image">
<a href="http://mapworldnews.com/" target="_blank"><img class="header-image" src="/assets/simple-sentiment-analysis-in-python-using-afinn/mwn_map.png" title="mapworldnews.com sentiment map" /></a>
</div>

## Background

For the project [Map World News](http://mapworldnews.com/), I needed to do sentiment analysis on articles, to show the map above. A popular options is to use the [NLTK library](http://www.nltk.org/), but it can be difficult to deploy.

I originally used the amazing [Data Science Toolkit](http://www.datasciencetoolkit.org/) by Pete Warden, which provides a set of simple HTTP APIs, and a python library to make it even simpler. However DSTK is not local, so processing a lot of different items is very time consuming.

I learned that DSTK used a [simple algorithm](https://github.com/petewarden/dstk/blob/master/text2sentiment.rb#L294-L319) and a wordlist from [Finn Årup Nielsen](https://twitter.com/fnielsen), and implemented it myself on Map World News. However, that was a little bit of work, and things have just gotten even easier:

## Fast, local, sentiment analysis in Python

[Finn Årup Nielsen](https://twitter.com/fnielsen) has just released a Python module named [AFINN](https://github.com/fnielsen/afinn) to add sentiment analysis using his wordlist to your project, and it could not be easier:

>     >>> from afinn import Afinn
>     >>> afinn = Afinn()
>     >>> afinn.score('This is utterly excellent!')
>     3.0
>
> In Danish:
>
>     >>> afinn = Afinn(language='da')
>     >>> afinn.score('Hvis ikke det er det mest afskyelige flueknepperi...')
>     -6.0
>
> With emoticons:
>
>     >>> afinn = Afinn(emoticons=True)
>     >>> afinn.score('I saw that yesterday :)')
>     2.0

To install AFINN, simply run

    pip install afinn

You can see AFINN working on [Map World News](http://mapworldnews.com/) in [/api/article.py](https://github.com/rkuykendall/map-world-news/blob/master/api/article.py#L46-L50).
