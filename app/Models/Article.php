<?php

    namespace App\Models;

    class Article {
        public static function getAllArticles() {
            return [
                [
                    'id' => '1',
                    'title' => "News one",
                    'desc' => "Some  random details"
                ],
                [
                    'id' => '2', 
                    'title' => "News Two",
                    'desc' => "Some  random details"
                ],
            ];
        }

        public static function getSingleArticles($id) {
            $articles = self::getAllArticles();

            foreach($articles as $values){
                if ($values['id']===$id) {
                    return $values;
                }
            }
        }
    }
?>