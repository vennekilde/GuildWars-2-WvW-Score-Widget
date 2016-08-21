# GuildWars 2 WvW Score Widget
A Widget for displaying GW2 WvW Score data, written in PHP and JQuery

This has been developed and tested on [https://farshiverpeaks.com](https://farshiverpeaks.com "farshiverpeaks.com") and can be seen in use there

There are two version of the widget
## Standard Version ##
The standard version is formatted as a standard sized widget

Source: WvWWidget.php

![WvW Widget Preview](http://i.imgur.com/IRkMraI.png)

## Small Version ##
A small version has also been created for the purpose of being displayed in the top of the page at all time

Source: WvWWidgetSmall.php

![WvW Widget Small Preview](http://i.imgur.com/31VVihA.png)

## Configuration ##
Inside the WvWWidget.js file, you will at the top see

    /************/
    /** CONFIG **/
    /************/

    //World to show matchup details from
    var world = 2007; //2007 == Far Shiverpeaks

    //How often the widget should refresh its data in milliseconds
    var REFRESH_TIME = 15000; //const
    
    /****************/
    /** END CONFIG **/
    /****************/

These are the two options you have to configure

You can get the world id's from [https://api.guildwars2.com/v1/world_names.json](https://api.guildwars2.com/v1/world_names.json "GW2 Worlds API")