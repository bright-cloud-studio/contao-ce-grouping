# Bright Cloud Studio's Contao Content Element - Grouping
Adds new content element wrappers within Contao to allow the grouping of other content elements


## Goal
By default Contao supports wrapper content elements, although they all have a particular goal in mind. This package will add "generic" content element wrappers whose sole purpose is to group other content elements together. Previously, we would have to add 'Custom HTML' elements before and after other content just to add opening and closing '<div>' tags around other content. This package will give us this functionality while maintaining a clean Article view. Whatever you are trying to wrap around other content can be customized within the templates.

## How to Use
1. Install this package.
2. In Articles, you'll find two new content elements. Use "Grouping start" to begin a wrapper and "Grouping stop" to end one.
3. Customize what you want those wrappers to be in the "ce_grouping_start.html5" and 'ce_grouping_stop.html5" templates.
4. Enjoy.

# Issues
Please report any issues and I'll try to address them as soon as possible.

# Requests
Please report any requests you have and I'll try to implement what I can as soon as possible.
