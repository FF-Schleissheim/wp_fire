# wp-fire
## wp-fire is a pre-customized Wordpress theme
Contributors: [h0p3zZ](https://github.com/h0p3zZ)\
Requires at least: 6.1\
Tested up to: 6.1\
Requires PHP: 5.6\
License: GPLv3 or later\
License URI: https://www.gnu.org/licenses/gpl-3.0.html

## Description

This theme is designed to fit the needs for fire brigades in Austria (Freiwillige Feuerwehren).

## How does it work

Clone this repository into the wp-content/themes folder of you wordpress installation.
There are placeholders in the code marked with `{CHANGE:.*}` (.* for regex notation) - represents some text that is added to show what the placeholder should be replaced with.
Before selecting the Theme I would suggest you remove those placeholders (or markers) and put the correct information in place.
For images I suggest to select the theme first and then just replace it with the visual editor (much simpler and the propper image can be uploaded simultaneously).
Select the theme (wp-fire) - if not done before.

Not create the wanted pages with the content via the admin panel ({url}/wp-admin).
Afterwards you can add those pages in the Navigation-block, that is located in the header.

## Working example

[Wesbite FF Schleißheim](https://www.ff-schleissheim.at)

## Fix/Workaround for mobile nav

To ensure the mobile nav fits the theme and (if wanted) the nav-items are bigger than preset medium use the following code:

```
.wp-block-navigation:not(.has-background) .wp-block-navigation__responsive-container.is-menu-open {
	color: var(--wp--preset--color--primary);
	background-color: var(--wp--preset--color--base);
	font-size: 1.35rem;
}
```

this goes into the additional css section in the website-customizer.
