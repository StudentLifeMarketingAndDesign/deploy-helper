<?php

if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] == '2620:0:e50:6802::27' && $_SERVER['HTTP_X_DEPLOYDEVTOKEN'] == Environment::getEnv('SS_DEPLOYDEVTOKEN')) {
    Environment::setEnv('SS_ENVIRONMENT_TYPE', 'dev');
}