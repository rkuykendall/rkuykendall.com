---
title: Block referral spam from Google Analytics
tags: [code]
---

<style>
.article h2 {
  font-size: 20px;
  color: #222;
  margin-top: 2em;
}
p {
  display: inline-block;
}
</style>

If you see a lot of referrals to your website from websites that deal with marketing
or search engines. This is a type of spam that these websites add to your Google
Analytics by sending fake requests with fake referral information.

I was finally able to get them blocked, but had a difficult time finding the
correct method, so here's step-by-step instructions:

## 1. Click 'Admin' at the top and 'All Filters' for your account:

<img src="/assets/ga-block-spam-steps/step-1.png" class="fit image-border">

## 2. Add a new filter for each site you would like to block:

<img src="/assets/ga-block-spam-steps/step-2.png" class="fit image-border">

## 3. In the filter, exclude traffic "to the hostname" of the site that is spamming you:

<img src="/assets/ga-block-spam-steps/step-3.png" class="fit image-border">

As you can see, I have a long list of sites blocked from mine:

{% highlight text %}
Remove 100dollars-seo.com
Remove 4webmasters.org
Remove best-seo-offer.com
Remove buttons-for-your-website.com
Remove success-seo.com
Remove top1-seo-service.com
Remove trafficmonetize.org
{% endhighlight %}

Hope that helps! Post a comment if you have any more questions.
