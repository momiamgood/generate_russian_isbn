<?php

class Isbn
{
    public function generateIsbn(): string
    {
        $prefix = 978;
        $country_code = 5;
        $permitted_chars = '0123456789';
        $publisher_code = substr(str_shuffle($permitted_chars), 0, 5);
        $book_number = substr(str_shuffle($permitted_chars), 0, 3);
        $check_digit = rand(0,9);

        return $prefix . '-' . $country_code .'-'. $publisher_code .'-'.$book_number.'-'.$check_digit;
    }
}
