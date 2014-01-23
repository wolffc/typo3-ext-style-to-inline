================
Extension Manual
================

Example Usage
=============
This Extension Provides a View Helper usage is simple:

.. code-block:: html
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


