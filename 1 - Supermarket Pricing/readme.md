# Kata01: Supermarket Pricing

This kata arose from some discussions we’ve been having at the DFW Practioners meetings. The problem domain is something seemingly simple: pricing goods at supermarkets.

Some things in supermarkets have simple prices: this can of beans costs $0.65. Other things have more complex prices. For example:

* three for a dollar (so what’s the price if I buy 4, or 5?)
* $1.99/pound (so what does 4 ounces cost?)
* buy two, get one free (so does the third item have a price?)

This kata involves no coding. The exercise is to experiment with various models for representing money and prices that are flexible enough to deal with these (and other) pricing schemes, and at the same time are generally usable (at the checkout, for stock management, order entry, and so on). Spend time considering issues such as:

* does fractional money exist?
* when (if ever) does rounding take place?
* how do you keep an audit trail of pricing decisions (and do you need to)?
* are costs and prices the same class of thing?
* if a shelf of 100 cans is priced using “buy two, get one free”, how do you value the stock?

This is an ideal shower-time kata, but be careful. Some of the problems are more subtle than they first appear. I suggest that it might take a couple of weeks worth of showers to exhaust the main alternatives.

## Goal

The goal of this kata is to practice a looser style of experimental modelling. Look for as many different ways of handling the issues as possible. Consider the various tradeoffs of each. What techniques are best for exploring these models? For recording them? How can you validate a model is reasonable?

## Answer

2015/08/26 - Well the most logical answer that I come to when thinking about this problem is from my regular trips to the store. Heres what I first think of:

* three for a dollar (so what’s the price if I buy 4, or 5?) - **If you buy anything that is not divisible by 3 (1,2,4,5,7,8,etc) then you would pay the original price.**
* $1.99/pound (so what does 4 ounces cost?) - **With 16 ounces in a pound you take the divisible amount by ounce (1.99 / 16 = .124375) then mulitply by number needed (4 * .124375 = .4975) then round up.**
* buy two, get one free (so does the third item have a price?) - **Well technically this can be done a few ways. Price the third on scan to be $0. Or on scan then price each item to 1/3 of the total price**

2015/08/27 - Well the most logical answer that I come to when thinking about this problem is from my regular trips to the store. Heres what I first think of:

* three for a dollar (so what’s the price if I buy 4, or 5?) - **This comes down the fineprint of the deal. If its like my local grocery then it marks down each price to 1/3 of the price. So if you bought 4 then you'd pay $1 for the first three and the fourth would be $.33 rounded to $.34**
* $1.99/pound (so what does 4 ounces cost?) - **I think this works out how I explained previously.**
* buy two, get one free (so does the third item have a price?) - **I think im still good with my previous answer.**

2015/08/28 - Going to think of this from a programmic style as far as how I would store these values in a array/cart

* three for a dollar (so what’s the price if I buy 4, or 5?) - **Similar questions arise to nail down the individual price (if all products are ~ $.33 or if you have to buy 3 for a dollar and others are regular price) but I would say that as each item is added to the array or storage you would check the pricing and reduce to the cheaper value if mod 3**
* buy two, get one free (so does the third item have a price?) - **So I think this would have to be down when adding each item checking if its divisible by 3 then if thats the case make the price $0, otherwise mark it normally.**
