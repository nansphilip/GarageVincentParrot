<?php

// PROCESS

// VARIABLES
$tplVarList = [];
$tplVarList["th"] = $th;

// OUTPUT
App::getTemplate("error", $tplVarList);
