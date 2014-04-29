Webform Options By Bundle
=========================

Create options lists for Webform select lists dynamically generated from entity bundles.

Requirements
------------
Drupal 7.x

Installation
------------
1. Copy the entire webform directory the Drupal sites/all/modules directory.

2. Login as an administrator. Enable the module in the "Administer" -> "Modules"

3. Enable entity bundles under "Administer" -> "Configuration" ->
   "Content authoring" -> "Webform Options by Bundle settings"
   (admin/config/content/webform-options-by-bundle)

Use Cases
---------
A common use case for this module would be to allow users who are contacting a
business with multiple locations to provide feedback specific to one location.
Because this module works with all entities and bundles, it does not matter if
the location is represented by a node, taxonomy term, or another entity. By
using this module to generate the select list options, the site administrator
does not have to take the extra step of updating webform select list options if
another location is added later.

Warning
-------
The options in the select list are the labels of all entities that match that
entity type and bundle. Therefore, it would be very unwise to select a bundle
that contains many entites such as the "Node: Basic Page" bundle.
