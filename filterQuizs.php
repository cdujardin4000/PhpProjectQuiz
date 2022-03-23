<?php
include 'quizs.php';
function filterQuizs($needle) {
    $quizsFiltered = [];
    foreach ($quizs as $quiz){
        foreach ($quiz as $key){
            if (is_string($quiz[$key]) && str_contains($quiz[$key], $needle)) {
                $quizsFiltered[] = $quiz;
                break;
            }
            elseif (is_array($quiz[$key])){
                foreach ($quiz[$key] as $question){
                    if(str_contains($question, $needle)){
                        $quizsFiltered[] = $quiz;
                        break;
                    }
                }
            }

        }
    }

    return $quizsFiltered;
}







