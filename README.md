# mdpatrick's Resource Box Generator
Here's the story. Back sometime in 2009 or 2010 there was this great pay service called "Unique Article Wizard". They would allow you to write articles using "spin" syntax and distribute them such that, to search engines, they looked like unique content. This allowed you to distribute articles to article directories and get more "link juice" from a single article. Every article distributed also allowed you to include a "resource box" which would allow you to link back to whatever website you liked. These articles were then distributed to anywhere between 300 and 1,000 websites that hosted article content presumably in hopes of getting AdSense clicks.

#### An Example of Spin Syntax (The "Unique" in Unique Article Wizard)
```
The {cat|dog|pet squirrel} jumped over the {table|train track|log}.
```

#### The Problem with Unique Article Wizard
Unique Article Wizard was great until Google's Panda update tanked every site I used it on. Prior to that, I could identify almost any "longtail keyword" and almost guarantee that with enough effort I could achieve it. UAW did have one fatal flaw, however: its resource box generator was made with some really inefficient javascript. If I used it the way I wanted to, it would crash my browser every single time. Basically, I was feeding it so many link combinations that it just couldn't handle it.
 
#### The Solution
I really wanted to be able to have the same level of "spin" on my links as I had in the content of my 300 to 450 word articles.

At the time PHP was the only language I knew... and as it turns out, it did exactly what I needed it to and (perhaps unsurprisingly) didn't crash my browser.

* [View the source](https://github.com/mdpatrick/resourcebox-generator-for-uaw/blob/master/resourcebox.php)
* [Screenshot demonstrating use](https://github.com/mdpatrick/resourcebox-generator-for-uaw/blob/master/demo.png)

###### Disclaimer and Context
This script was meant to serve a purpose and wasn't really meant for the wider world. It's not my "finest" work (note the inline styling, among other horrors)... but it did what it needed to. This was written before I had even been exposed to the term "web framework" or "distributed revision control system."
