.. _feature-list:

============
Feature List
============


.. note::

	The following list contains the key technical features of Neos. If you want to learn about the great
	features and experience that neos offers to editors and visitors please have a look at the `Neos Website
	<http://www.neos.io>`_. The `Neos editor documentation
	<https://www.neos.io/docs-and-support/editor-documentation.html>`_ is on our website.


ContentRepository and ContentElements
=====================================

The content repository is the conceptual core of Neos. It can store arbitrary content by managing so called Nodes that can
have custom properties and child nodes. The list of available NodeTypes is extensible and hierarchical so new NodeTypes
can be created by extending the existing ones.

Neos already comes with a sophisticated list of ContentElements to cover the basic editing needs without further extension.
The Standard ContentElements are implemented as NodeTypes from the Package Neos.NodeTypes and contain the elements
Headline, Text, Image, Image with Text, 2- 3- 4-Columns, Download List, Forms and Menu.

The List of ContentElements is easily extensible and the demo site already contains examples for YouTube and Flickr
Integration and even a Custom Image Slider.

.. note:: To learn about the Structure and Extensibility of the ContentRepository have a look at the Sections
	:ref:`content-structure` and the :ref:`property-editor-reference`.

Inline- and Structural Editing
==============================

Neos offers inline editing for basically all data that is visible on the website and fully supports the navigation of the
website menus during editing. For metadata or mode abstract informations it has an extensible Inspector. By implementing
a custom edit/preview mode the editing in Neos can be extended even further.

.. note:: To get an understanding of the editing workflow we recommend the section :ref:`user-interface-basics`.

Content Dimensions and Languages
================================

Most content has to be managed in variants for different languages or target groups. For that neos offers the concept so
called content dimensions.

.. note:: The configuration of ContentDimensions is explained in the section :ref:`content-dimensions`.

Workspaces and Publishing
=========================

Neos has workspaces built in. Every user works in his personal workspace and can publish his changes to make them public.
Furthermore, there is a "Workspace" module which can be used for publishing individual nodes.

.. note:: The concept of workspaces will be extended in future releases so shared editing workspaces between users and
	publishing to non-live workspaces will become possible.

Import Export
=============

Neos has full support for importing and exporting site content using content stored in XML files. That can also be used
to regularly import external data into Neos or to migrate content from other systems.

.. note:: The reference of the import and export command can be found in the  :ref:`Command Reference`.

Multi Domain Support
====================

Using the command line tools or the site-management backend module it's possible to link a hostname to a site node,
making it possible to have a multi domain installation in Neos. This way you can for example create a multilingual
website using a 'multi-tree concept'.

.. note:: There are still a few bugs related to URI resolving in this area; it needs to be more thoroughly tested.

Robust and secure Foundation
============================

Being built upon the most advanced PHP framework to date – Flow – makes your websites ready for whatever the future holds
for you.

Flow is secure by default, keeping your developers focussed on their main task - building your application -
without having to worry about low level implementations.


Surf Deployment and Cloud Support
=================================

The developers of Neos also created "Surf" a professional tool for downtime free server-deployment that is optimized for
Neos. With Surf Neos can be easily deployed to all kinds of hosting environments being it dedicated servers, virtual-machines
or cloud solutions of different flavours. The media handling of Neos is "cloud ready" by design and can handle external
resources exceptionally well.
