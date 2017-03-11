# AnnkissamLanguage

PROBLEM

Imagine you have recently written a new language for Annkissam and collected all words into the Annkissam Dictionary. Similar to the English language, words can be categorized into nouns, verbs and articles. Below is the Annkissam Dictionary:

Nouns: "abcd", "c", "def", "h", "ij", "cde"
Verbs: "bc", "fg", "g", "hij", "bcd"
Articles: "a", "ac", "e"kk

However, the rules for creating a sentence in the Annkissam Language are very different. A valid sentence in the Annkissam Language should
- have all its words present in the Annkissam Dictionary.
- have a verb.
- have a noun or have at least two articles.

Your task is to write a sentence composer which will take a string as an input and return all possible valid sentences. This composer keeps the characters of the string in the same order, while inserting at most one space between characters as necessary, to create valid words and a valid sentence.

For your convenience, we have provided some sample inputs and outputs.
Input = "abcdefg", should return the following list:
[
"a bc def g",
"a bcd e fg",
"abcd e fg"
]

Input = "abcc", should return the following list:
["a bc c"]

Input = "abcd", should return the following list:
[]

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

ASSUMPTIONS

Passing empty string will return empty array.

If the input is made of anything other than alphabets between a to j, output will be an empty array.

This code is limited for maximum of four word sentences with the words in the dictionary.

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

CODE ISSUES

This code is having hardcoded spaces.

Having fixed set of words(Dictionary).



