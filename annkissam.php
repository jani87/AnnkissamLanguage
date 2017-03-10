<?php


    // ------------------------------------------------------------------------------------------------------
    // Based on specified rules, this function checkes if inputted string is correct Annkissam sentence !
    // ------------------------------------------------------------------------------------------------------
    function isAnnkissam($inputSpaceSeparatedString) {

        $nouns = ["abcd", "c", "def", "h", "ij", "cde"];
        $verbs = ["bc", "fg", "g", "hij", "bcd"];
        $articles = ["a", "ac", "e"];

        $arrayOfWords = explode(" ", $inputSpaceSeparatedString);

        $numberOfNouns = 0;
        $numberOfVerbs = 0;
        $numberOfArticles = 0;

        $correctSentence = false;

        foreach ($arrayOfWords as $currentString) {
            if (in_array($currentString, $nouns)) {
                $numberOfNouns = $numberOfNouns + 1;
            }
            if (in_array($currentString, $verbs)) {
                $numberOfVerbs = $numberOfVerbs + 1;
            }
            if (in_array($currentString, $articles)) {
                $numberOfArticles = $numberOfArticles + 1;
            }
        }

        if ($numberOfVerbs >= 1 && ($numberOfNouns >= 1 || $numberOfArticles >= 2) && (($numberOfNouns + $numberOfVerbs + $numberOfArticles) == count($arrayOfWords))) {
            $correctSentence = true;
        }

        return $correctSentence;

    }

    // -----------------------------------------------------------------------------------------
    // This function generates all possibilities of $inputString,
    // by entering one, two or three space characters on different positions in the string !
    // -----------------------------------------------------------------------------------------
    function generateAllPossibilities($inputString) {

        $all = [];

        for ($i = 1; $i < strlen($inputString); $i++) {

            // ------------------------------------------------------------------
            // Part with a single space within the string (so only 2 words) !
            // ------------------------------------------------------------------
            $currentString = substr($inputString, 0, $i) . " " . substr($inputString, $i);
            array_push($all, $currentString);

            // ----------------------------------------------------------------
            // Part with a two spaces within the string (so only 3 words) !
            // ----------------------------------------------------------------
            $subStringWithSingleSpace = substr($inputString, $i);
            for ($j = 1; $j < strlen($subStringWithSingleSpace); $j++) {

                $currentString = substr($inputString, 0, $i) . " " . substr($subStringWithSingleSpace, 0, $j) . " " . substr($subStringWithSingleSpace, $j);
                array_push($all, $currentString);

                // -----------------------------------------------------------------
                // Part with a three spaces within the string (so only 4 words) !
                // -----------------------------------------------------------------
                $subStringWithTwoSpaces = substr($subStringWithSingleSpace, $j);
                for ($k = 1; $k < strlen($subStringWithTwoSpaces); $k++) {

                    $currentString = substr($inputString, 0, $i) . " " . substr($subStringWithSingleSpace, 0, $j) . " " . substr($subStringWithTwoSpaces, 0, $k) . " " . substr($subStringWithTwoSpaces, $k);
                    array_push($all, $currentString);

                }

            }

        }

        return $all;

    }

    // -----------------------------------------------------------------------
    // Finally, this function returns only the correct Annkissam strings !
    // -----------------------------------------------------------------------
    function getAllElementsThatAreCorrectAnnkissam($inputArray) {

        $output = [];

        foreach ($inputArray as $currentElement) {
            if (isAnnkissam($currentElement)) {
                array_push($output, $currentElement);
            }
        }

        return $output;

    }

    // ---------------------------------------------------------
    // This is the string that will be provided by the user !
    // ---------------------------------------------------------
    $inputString = "abcdefg";

    // ----------------------------------------------------------------------------------------
    // This array will contain all possibilities of $inputString,
    // by entering one, two or three space characters on different positions in the string !
    // ----------------------------------------------------------------------------------------
    $allPossibilities = generateAllPossibilities($inputString);

    // -----------------------------------------------------------------------------------------------------------
    // This array will contain all elements from $allPossibilities array that are actual Annkissam sentences !
    // -----------------------------------------------------------------------------------------------------------
    $output = getAllElementsThatAreCorrectAnnkissam($allPossibilities);

    print_r($output);

?>