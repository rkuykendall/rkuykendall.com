---
title: Automate your comic reading list with python
tags: [comics, code]
---

This is **marvelous**, a brand new library for Python to work with the
[Marvel API](http://developer.marvel.com/)! The project is very new, but I'm
already using it ever week to see what new Marvel comics are being released.

## Install marvelous with pip

{% highlight python %}
pip install marvelous
{% endhighlight %}

if you don't have pip yet, you should be able to install it with:

{% highlight python %}
easy_install pip
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
import os
import marvelous

# Your own config file to keep your private key local and secret
from config import public_key, private_key

# All the series IDs of comics I'm not interested in reading
# I pull these out of the resulting pulls.txt file, then rerun this script
IGNORE = set([
    19709, 20256, 19379, 19062, 19486, 19242, 19371, 19210, 20930, 21328,
    20834, 18826, 20933, 20365, 20928, 21129, 20786, 21402, 21018, 14803,
    21285, 12212
])

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

# Grab the sale date of any of the comics for the folder name
directory = pulls[0].dates.on_sale.strftime('%m-%d')

# If there's no folder by that name, create one
if not os.path.exists(directory):
    os.makedirs(directory)

# Create a pulls.txt file in that folder
with open(directory + '/pulls.txt', 'w') as pull_checklist:
    # Check each comic that came out this week
    for comic in pulls:
        # If this series isn't in my ignore list
        if comic.series.id not in IGNORE:
            # Write a line to the file with the name of the issue, and the
            # id of the series incase I want to add it to my ignore list
            pull_checklist.write('{} (series #{})\n'.format(
                comic.title.encode('utf-8'), comic.series.id))

{% endhighlight %}

## Help build marvelous!

I'm currently working on adding new features, tests, and documentation at
[rkuykendall/marvelous on github](https://github.com/rkuykendall/marvelous).
However, one of the biggest problems I have is that I need more goals! Marvelous
already works well enough for me to run my own scripts, but I'm sure you have
ideas for what you would want to do.

**Leave any requests or ideas in the comments!**
