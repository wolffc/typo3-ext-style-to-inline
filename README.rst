================
Extension Manual
================

Example Usage
=============
This Extension Provides a View Helper usage is simple:

::

  {namespace sti=Tx_Stylestoinline_ViewHelpers}
  <sti:StylesToInline styles="EXT:my_extension_key/Resources/Public/CSS/Style.css">
  <html>
    <head>
      <title>Example HTML</title>
    </head>
    <body>
      <div class="page">
        <h1>Example Headlin</h1>
        <p>some paragraph</p>
      </div>
    </body>
  </html>
  </sti:StylesToInline>

The Generated Output Dependend on your Style.css might be look semilar to this

::

  <html>
    <head>
      <title>Example HTML</title>
    </head>
    <body style="background:#000;color:#fff">
      <div class="page" style="background:#eee; width:500px; margin:20px; border:#ccc; padding:10px;">
        <h1 style="margin-top:0;margin-bottom:1em;">Example Headlin</h1>
        <p>some paragraph</p>
      </div>
    </body>
  </html>


Found a bug
===========
please Report the bug at the github repositior<
https://github.com/wolffc/typo3-ext-style-to-inline/issues


Source code on Github
=====================
the soruce code can be found at:
https://github.com/wolffc/typo3-ext-style-to-inline/

to install this extension from source code you have to do the following steps:

  # clone the repository
  git clone git@github.com:wolffc/typo3-ext-style-to-inline.git stylestoinline
  # change into the extension directory
  cd stylestoinline
  # install third party libary using composer
  composer install

this extension uses composer to load a third party libary for the hard "work"
as this is only a Light wrapper around the
https://github.com/tijsverkoyen/CssToInlineStyles

Documentation on composer can be found here: https://getcomposer.org/



