
## Twitter Bootswatch Themes ##

twitter_bootswatch is an "add-on" plugin to the twitter_bootstrap plugin (https://github.com/davetosh/twitter_bootstrap).

twitter_bootstrap plugin is a simple, elegant, clean theme plugin for elgg that uses Twitter Bootstrap front-end framework.
Altough not perfect, twitter_bootstrap bring in some fluidity, and the ability to quickly adjust the overall appearance of a website.
The creator of twitter_bootstrap plugin even made the bootstrap_united plugin (https://github.com/davetosh/bootstrap_united) to change
the appearance of the site.

The purpose of this twitter_bootswatch plugin is to further allow you to change the appearance of your twitter_bootstrap theme
and select any of the Twitter Bootswatch theme available at http://bootswatch.com/2/.
Actually, all themes available there are bundled in the twitter_bootswatch plugin and can be used for your elgg site.

This plugin requires that Twitter Bootstrap for Elgg plugin  be installed and enabled.

Bootswatch Theme can be previewed and selected in Administration panel, under `Module Parameters->Bootswatch Theme`.



## Installation ##

To install twitter_bootswatch and get it to work, follow the easy steps below.
(We assume you are familiar with elgg customization and plugin installation tasks.)

First, download and install twitter_bootstrap from https://github.com/davetosh/twitter_bootstrap.
Make sure the folder name for the plugin is "twitter_bootstrap" and not "master" or something else.

Second, download and install twitter_bootswatch plugin from https://github.com/devleaks/twitter_bootswatch.
Make sure the folder name for the plugin is "twitter_bootswatch" and not something else.

Third, head to the Administration panel of your elgg site, disable any theme you might have that would interfere with twitter_bootstrap theme.
(Disable all theme-type plugins, it is easier.)
Enable twitter_bootstrap and twitter_bootswatch plugins.
In Plugin Parameter, select Bootswatch Theme, and select your theme of choice. Save the setting.

Finally, enjoy the new look of your site.



## Infinite Styles ##

I just added one more style sheet called bootswatchr.

Just head to bootswatchr.com and create your own style.

Make sure you select "Bootstrap 3.X" in settings at the top, and "Enable Responsive" option.
Use Bootstrap 3 for previewing as well.

Adjust all settings to your liking: Colors, backgrounds, gradients, font families...

When you are done, name your style, and save it; use minified version when saving.

Copy your style saved from bootswatchr.com to your elgg mod directory in

```
mod/twitter_bootswatch/vendors/bootstrap-bootswatchr.min.css
```

Overwrite the existing file if necessary.

Login as administrator on Elgg, activate twitter_bootswatch plugin,
and select bootswatchr theme from the twitter_bootswatch plugin setting page.

Your Elgg community site now use your own very personal and unique style.

As for all other bootswatch styles, it won't be perfect in all corners of your site, but most of it will be.


If you use fancy fonts, make sure they get loaded before using them in the style sheet.
For example, in the bootstrap-bootswatchr.min.css provided with the plugin, the following lines were preprended
to the file downloaded from bootswatchr.com:

````css
@import url(http://fonts.googleapis.com/css?family=Pacifico);
@import url(http://fonts.googleapis.com/css?family=Cousine);
@import url(http://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,400italic,300,300italic,900,900italic);
```

Also, recall that import statements must appear first in the style sheet.

(I apologize for the Plummy Pinkish bootswatchr theme created.
I wanted something distinguishably noticable to show that it actually works.
Mission Accomplished.)



## Notes ##

*	Twitter Bootstrap for Elgg plugin is written for Elgg 1.8 It will not work on any other version of Elgg.
*	Twitter Bootstrap for Elgg uses Bootstrap 2, available bootswatch themes are those of release 2. They can be previewed at http://bootswatch.com/2/.
*	Some themes may require some minor adjustments, mainly on font sizes, and width and height of boxes of all types (divs, etc.).
