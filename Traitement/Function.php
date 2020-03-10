<?php
namespace facecook;
session_start();

function getUtName($var, $POST)
{
    foreach ($var as $value) {
        if ($value->getNom() == $POST) {
            return $POST;
        } else {
            return false;
        }
    }
}
function getUtEmail($var)
{
    foreach ($var as $key=>$value) {
        return "$key => $value";
    }
}
function getUtMdp($var, $POST)
{
    foreach ($var as $value) {
        if ($value->getMdp() == $POST) {
            return $POST;
        } else {
            return false;
        }
    }
}
function log($utilisateurs,$postEmail,$postMdp){
    for($i=0; $i < count($utilisateurs); $i++){
        if($utilisateurs[$i]->email == $postEmail && $utilisateurs[$i]->mdp == $postMdp){
            return true;
        }
    }
}
