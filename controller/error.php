<?php

// PROCESS
App::setTitle("Error");

// VARIABLES
$tplVarList = [];
$tplVarList["th"] = $th;

// OUTPUT
App::getTemplate("error", $tplVarList);
