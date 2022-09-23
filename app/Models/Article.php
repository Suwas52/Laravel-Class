<?php

    namespace App\Models;

    class Article {
        public static function getAllArticles() {
            return [
                [
                    'title' => "Some one",
                    'desc' => "Some  random details"
                ],
                [
                    'title' => "Some one",
                    'desc' => "Some  random details"
                ],
            ];
        }
    }
?>