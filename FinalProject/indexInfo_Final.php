<?php
    // Name: Ryan Christopher
    // Pawprint: rdcb2f
    // Date: December 11, 2020
    // Final Project

    // File: index info PHP File

    // Code based off of lecture code

    $infoId = empty($_GET['infoId']) ? 'hold' : $_GET['infoId'];

    switch($infoId) {
        case 'nickname':
            $info = 'Phi Delt, Phis';
            break;
        case 'principles':
            $info = 'Friendship, Sound Learning, & Moral Rectitude';
            break;
        case 'motto':
            $info = 'One Man is No Man';
            break;
        case 'natfounding':
            $info = '1848';
            break; 
        case 'mofounding':
            $info = '1870';
            break;
        case 'philanthropy':
            $info = 'Live Like Lou Foundation';
            break;
        default:
            $info = 'Not a Valid Option';
            break;
    }

    print $info;
?>