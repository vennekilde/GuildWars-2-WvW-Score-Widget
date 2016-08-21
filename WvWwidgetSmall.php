<?php

/**
 * Description of WvWwidget
 *
 * @author jeppe
 */

$version = "1.4";
echo '<script type="text/javascript">//<![CDATA[
if(!window.jQuery)
{var script=document.createElement("script");script.type="text/javascript";script.async=false;script.src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js";var oScripts=document.getElementsByTagName("script");var s=oScripts[0];s.parentNode.insertBefore(script,s);}
//]]></script>
';
echo '<link rel="stylesheet" type="text/css" href="fsp/wvw/WvWwidget.css?v='.$version.'"/>';
echo "<script src='fsp/wvw/lib/Chart.min.js'></script>";
echo "<script src='fsp/wvw/lib/gw2-api-wrapper.js'></script>";
echo "<script src='fsp/wvw/WvWwidget.js?v=".$version."'></script>";
echo '

<div class="wvw-widget wvw-widget-small">
    <div class="wvw-component theme_header_style wvw-ppt-circle" style="padding-right: 15px;position: absolute;top: 80px;">
        <div class="wvw-space-connector-top theme_header_style"></div>
        <div class="wvw-label">Point Per Tick</div>
        <div class="wvw-canvas-holder wvw-component theme_header_style">
            <div class="wvw-canvas-holder2">
                <canvas class="wvw-ppt-canvas" width="50" height="50"></canvas>
            </div>
        </div>
        <div class="wvw-ppt-container wvw-component theme_header_style">
            <!--<div class="wvw-label">Tick</div>-->
            <div class="wvw-ppt-number-green wvw-ppt-number green">-</div>
            <div class="wvw-ppt-number-blue wvw-ppt-number blue">-</div>
            <div class="wvw-ppt-number-red wvw-ppt-number red">-</div>
        </div>
    </div>
    <div class="wvw-score wvw-component theme_header_style">
        <div class="wvw-label">Score</div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-label-green wvw-label green">-</div>
            <div class="wvw-score-bar-text-green wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-green wvw-score-bar green-bg"></div>
            </div>
        </div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-label-blue wvw-label blue">-</div>
            <div class="wvw-score-bar-text-blue wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-blue wvw-score-bar blue-bg"></div>
            </div>
        </div>
        <div class="wvw-score-bar-outer">
            <div class="wvw-score-label-red wvw-label red">-</div>
            <div class="wvw-score-bar-text-red wvw-score-bar-server-name"></div>
            <div class="wvw-score-bar-base">
                <div class="wvw-score-red wvw-score-bar red-bg"></div>
            </div>
        </div>
    </div>
    <div class="wvw-score-difference wvw-component theme_header_style">
        <div class="wvw-space-connector-right theme_header_style"></div>
        <div class="wvw-label">Difference</div>
        <div class="wvw-score-diff-number-green wvw-ppt-number green">-</div>
        <div class="wvw-score-diff-number-blue wvw-ppt-number blue">-</div>
        <div class="wvw-score-diff-number-red wvw-ppt-number red">-</div>
    </div>
</div>
';
