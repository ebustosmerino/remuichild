<?php

defined('MOODLE_INTERNAL') || die();

$THEME->doctype = 'html5';
$THEME->name = 'remuichild';
$THEME->sheets = array('custom');
$THEME->parents = ['remui'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->javascripts = array('');
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_remui_process_css';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->hidefromselector = false;
