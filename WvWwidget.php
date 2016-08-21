<?php

/**
 * Description of WvWwidget
 *
 * @author jeppe
 */

$widgetPath = "/fsp/wvw";
$version = "1.5";
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>';
echo "<link rel='stylesheet' type='text/css' href='$widgetPath/WvWwidget.css?v=$version'>";
echo "<script src='$widgetPath/lib/Chart.min.js'></script>";
echo "<script src='$widgetPath/lib/gw2-api-wrapper.js'></script>";
echo "<script src='$widgetPath/WvWwidget.js?v=$version'></script>";

echo '
<div class="wvw-widget wvw-widget-medium" style=" position: relative;">
    <div class="wvw-canvas-holder">
        <div class="wvw-canvas-holder-inner">
            <canvas class="wvw-ppt-canvas" width="130" height="130"></canvas>
        </div>
    </div>
    <div class="wvw-ppt-container">
        <div class="wvw-label">Tick</div>
        <div class="wvw-ppt-number-green wvw-ppt-number green"></div>
        <div class="wvw-ppt-number-blue wvw-ppt-number blue"></div>
        <div class="wvw-ppt-number-red wvw-ppt-number red"></div>
    </div>
    <div class="wvw-score">
        <div class="wvw-label">Score</div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-bar-text-green wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-green wvw-score-bar green-bg"></div>
            </div>
            <div class="wvw-score-label-green wvw-label green"></div>
        </div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-bar-text-blue wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-blue wvw-score-bar blue-bg"></div>
            </div>
            <div class="wvw-score-label-blue wvw-label blue"></div>
        </div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-bar-text-red wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-red wvw-score-bar red-bg"></div>
            </div>
            <div class="wvw-score-label-red wvw-label red"></div>
        </div>
    </div>
</div>
';

