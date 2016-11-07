---
title: Automate your comic reading list with python
tags: [comics, code]
---

This is **marvelous**, a library for Python 3 to work with the
[Marvel API](http://developer.marvel.com/)! The project is young, but I
use it every week to see what new Marvel comics are being released.

## Install marvelous with pip

{% highlight python %}
pip install marvelous
{% endhighlight %}


## Using marvelous to get this week's comics

First you will need to register an account on
[developer.marvel.com](http://developer.marvel.com/) to get your personal public
and private keys. Then just import marvelous and authenticate yourself:

{% highlight python %}
import marvelous

m = marvelous.api(public_key, private_key)
{% endhighlight %}

You can then get every comic published this week like this:

{% highlight python %}
m.comics({
    'format': "comic",
    'formatType': "comic",
    'noVariants': True,
    'dateDescriptor': "thisWeek",
    'limit': 100}),
{% endhighlight %}

You can then access the `title`, `series.id`, and `dates.on_sale` of each
comic, which you can use to build a pull list script like mine:

{% highlight python %}
import marvelous

# Your own config file to keep your private key local and secret
from config import public_key, private_key

# Authenticate with Marvel, with keys I got from http://developer.marvel.com/
m = marvelous.api(public_key, private_key)

# Get all comics from this week, sorted alphabetically by title
pulls = sorted(m.comics({
    'format': "comic",
    'formatType': "comic",
    'noVariants': True,
    'dateDescriptor': "thisWeek",
    'limit': 100}),
    key=lambda comic: comic.title)

for comic in pulls:
    # Write a line to the file with the name of the issue, and the
    # id of the series
    print('{} (series #{})'.format(comic.title, comic.series.id))
{% endhighlight %}

## Help build marvelous!

I'm currently working on adding new features, tests, and documentation at
[rkuykendall/marvelous on github](https://github.com/rkuykendall/marvelous).
However, one of the biggest problems I have is that I need more goals! Marvelous
already works well enough for me to run my own scripts, but I'm sure you have
ideas for what you would want to do.

**Leave any requests or ideas in the comments!**
