# Benchmark_Geek
For Benchmarking your codes, I have developed a repository to put easy to use and clean code functions for calculating benchmarking performance of different scripts.

Starting with PHP
------------------------
Benchmark.php gives an idea for speed and memory usage of PHP Constant v/s. Variable

Here Microtime() displays time taken for execution and memory _get _usage() for memory allocated for that function. This demo function is executing two process 100k times (defining a constant and setting a variable) and displays an output of time taken and memory allocated.

Kindly use php.exe on command line to execute the file, it will give faster output and can give exact figures

    c:\php\php.exe bechmark.php
Anyone can use this file to test their code's performance by putting their codes in the loop to test.
