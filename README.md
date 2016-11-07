Wolfram Alpha Widgets
=====================

A small Joomla! module to display widgets from Wolfram Alpha on your site.

Written by Simon Champion, November 2016.


Introduction
------------

This is a simple module that displays a widget from Wolfram Alpha on your site.

The module allows you to configure it with various options, allowing you to pick any of the widgets available from Wolfram Alpha, including a number of presets, or any others that have been created, or any that you might create for yourself.

You can find out more about the Wolfram Alpha widgets on their Widgets site: http://www.wolframalpha.com/widgets.

Dependencies
------------

* Joomla!
* Wolfram Alpha being online.

Note that this extension has only been tested against the current version of Joomla! (3.6.4 at the time of writing), and against currently supported PHP versions (PHP 5.6 and higher at the time of writing).


Installation
------------

This module should be installed via the Extensions manager in Joomla!'s admin panel.


Setup
-----

Once installed, go the configuration panel for the module by navigating Joomla!'s admin menu to Components / Modules. Then find it in the list of modules and click on it.

You will now get the config screen for the module, which contains the following fields:

* 

Once you've selected your options, set the status to 'Published', set the position and other config parameters as required to place the module where you want it in the site, as per the normal Joomla! process, and hit 'Save'.


Multiple Instances
------------------

As with all Joomla! modules, you can create duplicates of the module with different config parameters and different publishing positions, etc. This could be particularly useful with Wolfram Alpha, due to the variety of widgets that are available from them.

Use the "Duplicate" button on the list of modules to achieve this. This is standard Joomla! functionality, so please see the Joomla! documentation for more details.


Who wrote this?
---------------

This code was written by Simon Champion.

All code in this repository is released under the GPLv2 licence. The GPLv2 licence document should be included with the code.


Support
-------

Please use the Github issues tracker to report any bugs or feature requests.

If the issue is with the Wolfram Alpha itself or with the content it produces, please report it directly to Wolfram Alpha.


Caveats and known issues
------------------------

* The author of this module is not connected with the operators of the Wolfram Alpha, and cannot take responsibility for any content that is produced by it.
* The correct functioning of this module is obviously dependant on Wolfram Alpha remaining online and continuing to support its widgets.
* The widget imports a stylesheet from Wolfram Alpha. However you may still find that you need to configure some styles for yourself; the ProtoStar stylesheet, for example, makes the widget's input fields larger than they should be.


Todo
----

* Add more presets.


Trademarks and Licenses
-----------------------

* Joomla!® is a registered trademark of Open Source Matters, Inc.
* Joomla! is distributed under the GPLv2 licence.
* Please see Wolfram Alpha's widget site (http://www.wolframalpha.com/widgets) for license details or usage restrictions of the widgets.
* This package is distributed under the GPLv2 licence. The GPLv2 licence document should be included with the code.
