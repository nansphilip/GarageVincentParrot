<?php

// #######
// PROCESS
// #######

$tplVarList = [];
$tplVarList["th"] = $th;

// ######
// OUTPUT
// ######

App::getTemplate("error", $tplVarList);
