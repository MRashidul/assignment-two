<?php

class StringProcessor
{
    /**
     * Processes an array of strings to count vowels and reverse the strings.
     *
     * @param array $strings An array of strings to process.
     * @return void
     */
    public function processStrings(array $strings): void
    {
        foreach ($strings as $string) {
            $vowelCount = $this->countVowels($string);
            $reversedString = $this->reverseString($string);
            $this->printResult($string, $vowelCount, $reversedString);
        }
    }

    /**
     * Counts the number of vowels in a string.
     *
     * @param string $string The string to evaluate.
     * @return int The number of vowels in the string.
     */
    private function countVowels(string $string): int
    {
        return preg_match_all('/[aeiouAEIOU]/', $string);
    }

    /**
     * Reverses a string.
     *
     * @param string $string The string to reverse.
     * @return string The reversed string.
     */
    private function reverseString(string $string): string
    {
        return strrev($string);
    }

    /**
     * Prints the result in the required format.
     *
     * @param string $original The original string.
     * @param int $vowelCount The number of vowels in the string.
     * @param string $reversed The reversed string.
     * @return void
     */
    private function printResult(string $original, int $vowelCount, string $reversed): void
    {
        echo sprintf(
            "Original String: %s, Vowel Count: %d, Reversed String: %s\n",
            $original,
            $vowelCount,
            $reversed
        );
    }
}

// Sample usage
$strings = ["Hello", "World", "PHP", "Programming"];
$processor = new StringProcessor();
$processor->processStrings($strings);

?>
